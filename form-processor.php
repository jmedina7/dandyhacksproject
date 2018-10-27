<?php
// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "jmedina7@u.rochester.edu";
$emailTo = "jmedina7@u.rochester.edu";
$subject = "Dandy Hacks";

// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable
$username= Trim(stripslashes($_POST['username'])); 
$email = Trim(stripslashes($_POST['email']));
$budget = Trim(stripslashes($_POST['budget'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// for the textarea:
$userrecipe = Trim(stripslashes($_POST['userrecipe']));

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "User Name: \n"; //...a label
$body .= $username;	  //...a variable
$body .= "\n\n";

$body .= "Recipe Name: \n"; //...a label
$body .= $email;	  //...a variable
$body .= "\n\n";

$body .= "Budget: \n"; //...a label
$body .= $budget;	  //...a variable
$body .= "\n\n";
// ...used more input fields? Then copy these lines (above)
//   and make more

// This is for the TEXTAREA
$body .= "Recipe: \n";		// a heading for the text area
$body .= $userrecipe;			// the variable for the text area
$body .= "\n";


// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");

// **********************************
// SECTION FOUR: redirect the user
// **********************************
// You won't need to edit anything here...

// send the user to the thank you webpage
header("Location: recipe-thanks.php");

?>