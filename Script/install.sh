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
sudo rm /var/www/html/index.html
#echo "<?php phpinfo(); ?>" > /var/www/html/index.php
#firefox "http://127.0.0.1/index.php"
#sudo rm /var/www/html/index.html

#COPY 3DNOV TEMPLATE INTO /var/www/html
echo "Now we'll set the 3DNOV interface"
cd ..
cd html 
cp config_imp.php ~/var/www/html
cp control.php ~/var/www/html
cp firmware.php ~/var/www/html
cp header.php ~/var/www/html
cp index.php ~/var/www/html
cp machine.php ~/var/www/html
cp machine_name.php ~/var/www/html
cp modele.php ~/var/www/html
cp n_serie.php ~/var/www/html
cp print.php ~/var/www/html
cp README.md ~/var/www/html
cp search_file.php ~/var/www/html
cp start_gcode.php ~/var/www/html
cp start_imp.php ~/var/www/html
cp start_stl.php ~/var/www/html
cp version.php ~/var/www/html
mkdir -p ~/var/www/html/css
mkdir -p ~/var/www/html/img
mkdir -p ~/var/www/html/js
mkdir -p ~/var/www/html/traitement


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
