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

$budget = Trim(stripslashes($_POST['budget'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "Budget: \n"; //...a label
$body .= $budget;	  //...a variable
$body .= "\n\n";
// ...used more input fields? Then copy these lines (above)
//   and make more


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
header("Location: contact-thanks.html");

?>