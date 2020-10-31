
apt update
apt upgrade -y
apt install nginx gnupg lsb-release vim wget unzip dpkg php7.3-fpm php7.3-mbstring php-mysql supervisor -y

rm -rf /etc/nginx/sites-available/default
cp /default /etc/nginx/sites-available/

cd /var/www/html/
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip
unzip *.zip
rm -rf *.zip
mv phpMyAdmin-5.0.1-all-languages  phpmyadmin
wget https://wordpress.org/latest.zip
unzip *.zip
rm -rf *.zip
service php7.3-fpm start
service nginx start
echo "daemon off;" >> /etc/nginx/nginx.conf


cp /config.inc.php /var/www/html/phpmyadmin/
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp
rm -rf /var/www/html/wordpress/wp-config-sample.php
mv /wp-config.php /var/www/html/wordpress


cd /
#install supervisord

mkdir -p /var/log/supervisor;
mkdir -p /etc/supervisor/conf.d;
mv supervisord.conf /etc/supervisord.conf;

#mysql

wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
dpkg -i mysql-apt-config_0.8.14-1_all.deb
apt-get update
apt-get install mysql-server -y
service mysql start


#create DB & user
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'mlabrayj'@'localhost' IDENTIFIED BY 'mlabrayj';";
mysql --password=mlabrayj --user=mlabrayj -e "CREATE DATABASE wordpress;";
mysql --password=mlabrayj --user=mlabrayj -e "FLUSH PRIVILEGES;";

#import DB
mysql --password=mlabrayj --user=mlabrayj wordpress < /localhost.sql
