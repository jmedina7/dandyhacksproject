<?php
$pageTitle = "Roc Recipes";
include('inc/html-top.php'); ?>

  <body>
    <div class = trans>
      <header>
        <?php include ('inc/nav.php'); ?>
        <h1> Roc Recipes </h1>
        <h2> Eating on a budget </h2>
      </header>
      <main>
      <h2>Do you have a recipe that you'd like to submit?</h2>
      <form method="post" action="form-processor.php">
        <label class="fixed" for="name">Name: </label>
        <input type="text" name="name" id="name">
        <label class="fixed" for="email">Email: </label>
        <input type="text" name="email" id="email">
        <label class="fixed" for="budget">Budget: </label>
        <input type="text" name="budget" id="budget">
        <fieldset>
          <legend>Details</legend>
        <h3><label for="userrecipes">Submit your recipe below</label></h3>
        <textarea name="userrecipes" id="userrecipes"></textarea>
      </fieldset>
        <input type="submit" value="Here's my recipe!">
      </form>
   	</main>
    <?php include "inc/scripts.inc"; ?>
  </div>
  </body>
</html>