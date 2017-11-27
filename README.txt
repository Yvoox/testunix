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
	- Go into Octoprint Settings - API - and Allow Cross Oringin ressource Sharin
7. Copy this APi key : D337D723E2684C0989708BD216F0C6F0  and replace ~/.octoprint/config.yaml  -> api : key with
	If the folder .octoprint isn't visible into home folder : right click -> show hidden 
8. Clic on launch.sh for start octoprint server API and the webinterface
9. F10 into firefox will give you a full size screen
