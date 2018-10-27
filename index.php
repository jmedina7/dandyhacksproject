<?php
$pageTitle = "Roc Recipes";
include('inc/html-top.php'); ?>

	<body>
		<div class = "trans">
			<header>
				<?php include ('inc/nav.php'); ?>
				<h1> Roc Recipes</h1>
			</header>
			<main>
				<h1 class = "home"> Eating on a Budget! </h1>
				<h1 class="home"> Find Recipes using 1 or 2 ingredients you have at home and your per meal budget </h1>
      			<input type="text" id="foods" class="searchTerm" placeholder="Enter a food you'd like!">

      			<button type="submit" class="searchButton">Submit</button>
				<p id="resultText"></p>
				<ul>
					<li><a id="recipe1" href=""></a></li>
					<li><a id="recipe2" href=""></a></li>
					<li><a id="recipe3" href=""></a></li>	
					<li><a id="recipe4" href=""></a></li>
					<li><a id="recipe5" href=""></a></li>
					<li><a id="recipe6" href=""></a></li>
					<li><a id="recipe7" href=""></a></li>
					<li><a id="recipe8" href=""></a></li>
					<li><a id="recipe9" href=""></a></li>
					<li><a id="recipe10" href=""></a></li>
				</ul>
				</div>
			</main>
			<?php include('inc/scripts.php'); ?>
		</div>
	</body>
</html>