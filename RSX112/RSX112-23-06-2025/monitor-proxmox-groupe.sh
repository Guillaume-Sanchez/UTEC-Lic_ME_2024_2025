#!/bin/bash 
# monitor-proxmox-groupe.sh 
 
PROXMOX_HOST="ns3061298.ip-162-19-107.eu" 
PROXMOX_USER="groupe[X]@pve" 
GROUP_NUM="GSZ" 
 
echo "=== Monitoring Groupe $GROUP_NUM ===" 
echo "Time: $(date)" 
echo "" 
 
# Pour chaque conteneur 
for i in 232 233 234; do 
    CT_ID="${i}" 
    echo "Container $CT_ID:" 
     
    # Status via API Proxmox (nécessite token API) 
    # ou via SSH direct 
    ssh pkilab@192.168.1.${i} "free -h | grep Mem" 2>/dev/null || echo "  Unreachable" 
    echo "" 
done
