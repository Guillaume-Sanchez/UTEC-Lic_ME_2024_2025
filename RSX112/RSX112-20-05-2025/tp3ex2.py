import os 
from Crypto.Util.number import long_to_bytes 
from Crypto.Util.strxor import strxor 
 
FLAG = open("/home/nk/Documents/UTEC-Lic_ME_2024_2025/RSX112/RSX112-20-05-2025/flag.txt", "rb").read() 
key = os.urandom(4) * 20 
c = strxor(FLAG, key[:len(FLAG)]) 
print(c.hex())