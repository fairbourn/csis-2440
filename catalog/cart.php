<?php include_once('includes/db.php');
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
$emptyCart =
'<div class="emptyCart">
<h2>
OH NO!!
</h2><br>
<p>
Your Cart Is Empty!! Better fill it up!!
</p><br>
<p>
<a href="catalog.php"><span id="cartSpan">Take Me Shopping!!</span></a>
</p><br>
<p>
Look how sad and empty it is :(
</p>
</div>';
$done =
'
<div class="done">
<h3>Thank You For Shopping With Us!</h3>
<p>Below is an invoice of your order!</p>
</div>
<hr>
';
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
if (isset($_POST['update']))
{
  #echo 'updated<br>';
  for ($x = 0; $x < sizeof($_SESSION['qty']); $x++)
  {
    $postID = 'qty-'.$x;
    $_SESSION['qty'][$x] = $_POST[$postID];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopping Cart</title>
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

</div>
<?php
if (!isset($_SESSION['usr']))
{
 #$t = $loggedOut;
 echo $loggedOut;
}
else if (!isset($_SESSION['product-id']))
{

  echo $emptyCart;
}
if (isset($_POST['place-order']))
{
  $tableOpen = '<table><tr><th>Name</th><th>Unit Price</th><th>QTY</th><th>Total</th></tr>';
  $tableGuts = '';
  $tableClose = '</table>';
  $total1 = 0;
  for ($x = 0; $i < sizeof($_SESSION['product-id']); $i++)
  {
  $tableGuts .= '<tr>';
  $tableGuts .= '<td>'.$_SESSION['prod-name'][$x].'</td>';
  $tableGuts .= '<td>$'.$_SESSION['price'][$x].'</td>';
  $tableGuts .= '<td>'.$_SESSION['qty'][$x].'</td>';
  $tableGuts .= '<td>$'.($_SESSION['price'][$x] * $_SESSION['qty'][$x]).'</td>';
  $tableGuts .= '</tr>';
  $total1 += ($_SESSION['price'][$x] * $_SESSION['qty'][$x]);
  }
  $tableGuts .= '<tr><td colspan="3"><span id="gt"> Grand Total:</span></td><td><span id="gt">$'.$total1.'</span></td></tr>';
  $t1 = $tableOpen.$tableGuts.$tableClose;
  echo $done;
  echo $t1;
  unset($_SESSION['product-id']);
}
else{
  $to = '<table><tr><th>Name</th><th>Unit Price</th><th>QTY</th><th>Total</th></tr>';
  $tg = '';
  $tc = '</table>';
  $total = 0;
  ?>
  <form method="POST">
  <?php
  for ($x = 0; $x < sizeof($_SESSION['product-id']); $x++)
  {
  $tg .= '<tr>';
  $tg .= '<td>'.$_SESSION['prod-name'][$x].'</td>';
  $tg .= '<td>$'.$_SESSION['price'][$x].'</td>';
  $tg .= '<td><input name="qty-'.$x.'" onkeypress="return AllowOnlyNumbers(event);" type="text" value="'.$_SESSION['qty'][$x].'"></input></td>';
  $tg .= '<td>$'.($_SESSION['price'][$x] * $_SESSION['qty'][$x]).'</td>';
  $tg .= '</tr>';
  $total += ($_SESSION['price'][$x] * $_SESSION['qty'][$x]);
  }
  $tg .= '<tr><td colspan="3"><span id="gt"> Grand Total:</span></td><td><span id="gt">$'.$total.'</span></td></tr>';
  $t = $to.$tg.$tc;
  echo $t;
?>
<?php
if (isset($_SESSION['product-id']))
{
$itemAdded =
'
<hr>
<div class="cartButton">
<input name="update" type="submit" value="update">
<input name="place-order" type="submit" value="place-order">
</div>
';
echo $itemAdded;
}
else{
  echo '';
}
?>
<?php
}
?>

</form>
  </body>
</html>
