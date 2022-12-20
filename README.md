sudo apt update

sudo apt install apache2 -y

sudo apt install mysql-server -y

sudo apt install php libapache2-mod-php php-mysql -y

sudo chown -R $USER:$USER /var/www

sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl

(click space key while selecting apache2. No need to give password)

sudo mysql

INSTALL COMPONENT "file://component_validate_password";

SET GLOBAL validate_password.policy = 0;

SET GLOBAL validate_password.length = 5;

SET GLOBAL validate_password.mixed_case_count = 0;

SET GLOBAL validate_password.number_count = 0;

SET GLOBAL validate_password.special_char_count = 0;

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'mysql';

FLUSH PRIVILEGES;

EXIT;

cd /var/www/html
