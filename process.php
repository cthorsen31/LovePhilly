<?php
$groupSize = $_POST['groupCount'];
$vdate = $_POST['visitDate'];
$place = $_POST['favPlace'];
$rating = $_POST['rating'];
$destination_email = "jrhicsa@rit.edu, cthorsen31@gmail.com";
$email_subject = "Connor Thorsen - Favorite Town";
$email_body = "Group Size $groupSize\n";
$email_body .= "Date visted=$vdate\n";
$email_body .= "Favorite Place $place\n";
$email_body .= "Rating -> $rating\n";
mail( $destination_email, $email_subject, $email_body );
echo("Data Sent");
?>