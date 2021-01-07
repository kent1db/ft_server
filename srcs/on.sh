
# Nginx
rm -f /etc/nginx/snippets/self-signed.conf
cp ./ssl/self-signed.conf /etc/nginx/snippets/
cp ./ssl/ssl-params.conf /etc/nginx/snippets/
rm -f /etc/nginx/sites-enabled/default
rm -f /etc/nginx/sites-available/default
cp ./ssl/ft_server_conf /etc/nginx/sites-enabled/
cp ./ssl/ft_server_conf /etc/nginx/sites-available/

# SSL
openssl req -x509 -nodes -days 365 -subj "/C=FR/ST=FR/L=FR/O=42/CN=ft_server" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
sudo openssl dhparam -out /etc/nginx/dhparam.pem 2048


# MYSQL
mv ./wordpress/* /var/www/html/

# PHP
mv ./php/info.php /var/www/html/
mv ./phpMyAdmin /var/www/html

# Starting
service nginx start
service mysql start
service php7.3-fpm start
sudo mysql < mysql.sql
tail -f /var/log/nginx/access.log /var/log/nginx/error.log
