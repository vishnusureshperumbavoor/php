access grand to var/www/html

sudo chown -R $USER:$USER /var/www

#mysql password low

SET GLOBAL validate_password.policy = 0;

SET GLOBAL validate_password.length = 5;

SET GLOBAL validate_password.mixed_case_count = 0;

SET GLOBAL validate_password.number_count = 0;

SET GLOBAL validate_password.special_char_count = 0;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'mysql';

FLUSH PRIVILEGES;

quit;
