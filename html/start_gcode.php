<?php session_start(); ?>
<?php include('header.php');?>





	<h2> Vous avez choisis : </h2>
<div id="main" >

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class=" start_box"> 
				<div style="text-align:center">
				<p>Nom du fichier :</p><p id="filename"> <?php echo $_GET['namefile']; ?></p></div>
				<p>Type de fichier : Gcode</p>
				<p style="display:inline;">Taille du fichier :</p> <p style="display:inline;" id="size">#DEFAULT</p>
				</br>
				<p style="padding-left:1%;boder-bottom: dotted 1px white;font-size:1.5em;">Infos :</p>
				<p style="display:inline;">Temps d'impression estimé :</p><p style="display:inline;" id="time"> #DEFAULT</p></br>
				<p style="display:inline;">Dimensions (hauteur x largeur x profondeur) :</p><p style="display:inline;" id="height"> #DEFAULT</p><p style="display:inline;" id="width"> #DEFAULT</p><p style="display:inline;" id="depth"> #DEFAULT</p></br>
				<p style="display:inline;">Filament (bobine 1) :</p><p style="display:inline;" id="head1"> #DEFAULT</p></br>
				<p style="display:inline;">Filament (bobine 2) :</p><p style="display:inline;" id="head2"> #DEFAULT</p></br>
				<p style="display:inline;">Filament (bobine 3) :</p><p style="display:inline;" id="head3"> #DEFAULT</p></br>
			</div>
		</div>
		<div class="col-md-6">
		
			<div class=" start_box" style="background-color:#6E6E6E;"> 
				</br></br></br></br></br></br></br></br></br></br></br></br></br></br>

			</div>
		</div>
	</div>
</div>

	



</div> 
  <button class="button2" onclick="window.location.href='search_file.php'">Retour</button>
  <button class="button_valid_file" onclick="startImp('local','<?php echo $_GET['namefile']; ?>')">Imprimer</button>
	</form>
</body>


<script>getFileState("<?php echo $_GET['namefile']; ?>");</script>
</html> 
