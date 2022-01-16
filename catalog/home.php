<?php
include_once('includes/db.php');

$div1 =
'<div class="divHome">
<h1 id="welcomeHome">
Welcome to ACME!!
</h1>
<h4>
Your central hub for all your roadrunner killing needs!<br><br>
</h4>
<h3>
Our Mission.<br><br>
</h3>
<p>
Here at ACME we know how much you hate those pesky road-runners, in fact we hate them just as much as you! This is why we have set out to make getting tools for catching and kill road-runners much simpler and easy for you! With our new great website you can order and assortment of items. Ranging anywhere from anvils, axel grease and all the way to female road-runner costumes(if our that desperate). But no matter what the item is we have it in store for you! And at a reasonable price as well!
</p><br>
<h3>
Quality.<br><br>
</h3>
<p>
All of our products are made of the finest materials known to man. We here at ACME take pride in our craftsmanship. In order to help you be successful in catching that pesky road-runner we take our product quality to the next level. All of our products have a lifetime warranty. We believe that if it doesn’t work for you, it won’t work for us. If you are not satisfied with your purchase we will take it back, no questions asked!
</p>
</div>';

$loggedOut =
'<div class="loggedOut">
<h2>
ATTENTION:
</h2>
<h3>
User must be logged in to view page.
</h3>
<p>
<a href="index.php"><span id="cartSpan">Please log in!</span></a>
<p>
</div>';
$in =
'
<li><a class="active" href="home.php">Home</a></li>
<li><a href="catalog.php">Catalog</a></li>
<li><a href="cart.php">Cart</a></li>
<li><a href="logout.php">Logout</a></li>
';
$out =
'
<li><a class="active" href="home.php">Home</a></li>
<li><a href="catalog.php">Catalog</a></li>
<li><a href="cart.php">Cart</a></li>
<li><a href="logout.php">Login</a></li>
';
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>
    <link type="text/css" rel="stylesheet" href="css/style1.css">
    <script src="js/script.js"></script>
  </head>
  <body>
	<ul>
    <?php
  	if (isset($_SESSION['usr']))
  	{
  	echo $in;
  	}
  	else {
  		echo $out;
  	}
  	?>
	</ul><br>

	<?php
	if (!isset($_SESSION['usr']))
	{
	echo $loggedOut;
	}
	else {
		echo $div1;
	}
	?>


  </body>
</html>
