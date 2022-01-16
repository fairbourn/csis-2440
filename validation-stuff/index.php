<?php
	$n = $emsg = $ph = $s = $z = ""; $ec = 0;

		if(isset($_GET['n'])) $n = $_GET['n'];
		if(isset($_GET['ph'])) $ph = $_GET['ph'];
		if(isset($_GET['s'])) $s = $_GET['s'];
		if(isset($_GET['z'])) $z = $_GET['z'];
		if(isset($_GET['ec'])) $ec = $_GET['ec'];

?>

<!doctype html>
<html lang="en">
	<head>


		<title>Data Validation</title>


	<link rel="stylesheet" href="./css/style.css" type="text/css">
	</head>
	<body>
<?php echo ("<h1>Data Validation</h1>"); ?>
<div class = "div1">
<form action="process.php" method="post">
	<input value="<?php echo $n;?>" placeholder="First Name" name="name"><br><br>
	<input value="<?php echo $s;?>" placeholder="Email" name="email"><br><br>
	<input value="<?php echo $z;?>" placeholder="Zip Code" name="zip"><br><br>
	<input value="<?php echo $ph;?>" placeholder="Phone ex. (123)456-7891" name="phone"><br><br>
	<input type="reset">
	<input name="submit-button" type="submit">
</form>
<div>
<?php

//ec 1= first name
//ec 10= email
//ec 100= phone
//ec 1000=phone

//if all are wrong/empty
if ($ec == 1111){
	echo "Be sure to double check all fields!*";
}
if ($ec == 0){
	echo "Be sure to enter all fields*";
}
//if 1 box is wrong
if ($ec == 1){
	echo "Re-enter First Name*";
}
if ($ec == 10){
	echo "Re-enter Email*";
}
if ($ec == 100){
	echo "Re-enter zip code*";
}
if ($ec == 1000){
	echo "Re-enter Phone Number (Be sure the number is in the (xxx)xxx-xxxx format)*";
}
//if two boxes are wrong
if ($ec == 11){
	echo "Re-enter First Name and Email*";
}
if ($ec == 101){
	echo "Re-enter First Name and Zip Code*";
}
if ($ec == 1001){
	echo "Re-enter First Name and Phone Number*";
}
if ($ec == 110){
	echo "Re-enter Email and Zip*";
}
if ($ec == 1010){
	echo "Re-enter Email and Phone Number*";
}
if ($ec == 1100){
	echo "Re-enter Zip and Phone Number*";
}
//if three boxes are wrong
if ($ec == 111){
	echo "Re-enter Name, Email and Zip*";
}
if ($ec == 1101){
	echo "Re-enter Name, Zip and Phone Number*";
}
if ($ec == 1110){
	echo "Re-enter Email, Zip, And Phone Number*";
}
if ($ec == 1011){
	echo "Re-enter Name, Email, And Phone Number*";
}


?>


</body>
</html>
