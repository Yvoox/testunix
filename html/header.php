<!DOCTYPE html>

<script>
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
} 
</script>


<html lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="http://localhost:5000/static/webassets/packed_client.js"</script>
<script src="http:/localhost:5000/static/js/lib/less.min.js" type="text/javascript"></script>
<script src="./js/function.js" type="text/javascript"></script>

<link href="./css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./css/style.css" />


<title>3D NOV</title>
</head>


<script>
refreshConnectionIcone();
refreshPrinterIcone();
</script>




<body>

<header>

<div class="navbar_custom">
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="index.php">Accueil</a>
	  <a href="#">Services</a>
	  <a href="#">Clients</a>
	  <a href="#">Contact</a>
	</div>

	<span onclick="openNav()" style="display:inline;"><img src="./img/navbar.png" width="5%" height="5%"/></span>
	<img src="./img/logo.png" width="15%" height="15%" style="display:inline;"/>
	<p style="display:inline;"> DEFAULT ID AND NAME </p>
	<input type="image" id="connection_state" src="./img/connection_r.svg" width="4%" height="4%" onclick="connection_portAuto()" value="clickme" style="display:inline;float:right;"/>
	<input type="image"  id="imp_state"  src="./img/imp_state_off.png" width="4%" height="4%" onclick="printCurrent();" value="clickme" style="display:inline;float:right;"/>

</div>	




</header>