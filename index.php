<?php
$pageTitle = "Roc Recipes";
include('inc/html-top.php'); ?>

			<main>
				<h1 class = "home"> Eating on a Budget! </h1>
				<h1 class="home"> Find recipes using ingredients you have at home and your meal budget </h1>
      			<input type="text" id="foods" class="searchTerm" placeholder="Enter your ingredients here!">

      			<button type="submit" class="searchButton">Submit</button>
      			<div class="slidecontainer">
  				<input type="range" min="1" max="100" value="1" class="slider" id="budgetSlider">
				</div>
				<p>Budget Selected: $<span id="budgetValue"></span></p>
				<script>
var slider = document.getElementById("budgetSlider");
var output = document.getElementById("budgetValue");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
				<p id="resultText"></p>
				<div class="container">
					<a id="recipe1" href=""></a>
  					<div class="overlay">
    					<div class="text" id="1text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe2" href=""></a>
  					<div class="overlay">
    					<div class="text" id="2text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe3" href=""></a>
  					<div class="overlay">
    					<div class="text" id="3text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe4" href=""></a>
  					<div class="overlay">
    					<div class="text" id="4text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe5" href=""></a>
  					<div class="overlay">
    					<div class="text" id="5text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe6" href=""></a>
  					<div class="overlay">
    					<div class="text" id="6text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe7" href=""></a>
  					<div class="overlay">
    					<div class="text" id="7text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe8" href=""></a>
  					<div class="overlay">
    					<div class="text" id="8text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe9" href=""></a>
  					<div class="overlay">
    					<div class="text" id="9text"></div>
  					</div>
				</div>
				<div class="container">
					<a id="recipe10" href=""></a>
  					<div class="overlay">
    					<div class="text" id="10text"></div>
  					</div>
				</div>
				</div>
			</main>
			<?php include('inc/scripts.php'); ?>
		</div>
	</body>
</html>