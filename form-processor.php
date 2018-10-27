<?php
// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "jmedina7@u.rochester.edu";
$emailTo = "jmedina7@u.rochester.edu";
$subject = "Lab 11 - HTML Forms";

// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

$name= Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$tel = Trim(stripslashes($_POST['tel'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

$chaser = $_POST['chaser']; 
$beater = $_POST['beater']; 
$keeper = $_POST['keeper']; 
$seeker = $_POST['seeker']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more


// for your radio buttons:
$house = $_POST['house']; 
// notice: no matter how many radio buttons, there's only one answer


// for your textarea:
$comments = Trim(stripslashes($_POST['comments']));



// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "Name: \n"; //...a label
$body .= $name;	  //...a variable
$body .= "\n\n";

$body .= "Email: \n"; //...a label
$body .= $email;	  //...a variable
$body .= "\n\n";

$body .= "Telephone: \n"; //...a label
$body .= $tel;	  //...a variable
$body .= "\n\n";
// ...used more input fields? Then copy these lines (above)
//   and make more



// Do your checkboxes this way...
$body .= "What Quidditch positions would you be interested in playing? \n"; 	 	// a heading for your checkbox section

if (isset($chaser)) {		// a checkbox variable
	$body .= $chaser . "\n";	// the same checkbox variable
}
if (isset($beater)) {		// a checkbox variable
	$body .= $beater . "\n";	// the same checkbox variable
}
if (isset($keeper)) {		// a checkbox variable
	$body .= $keeper . "\n";	// the same checkbox variable
}
if (isset($seeker)) {		// a checkbox variable
	$body .= $seeker . "\n";	// the same checkbox variable
}
$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more



// This is for your radio buttons (always just one answer)...
$body .= "What is your Hogwarts House? \n";		// a heading for your radio button section
$body .= $house;			// the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "What has brought you to this website? \n";		// a heading for your text area
$body .= $comments;			// the variable for your text area
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
header("Location: contact-thanks.html");

?>