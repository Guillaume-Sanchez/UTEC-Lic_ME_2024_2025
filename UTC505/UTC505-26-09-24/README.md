# UTC505 26-09-24

Shéma TCP IP :

[Applicatif] FTP/SSH/DNS/HTTP
[Transport] TCP/UDP/ICMP
[Resau] IPv4/IPv6/IPsec
[Accès_reseau] Ethernet

Les couches communiquent entre elles en montant et en decendant.

1 octet -> 8bits
1 octet -> 2 symbole hexadecimal

Maximun d'une tram 1518 et minumu 64 octets



Exemple d'une trame :

00: 0800 2018 ba40 aa00 0400 1fc8 0800 4500
16: 0028 a3fc 4000 3f06 af63 a3ad 2041 a3ad
32: 80d4 0558 0017 088d de7e ba77 66c9 5010
48: 7d78 3c30 0000 0000 0000 0000 0000 0000


0800 2018 ba40 -> adresse mac dst 6 octets
aa00 0400 1fc8 -> adresse mac src 6 octets
0800           -> types 2 octets

4500 0028 a3fc 4000 3f06

a3ad 2041      -> adresse IP dst 4 octets
a3ad 80d4      -> adresse IP src 4 octets
0558           -> port dst
0017           -> port src

088d de7e ba77 66c9 5010 7d78 3c30

0000 0000 0000 0000 0000 0000 -> bourage d'octets


Il faut 64 octet minimum donc utilisation des Bit de bourage pour complêter la tram (représenté par 0000)


Petit exemple d'un scapy :

from scapy.all import IP, ICMP 

# Create an IP packet with the correct parameters 
packet = IP(version=4, ihl=None, tos=0x00, id=1, flags=0, ttl=64, proto='icmp', src="192.168.10.10", dst="192.168.10.100") 
# Display the packet details 
packet.show()  

nk@debian:~/Documents/UTEC/UTC505/UTC505-26-09-24$ scapy
INFO: Can't import PyX. Won't be able to use psdump() or pdfdump().
                                      
                     aSPY//YASa       
             apyyyyCY//////////YCa       |
            sY//////YSpcs  scpCY//Pp     | Welcome to Scapy
 ayp ayyyyyyySCP//Pp           syY//C    | Version 2.5.0
 AYAsAYYYYYYYY///Ps              cY//S   |
         pCCCCY//p          cSSps y//Y   | https://github.com/secdev/scapy
         SPPPP///a          pP///AC//Y   |
              A//A            cyP////C   | Have fun!
              p///Ac            sC///a   |
              P////YCpc           A//A   | What is dead may never die!
       scccccp///pSP///p          p//Y   |                     -- Python 2
      sY/////////y  caa           S//P   |
       cayCyayP//Ya              pY/Ya
        sY/PsY////YCc          aC//Yp 
         sc  sccaCY//PCypaapyCP//YSs  
                  spCPY//////YPSps    
                       ccaacs         
                                       using IPython 8.5.0

>>> a = IP(version=4, ihl=None, tos=0x00, id=1, flags=0, ttl=64, proto='icmp', src="192.168.10.10", dst="192.168.10.100")
>>> a.show()
###[ IP ]### 
  version   = 4
  ihl       = None
  tos       = 0x0
  len       = None
  id        = 1
  flags     = 
  frag      = 0
  ttl       = 64
  proto     = icmp
  chksum    = None
  src       = 192.168.10.10
  dst       = 192.168.10.100
  \options   \

>>> mon_ping = (Ether() / IP(dst="192.168.0.129")) /ICMP()dns
>>> my_ping = (Ether(dst="14:18:c3:63:6a:14")) /IP(dst="192.168.0.129")) / ICMP()
