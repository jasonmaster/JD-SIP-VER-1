<?php
$from = "";
$to = $_POST['to'];
$carrier = $_POST['carrier'];
$subject = "\r\n";
$message = stripslashes($_POST['message']);
$headers = "From: $from "."\r\n"." - Jay-Designs-SMS \r\n";
if ((empty($to)) || (empty($message))) {
header ("Location: ../index.php?e=error");
}

else if ($carrier == "verizon") {
$formatted_number = $to."@vtext.com";
mail("$formatted_number", "$subject", "$message", "$headers");

// Currently, the subject is set to "SMS". Feel free to change this.

header ("Location: ../index.php?e=s");
}

else if ($carrier == "tmobile") {
$formatted_number = $to."@tomomail.net";
mail("$formatted_number", "$subject", "$message", "$headers");

header ("Location: ../index.php?e=s");
}

else if ($carrier == "sprint") {
$formatted_number = $to."@messaging.sprintpcs.com";
mail("$formatted_number", "$subject", "$message", "$headers");

header ("Location: ../index.php?e=s");
}

else if ($carrier == "att") {
$formatted_number = $to."@txt.att.net";
mail("$formatted_number", "$subject", "$message", "$headers");

header ("Location: ../index.php?e=s");
}

else if ($carrier == "virgin") {
$formatted_number = $to."@vmobl.com";
mail("$formatted_number", "$subject", "$message", "$headers");

header ("Location: ../index.php?e=s");
}
?>