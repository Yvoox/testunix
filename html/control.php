<?php include('header.php');?>


<script>
window.setInterval(function(){
  getTemp(1);
  getTemp(2);
  getTemp(3);
}, 5000);
</script>





<div id="main" class="class_control">
<section id="section_one">

<div class="container">
<div class="row">
	<div class="col-md-7" id="leftside">
				<div class="row" id="leftTop">
					<div class="col-md-6" style="text-align:center">
						<h3>Axes X/Y</h3></br>
						<div>
							<input type="image"  src="./img/up.svg" value="clickme" onclick="move(0,dt,0)" width="20%" height="20%">
						</div>
						<div>
								
								<input type="image" class="img_align" src="./img/left.svg" value="clickme" onclick="move(-dt,0,0)" width="20%" height="20%">
								<input type="image" class="img_align" src="./img/home.png" value="clickme" onclick="homeXY()" width="20%" height="20%">
								<input type="image" class="img_align" src="./img/right.svg" value="clickme" onclick="move(dt,0,0)" width="20%" height="20%">
								
								
						</div>
						<div>
							<input type="image"  src="./img/down.svg" value="clickme" onclick="move(0,-dt,0)" width="20%" height="20%">
						</div>
					</div>
					
					<div class="col-md-6" style="text-align:center">
						<h3>Axe Z</h3></br>
						<div>
							
							<input type="image"  src="./img/up.svg" value="clickme" onclick="move(0,0,dt)" width="20%" height="20%">
						</div>
						<div>
						
							<!--<img src="./img/home.png" width="20%" height="20%" />-->
							<input type="image"  src="./img/home.png" value="clickme" onclick="homeZ()" width="20%" height="20%">



						</div>
						
						<div>
							<input type="image"  src="./img/down.svg" value="clickme" onclick="move(0,0,-dt)" width="20%" height="20%">
						</div>
					</div>
					<div class="div_match">
						<button class="button_number" onclick="changeDt(0.1)">0.1</button>
						<button class="button_number" onclick="changeDt(1)">1</button>
						<button class="button_number" onclick="changeDt(10)">10</button>
						<button class="button_number" onclick="changeDt(30)">30</button>
						<button class="button_number" onclick="changeDt(100)">100</button>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-3">
						<div style="text-align:center">
							<input type="image"  src="./img/up.svg" value="clickme" onclick="changeTempValue(lastTempConsign1+1,1)" width="30%" height="30%">
						</div>
						<div class="img_hori">
							<div class="box">
								<p id="temp1"> #DEFAULT </p>
								<p>Tête 1</p>
							</div>
						</div>
						<div style="text-align:center">
							<input type="image"  src="./img/down.svg" value="clickme" onclick="changeTempValue(lastTempConsign1-1,1)" width="30%" height="30%">
						</div>
						
					</div>
					<div class="col-md-3">
						<div style="text-align:center">
							<input type="image"  src="./img/up.svg" value="clickme" onclick="changeTempValue(lastTempConsign2+1,2)" width="30%" height="30%">
						</div>
						<div class="img_hori">
							<div class="box">
								<p id="temp2"> #DEFAULT </p>
								<p>Tête 2</p>
							</div>
						</div>
						<div style="text-align:center">
							<input type="image"  src="./img/down.svg" value="clickme" onclick="changeTempValue(lastTempConsign2-1,2)" width="30%" height="30%">
						</div>
					</div>
					<div class="col-md-3">
						<div style="text-align:center">
							<input type="image"  src="./img/up.svg" value="clickme" onclick="changeTempValue(lastTempConsign3+1,3)" width="30%" height="30%">
						</div>
						<div class="img_hori">
							<div class="box">
								<p id="temp3"> #DEFAULT </p>
								<p>Tête 3</p>
							</div>
						</div>
						<div style="text-align:center">
							<input type="image"  src="./img/down.svg" value="clickme" onclick="changeTempValue(lastTempConsign3-1,3)" width="30%" height="30%">
						</div>
					</div>
					<div class="col-md-3">
						<div  style="text-align:center">
						<p></p>
							<font color="white" style="cursor: pointer;" onclick="extrude(-5);">Retracter</font>
						</div>
						<div class="img_hori">
							<div class="box">
								<p><font color="red">5</font></p>
								<p><font color="red">mm</font></p>
							</div>
						</div>
						<div style="text-align:center">
							<p style="cursor: pointer;" onclick="extrude(5);">Extruder</p>
						</div>
					</div>
				</div>
	
	</div>
	<div class="col-md-4" id="centerside">
		<div class="container">
			<div class="row">
	
				<div class="col-md-4">
					<div class="range-slider">
						<p> Tête n°1 </p>
		               <input type="range" value="0" min="0" max="350" class="range-slider__range" orient="vertical">
						<div id="changetemp1" class="indic"><span>0</span></div>
						<div><button class="button_simple" onclick="changeTempValue(+document.getElementById('changetemp1').innerHTML,1)">Ok</button></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="range-slider">
						<p> Tête n°2 </p>
						<input type="range"  value="0" min="0" max="350" class="range-slider__range" orient="vertical">
						<div id="changetemp2" class="indic"><span >0</span></div>
						<div><button class="button_simple" onclick="changeTempValue(+document.getElementById('changetemp2').innerHTML,2)">Ok</button></div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="range-slider">
						<p> Tête n°3 </p>
						<input type="range" value="0" min="0" max="350" class="range-slider__range" orient="vertical">
						<div id="changetemp3" class="indic"><span>0</span></div>
						<div><button class="button_simple" onclick="changeTempValue(+document.getElementById('changetemp3').innerHTML,3)">Ok</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1" id="rightside">
               <h1>Picture perfect</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		
	</div>

</div>
</div>
</section>

  <button class="button2" onclick="">Utilitaires</button>
  <button class="button3">Redémarrer</button>
  
  
</div> 

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
refresh_temp();
</script>




</html> 
