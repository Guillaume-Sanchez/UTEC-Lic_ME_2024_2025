# Exercice2
## 3
root@ubuntu-RSX112:~# groupadd visiteurs -g 1404
## 4
root@ubuntu-RSX112:~# useradd -u 140401 -g visiteurs -m -s /bin/bash invite
## 5
root@ubuntu-RSX112:~# cat /etc/passwd | grep invite     
invite:x:140401:1404::/home/invite:/bin/bash
root@ubuntu-RSX112:~# cat /etc/group | grep visiteurs
visiteurs:x:1404:
## 6
root@ubuntu-RSX112:~# chage -M 90 -W 14 -I 7 invite
## 7 
root@ubuntu-RSX112:~# cat /etc/shadow | grep invite
invite:!:20206:0:90:14:7::
## 8
root@ubuntu-RSX112:~# echo -e "welc0me\nwelc0me" | passwd "invite"
## 9
useradd -u 140402 -g visiteurs -m -s /bin/bash intrus
chage -M 90 -W 14 -I 7 invite
echo -e "1234\n1234" | passwd intrus
## 10
root@ubuntu-RSX112:~# tail -n 2 /etc/shadow
invite:$6$P87urVNAHId2z7fG$GHn/.vL4nI6nsgq.uaxmGqSgTn4n39bD/0HsQwFICgKp.4dhKOiu5scPs4tdkN2Avya09zPBI5qSxfF2Fu.eC0:20206:0:90:14:7::
intrus:$6$F8Zh5OOiIrskScOO$WdDFLGZakeBdyv4DM0RCL5zvPkYpxllgi9IcucoVXb6z5ujYW.KtfW4ZsZrUkjFssJqta5ZG2qvpRmfduL6tJ/:20206:0:99999:7:::

Le nombre de jours avant expiation du mdp est passé à 99999 pour l'utilisateur intrus