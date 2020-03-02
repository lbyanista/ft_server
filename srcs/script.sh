apt update
apt upgrade
apt install nginx vim wget unzip dpkg php7.3-fpm php-mysql supervisor -y

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

cd /
#install supervisord
mkdir -p /var/log/supervisor;
mkdir -p /etc/supervisor/conf.d;
mv supervisord.conf /etc/supervisord.conf;
