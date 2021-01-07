CREATE DATABASE wordpress;
GRANT ALL ON wordpress.* TO 'user_wordpress'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;
FLUSH PRIVILEGES;

