#INSTALLER BY COLICCHIO ALEXANDRE FOR IARISS - 3DNOV




#UPDATE RASPIAN
echo "Let's update your Raspberry"
sudo apt -y update
sudo apt -y upgrade

#APACHE SERVER INSTALL AND CONF
echo "APACHE SERVER installation and configuration"
sudo apt -y install apache2
sudo chown -R pi:www-data /var/www/html/
sudo chmod -R 770 /var/www/html

#PHP SERVER INSTALL
echo "PHP SERVER installation and configuration"
sudo apt -y install php7.0

#FIREFOX INSTALL (FOR COMPATIBILITY REASON)
echo "Firefox install or update"
sudo apt -y install iceweasel

#TEST PHASE

#APACHE TEST
#wget -o verif_apache.html http://127.0.0.1
#cat ./verif_apache.html #MUST WRITE "it works !"

#PHP TEST
sudo chown -R $USER /var/www
sudo cmod 777 /var/www
sudo rm /var/www/html/index.html
#echo "<?php phpinfo(); ?>" > /var/www/html/index.php
#firefox "http://127.0.0.1/index.php"
#sudo rm /var/www/html/index.html

#COPY 3DNOV TEMPLATE INTO /var/www/html
echo "Now we'll set the 3DNOV interface"
cp launch.sh ~/Desktop
cd ..
cp -r ./html/* ~/var/www/html


#OCTOPRINT SERVER INSTALL
echo "Let's install octoprint and configure it"
cd ~
sudo apt -y install python-pip python-dev python-setuptools python-virtualenv git libyaml-dev build-essential
git clone https://github.com/foosel/OctoPrint.git
cd OctoPrint
virtualenv venv
./venv/bin/pip install pip --upgrade
./venv/bin/python setup.py install
mkdir ~/.octoprint

#ENABLE ACCESS TO SERIAL PORT
echo "Enable access to serial port"
sudo usermod -a -G tty pi
sudo usermod -a -G dialout pi

echo "Installation and configuration done !"
