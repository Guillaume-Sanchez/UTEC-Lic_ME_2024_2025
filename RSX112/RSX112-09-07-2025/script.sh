#!/bin/bash

# Tests de sécurité SSH
TARGET=$1
PORT=${2:-22}
WORDLIST="/tmp/wordlist.txt"

echo "=== SSH Security Testing ==="

# 1. Création d'une mini wordlist
echo -e "\n[1] Creating test wordlist..."
cat > $WORDLIST << 'WORDS'
admin
password
123456
pkilab
pkilab2024
groupeX
root
test
ssh
alpine
WORDS

# 2. Test de bruteforce (limité)
echo -e "\n[2] Testing password strength (limited)..."
echo "WARNING: This is for educational purposes only!"
# Utilisation d'hydra avec limitations
timeout 30 hydra -l pkilab -P $WORDLIST -t 4 -f \
    ssh://$TARGET:$PORT 2>/dev/null | grep -E "host:|login:|password:"

# 3. Test de timing attacks
echo -e "\n[3] User enumeration via timing:"
for user in root admin pkilab nonexistent$(date +%s); do
    echo -n "Testing user '$user': "
    start=$(date +%s%N)
    timeout 2 ssh -oConnectTimeout=1 -oPasswordAuthentication=yes \
        $user@$TARGET -p $PORT 2>&1 >/dev/null
    end=$(date +%s%N)
    elapsed=$(( (end - start) / 1000000 ))
    echo "${elapsed}ms"
done

# 4. Test de clés SSH faibles
echo -e "\n[4] Testing for weak SSH keys:"
# Génération d'une clé faible (pour test)
ssh-keygen -t rsa -b 1024 -f /tmp/weak_key -N "" -q
ssh-keygen -y -f /tmp/weak_key > /tmp/weak_key.pub
echo "Generated weak RSA-1024 key for testing"
rm -f /tmp/weak_key*

# 5. Vérification des algorithmes obsolètes
echo -e "\n[5] Checking for deprecated algorithms:"
ssh -Q cipher | grep -E "3des|arcfour|blowfish" | while read cipher; do
    echo -n "Testing $cipher: "
    if ssh -oCiphers=$cipher -oConnectTimeout=2 $TARGET -p $PORT 2>&1 | \
        grep -q "no matching cipher"; then
        echo "✓ Disabled"
    else
        echo "\nENABLED"
    fi
done