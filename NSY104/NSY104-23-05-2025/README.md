# NSY104-23-05-2025

## Créer un raid 5 :

### Installation du packet mdadm :

```
apt install mdadm
```

### création des partitions :

```
cfdisk /dev/sdb
```
> -> gpt -> New -> Type -> Linux RAID -> Whrite -> Yes
```
cfdisk /dev/sdc
```
> -> gpt -> New -> Type -> Linux RAID -> Whrite -> Yes
```
cfdisk /dev/sdd
```
> -> gpt -> New -> Type -> Linux RAID -> Whrite -> Yes
```
cfdisk /dev/sde
```
> -> gpt -> New -> Type -> Linux RAID -> Whrite -> Yes

### Création du RAID5 avec mdadm :

```
mdadm --create /dev/md0 --level=raid5 --raid-devices=3 /dev/sdb1 /dev/sdc1 /dev/sdd1 --spare-device=1 /dev/sde1
```

### Sauvegarde de configuration de la matrice :
```
mkfs -t ext4 /dev/md0
```
`en root :`
```
echo "DEVICE partitions" > /etc/mdadm/mdadm.conf
mdadm --detail --scan >> /etc/mdadm/mdadm.conf
```
### Montage du RAID5 :
```
mount /dev/md0 /mnt
```

### Pour voir les info :
```
cat /proc/mdstat
mdadm --detail /dev/md0
```
### Pour simuler une pan :
```
mdadm /dev/md0 -f /dev/sdc1
```
### Force L'arrêt du disque dans le RAID5
```
mdadm /dev/md0 --fail /dev/sdc1
```
### Supprimer un disque du RAID5
```
mdadm /dev/md0 --remove /dev/sdc1
```
### Supprimer les informations d'appartenance du disque
```
mdadm --zero-superblock /dev/sdc1
```
### Ajouter un disque au RAID5 :
```
mdadm /dev/md0 -a /dev/sdc1
```
### Arrêter la matrice :
```
unmount /mnt
mdadm --stop /dev/md0 
```

mdadm --zero-superblock /dev/sdb1
mdadm --zero-superblock /dev/sdc1

## Pour créer un un LVM et suite du TP

apt install lvm2

```
cfdisk /dev/sdb
```
> -> gpt -> New -> Type -> Linux LVM -> Whrite -> Yes
```
cfdisk /dev/sdc
```
> -> gpt -> New -> Type -> Linux LVM -> Whrite -> Yes

fdisk -l /dev/sdb

fdisk -l /dev/sdc

pvcreate /dev/sdb1

pvdisplay /dev/sdb1


vgcreate vg01 /dev/sdb1

vgdisplay vg01

lvcreate -n data01 -L 512 vg01
ls /dev/vg01/data01

lvdeisplay -m /dev/vg01/data01



mkfs -t ext4 /dev/vg01/data01

mkdir /mnt/data01
mount /dev/vg01/data01 /mnt/data01

lvcreate -n data02 -L 512m vg01
lvdisplay -m /dev/vg01/data02

mkfs -t ext4 /dev/vg01/data02

mkdir /mnt/data02
mount /dev/vg01/data02 /mnt/data02

1 : Question de cour représentation de informations - 6 points
2 : Machine de turing - 4 points
3 : Fonctionnement d'une unité central - 4 points
4 : QCM 6 points