
sudo mysql -u root -p

GRANT ALL PRIVILEGES ON *.* TO 'jm32aMs2s3mw'@'%' IDENTIFIED BY 'Akioe3221a8mC' WITH GRANT OPTION;
FLUSH PRIVILEGES;

nano /etc/mysql/my.cnf
#bind-address = 127.0.0.1
sudo /etc/init.d/mysql restart