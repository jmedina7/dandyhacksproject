<?php
$pageTitle = "Roc Recipes";
include('inc/html-top.php'); ?>

  <body>
    <div class = trans>
      <header>
        <?php include ('inc/nav.php'); ?>
        <h1> Roc Recipes </h1>
      </header>
      <main>
      <h2>Do you have a recipe that you'd like to submit?</h2>
      <form method="post" action="form-processor.php">
        <label class="fixed" for="username">Your Name: </label>
        <input type="text" name="username" id="username">
        <label class="fixed" for="recipename">Recipe Name: </label>
        <input type="text" name="recipename" id="recipename">
        <label class="fixed" for="budget">Budget: </label>
        <input type="text" name="budget" id="budget">
        <fieldset>
        <h3><label for="userrecipes">Submit your recipe below</label></h3>
        <textarea name="userrecipes" id="userrecipes" cols ="60" rows="30"></textarea>
      </fieldset>
        <input type="submit" value="Here's my recipe!">
      </form>
   	</main>
    <?php include "inc/scripts.inc"; ?>
  </div>
  </body>
</html>