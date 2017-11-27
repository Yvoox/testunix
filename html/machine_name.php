<?php include('header.php');?>






<div id="main">

	

	<div class="container">
		<div class="row">
			<div class="col-md-6" id="leftside" style="text-align:center;">
				<h2 style="color:white;">Nom actuel de la Machine :</h2>
				<p style="color:white;font-size:4em;" id="impName">#Default</p>
			</div>
			<div class="col-md-6" style="text-align:center;">
				<h2 style="color:white;">Nouveau nom :</h2>
				<div><input id="inputname" type="text" name="fname" style="margin-top:7%;"></div>
			</div>
			

		</div>
	</div>
  
  				<input type="submit" value="Valider" class="button2" onclick="changeName(document.getElementById('inputname').value);">
				<button class="button3" onclick="setName">Annuler</button>
  
</div> 

</body>



</html> 
