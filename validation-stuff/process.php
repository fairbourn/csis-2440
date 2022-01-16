<?php
	$ec = 0;
	if(!empty($_POST['name']) && !empty($_POST['email']) &&	!empty($_POST['phone']) &&  !empty($_POST['zip']))
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST['name'])) $ec +=1; //if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST['name'])) $ec +=1;
		if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $_POST['email'])) $ec +=10;
		if(!preg_match("/^(?:\(\d{3}\)|\d{3}-)\d{3}-\d{4}$/", $_POST['phone'])) $ec +=1000;
		if(!preg_match("/^\d{5}/", $_POST['zip'])) $ec +=100;
		if($ec) header('location: .?ec='.$ec.'&ph='.$_POST['phone'].'&n='.$_POST['name'].'&s='.$_POST['email'].'&z='.$_POST['zip']);
	}
	else
	{
		header('location: .?sub=true&ec=0&ph='.$_POST['phone'].'&n='.$_POST['name'].'&s='.$_POST['email'].'&z='.$_POST['zip']);
	}



?>
<!doctype html>
<html lang="en">
	<head>


		<title>Data Validated</title>


	<link rel="stylesheet" href="./css/style2.css" type="text/css">
	</head>
	<body>
<div class="div2">
<?php echo ("<h2>Your information was entered correctly!</h2>"); ?>
</div>
<div class="div1">
<?php echo ("<h1>Important Information.</h1>"); ?>
<p> Name: <?php echo $_POST['name'];?> <br><br>
	  Email: <?php echo $_POST['email'];?> <br><br>
		zip: <?php echo $_POST['zip'];?> <br><br>
	  Phone Number: <?php echo $_POST['phone'];?> <br><br></p>
<p class="text">
	  E-signture: <?php echo $_POST['name'];?> <br><br>
<p>
<div>
