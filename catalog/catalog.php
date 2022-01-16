<?php
include_once('includes/db.php');
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
$sql = 'select * from product;';
$results = mysqli_query($conn, $sql);
$tableOpen = '<table><tr><th>Image</th><th>Product Name</th><th>Price</th><th>Link</th><tr>';
$tableGuts = '';
$tableClose = '</table>';
while ($rows = mysqli_fetch_array($results, MYSQLI_ASSOC))
{
  $id = $rows['id'];
  $tableGuts .= '<tr>';
  $tableGuts .= '<td><img src="'.$rows['image'].'"></td>';
  $tableGuts .= '<td>'.$rows['name'].'</td>';
  $tableGuts .= '<td>$'.$rows['price'].'</td>';
  $tableGuts .= '<td><a href="product.php?id='.$id.'" id="button" >View Product</a></td>';
  $tableGuts .= '</tr>';
}

$table = $tableOpen.$tableGuts.$tableClose;
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
    <?php
    if (!isset($_SESSION['usr']))
    {
    echo $loggedOut;
    }
    else {
      echo $table, '<br><br>';
    }
    ?>
  </body>
</html>
