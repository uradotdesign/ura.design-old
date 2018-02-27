<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$logo = $_POST['Logo'];
$brand = $_POST['Brand Identity Guide'];
$styleguide = $_POST['Style Guide'];
$documentation = $_POST['Documentation'];
$project = $_POST ['project name'];
$message = $_POST['message'];
$budget = $_POST ['budget'];
$formcontent=" From: $name $surname \n Email: $email \n Requirements: $logo $brand $styleguide $documentation $project \n Budget: $budget \n Message: $message" ;
$recipient = "anxhelo1995@gmail.com";
$subject = "Ura Design - Design Request";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
