46.101.182.150
46.101.154.245
apt-get update
apt-get install nginx
cd /usr/share/nginx/html
sudo apt-get install php7.0-mbstring php7.0-mysql php7.0-mcrypt php-mbstring php-gettext
search Google: Couldn't find any package by regex 'php7.0-fpm'
sudo apt-add-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.0-fpm php7.0-mysql php7.0-mcrypt php-mbstring php-gettext
sudo apt-get install php7.1-mcrypt
sudo phpenmod mcrypt
sudo phpenmod mbstring
sudo phpenmod mbtring7.0
sudo apt-get install php7.0-mbstring
sudo apt-get install php7.1-mbstring
sudo phpenmod mbstring
sudo apt-get install mariadb-client mariadb-server
::::::: -u root -p qwertyui
sudo apt-get install phpmyadmin
sudo ln -s /usr/share/phpmyadmin/ /var/www/html/
cd /etc/nginx/sites-enabled
nano default
----------------------
location ~ \.php$ {
try_files $uri =404; fastcgi_split_path_info ^(.+\.php)(/.+)$;
fastcgi_pass unix:/run/php/php7.0-fpm.sock;
 fastcgi_index index.php;
  include fastcgi_params;
   }
----------------------
nginx -t
service nginx restart
root/var/www/html;
service nginx restart
::::::::::::::::::::::::::::::::::::::::::::::::::::: Thing Preference
sudo /opt/lampp/manager-linux-x64.run ::: // lampp run
sudo /opt/lampp/share/xampp-control-panel/xampp-control-panel :::// lampp run
mysql -h 127.0.0.1 -P 3306 -u root -p // open mysql 127.0.0.1 "Localhost"
sudo ntfsfix /dev/sda7 :::::// [How To] Solve Disk Mount Error in Ubuntu
------------------------------------
 mysql_secure_installation // SECURTY phpmyadmin
 apt-get install php5 php-pear php5-mysql
 service apache2 restart
sudo mkdir -p /var/www/example.com/public_html //////debian
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/example.com.conf // Create New Virtual Host Files
sudo nano /etc/apache2/sites-available/ajabat.tk.conf /// This is New Virtual Host Files
sudo a2ensite ajabat.tk.conf
sudo a2ensite ajabat.tk.com.conf
sudo nano /usr/share/nginx/www/info.php

sudo ln -s /usr/share/phpmyadmin/ /usr/share/nginx/www
sudo service mysql stop
sudo /opt/lampp/lampp start
sudo apt-get install mysql-server
SET PASSWORD FOR root@localhost=PASSWORD('');
//////////////////////////////////////////////////////
DELETE FROM `english_word`
 WHERE id NOT IN (SELECT *
                    FROM (SELECT MIN(n.id)
                            FROM word_english_mean
                        GROUP BY n.`english_word`) x)
/////////////////////////////////////////////////////
DELETE FROM word_english_mean WHERE id NOT IN (
 SELECT * FROM (SELECT MIN(n.id) FROM word_english_mean n GROUP BY n.`english_word`) x)
/////////////////////////////////////////////////// 506531
create table penguins(foo int, bar varchar(15), baz datetime);

insert into penguins values(1, 'skipper', now());
insert into penguins values(1, 'skipper', now());
insert into penguins values(3, 'kowalski', now());
insert into penguins values(3, 'kowalski', now());
insert into penguins values(3, 'kowalski', now());
insert into penguins values(4, 'rico', now());


delete a
from penguins a
left join(
select max(baz) maxtimestamp, foo, bar
from penguins
group by foo, bar) b
on a.baz = maxtimestamp and
a.foo = b.foo and
a.bar = b.bar
where b.maxtimestamp IS NULL;

CREATE TABLE NoDupeTable LIKE penguins;
INSERT NoDupeTable SELECT * FROM word_english_mean group by english_word,arabic_word_fl;

INSERT NoDupeTable SELECT * FROM penguins group by `bar`,`baz`;
INSERT emad SELECT * FROM word_english_mean group by `english_word`;
RENAME TABLE `alhamou`.`word_english_meassn` TO `alhamou`.`word_english_mean`;
sudo ln -s /etc/nginx/sites-available/site /etc/nginx/sites-enabled/site
:::::::::::::::::::::::::::::::::::: Star Emad
1  sudo apt-ge update
2  sudo apt-get update
3  sudo apt-get nginx
4  sudo apt-get install nginx
5  sudo ufw allow 'Nginx HTTP'
6  sudo ufw status
7  Status: active
8  sudo apt-get install mysql-server
9  mysql_secure_installation
10  sudo apt-get install php-fpm php-mysql
11  sudo nano /etc/php/7.0/fpm/php.ini
12  sudo systemctl restart php7.0-fpm
13  sudo nano /etc/nginx/sites-available/default
14  sudo nginx -t
15  sudo systemctl reload nginx
16  sudo nano /var/www/html/info.php
17  sudo rm /var/www/html/info.php
18  sudo nano /var/www/html/info.php
19  mysql -u root -p
20  exit
21  mysql -u root -p
22  historz
23  history
mysql> ALTER TABLE word_english_mean DROP COLUMN arabic_disrebtion;

::::::::::::::::::::::::::::::::: End Emad
