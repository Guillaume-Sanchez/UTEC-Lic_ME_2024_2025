# UTC505-15-10-24

### IPV4

* ICMP
* ARP
* RARP
* IGMP

> anatomi

### IPV6

> RCF 2460

### L'internet Protocol (IP)

* Communications dans le mode minimal DATAGRAM (non Aqcuittés)
* adressage internet et Routage entre réseau
* adaptation à la liaison traversée
* Encapsulation/désencapsulation par rapport à la couche transport

TTL -> temps de vie d'un paquets. (un retour négatif d'un ping par exemple.)

> Transmition d'un datagramme
> Difference entre le routing et le switching

> /!\ Pour l'examun, calcul des adress IP /!\

Un mask est défini pour que checker chaque bit de l'adress IP.
Adresse Ip de gauche a droit, du faible au plus fort.

Le Mask determine la limite à ne pas dépasser  exemple :

  IP 163.173.128.6 -> 10100011 10101101 10000000 00000110
Mask 255.255.253.0 -> 11111111 11111111 11111100 00000000

Son adresse réseau c'est : 163.173.128.0

Son adresse Broadcast c'est : 163.173.131.255

On le sait car 163.173.128.6 c'est -> 10100011 10101101 10000000 00000110 pour calculer son BraodCast on prend tous se qui a derière le mask donc derrière **11111111 11111111 111111**00 00000000 et on le passe à 1 se qui donne 10100011 10101101 100000**11 11111111** donc reconvertie en octet ça donne 168.173.131.255

Nombre d'adresse de diffusion : 

Pour calculer le nombre d'adresse de diffusions, on prend le NetID qui correspond à 22 bits, le HostId qui correspond à 10 bits, le tous fais bien 32 bits.
On prend le HostId, on fait 2-2 = 1024 -2 = 1022 adresse de diffusion.


Nombre de personne sur la terre c'est 8 milliard
Nombre de personne utilisant internet c'est 5.5 milliard 
Donc besoin de 5,5 milliard d'IPv4.
2^32 d'IPv4. 4.3 milliard donc pénuri d'IP, solution numéro 1, utiliser le NAT. Solution 2 les sous réseaux.




exercice defragmentation :

>>> send( fragment(IP(dst="10.0.0.5")/ICMP()/("X"*1472)) )
.
Sent 1 packets. -> parce que 1480 bits + 20 bits = 1500 donc 1 seul packet
>>> send( fragment(IP(dst="10.0.0.5")/ICMP()/("X"*1473)) )
..
Sent 2 packets.-> parce que 1481 bits + 20 bits = 1501 donc 2 packets car 1500 max par packet



____

MTU = charge utilse
MSS = 