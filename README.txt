By COLICCHIO Alexandre for Iariss / 3DNOV

Installation guide on RASPBIAN OS
1. Open a terminal into script folder
2. Type chmod +x install.sh
3. Type ./install.sh
4. Let the script install for you
5. Launch firefox and go to http:/127.0.0.1:5000
6. Complete the setup wizard from octoprint with :
	- Disable Access Control
	- Disable connectivity check
	- Just next until finish and Reload
	- Go into Octoprint Settings - API - and Allow Cross Oringin ressource Sharing
7. Clic on launch.sh for start octoprint server API and the webinterface
8. F10 into firefox will give you a full size screen

FAQ:

- Lors du lancement du navigateur web sur l'url 127.0.0.1, une erreur 403 et FORBIDEN ACCESS apparait OU une erreur de copie s'est produite après 
  "Now we'll set the 3DNOV interface"
	-ouvrir un terminal et lancer sudo chown -R $USER /var/www  et sudo cmod 777 /var/www