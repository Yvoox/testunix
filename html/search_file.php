<?php include('header.php');?>





	<h2> Veuillez chercher votre fichier </h2>
<div id="main" style="text-align:center;">



	<input id="file" type="file" accept=".gcode,.STL,.txt" style="color:white;">
	<progress id="progress"></progress>
	<button class="button_valid_file" onclick="uploadFile()">Valider</button>
</div>
</body>
  <button class="button2" style="background-color:#6E6E6E" onclick="window.location.href='index.php'">Retour</button>
  <button class="button_valid_file" onclick="redirection()">Suivant</button>







<script>




/*    var fileInput = document.querySelector('#file');


    fileInput.addEventListener('change', function() {


        var reader = new FileReader();


        reader.addEventListener('load', function() {

            alert('Contenu du fichier "' + fileInput.files[0].name + '" :\n\n' + reader.result);

        });


        reader.readAsText(fileInput.files[0]);


    });*/

</script>

</html> 
