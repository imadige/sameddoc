sudo apt-get install tcl8.5 -y
sudo wget http://download.redis.io/releases/redis-stable.tar.gz && sudo tar xzf redis-stable.tar.gz
sudo mv redis-stable redis
cd redis && sudo make && taskset -c 1 sudo make test
sudo make install
cd utils && sudo ./install_server.sh


git clone https://github.com/phpredis/phpredis.git
cd phpredis
git checkout php7
phpize
./configure
make && make install
cd ..
rm -rf phpredis