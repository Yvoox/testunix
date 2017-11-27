<?php include('header.php');?>






<div id="main" >
	<div class="container">
		<div class="row">
			<div class="col-md-6" id="leftside">
				<div class="row" id="leftTop" style="font-size:2em;text-align:center;">
				<p> Statut : <span id="statut"> #DEFAULT</span></p><br>
				<p> Pourcent de réalisation : <span id="pourcent"> 0 sur 0</span></p></br>
				<p>Temps écoulé : <span id="timeSpend"> #DEFAULT</span></p></br>
				<p> Temps restant estimé : <span id="timeLeft"> #DEFAULT</span> </p>
				</div>
				<div class="row">
					<div class="col-md-6" id="leftside">
					</div>
					<div class="col-md-6">
					</div>
				</div>
			</div>
			<div class="col-md-6">
			<div class="row">
					<div class="col-md-4">
						<div class="img_hori">
							<div class="box">
								<p id="temp1"> #DEFAULT </p>
								<p>Tête 1</p>
							</div>
						</div>

						
					</div>
					<div class="col-md-4">

						<div class="img_hori">
							<div class="box">
								<p id="temp2"> #DEFAULT </p>
								<p>Tête 2</p>
							</div>
						</div>

					</div>
					<div class="col-md-4">

						<div class="img_hori">
							<div class="box">
								<p id="temp3"> #DEFAULT </p>
								<p>Tête 3</p>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>


	

</div> 
  <button class="button2" onclick="window.location.href='start_imp.php'">Retour</button>
  <button  class="button_valid_file" onclick="window.location.href='index.php'">Accueil</button>

</body>


<script>
var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();
</script>

<script>

getState();
</script>

</html> 
