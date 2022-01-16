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
$notSet = '<input type="text" name="qty" placeholder="How Many?"name="add-to-cart" autocomplete="off" id="qty" onkeypress="return AllowOnlyNumbers(event);" /><br>';
$notSetButton = '<br><input type="submit" value="Add To Cart" name="add-to-cart">';

if(isset($_GET['id']) && !empty($_GET['id']))
{
  $sql  = 'SELECT * FROM product WHERE ID = '.$_GET['id'];

  $results = mysqli_query($conn, $sql);

  $product = '';
  while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
{
$product .= '<h2>' .$row['name'].'</h2>';
$image .= '<p><img src="'.$row['image'].'"></p>';
$description .= '<p>' .$row['description'].'</p>';
$price .= '<p>' .$row['price'].'</p>';
  }
}


if (isset($_POST['add-to-cart']))
{
  $sql  = 'SELECT * FROM product WHERE ID = '.$_POST['id'].'  LIMIT 1';
  $results = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
  {
    $price = $row['price'];
    $prodName = $row['name'];
 }
  if (!isset($_SESSION['product-id']))
  {
    $_SESSION['product-id'] = array();
    $_SESSION['qty'] = array();
    $_SESSION['price'] = array();
    $_SESSION['prod-name'] = array();
  }
  array_push($_SESSION['product-id'], $_POST['id']);
  array_push($_SESSION['qty'], $_POST['qty']);
  array_push($_SESSION['price'], $price);
  array_push($_SESSION['prod-name'], $prodName);
}

if (isset($_POST['add-to-cart']))
{
$_SESSION['item-added'] = $_POST['add-to-cart'];
}

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Details</title>
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
    echo '<div class="indevProduct">';
    echo $product;
    echo $image,'<br>';
    echo $description,'<br>';
    echo '<p>Individual price: $'.$price.'</p><br>';

    ?>
<form method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<?php
if (!isset($_POST['add-to-cart']))
{
echo $notSet;
echo $notSetButton;
}
else
{
  echo '';
}
  ?>
</form><br><br>

<?php
if (isset($_POST['add-to-cart']))
{
  echo '<p>Item Added!</p>';
  echo '<p><a href="catalog.php"><span id="productSpan">Continue Shopping?</span></a> or <a href="cart.php"><span id="productSpan">Go to Cart?</span></a></p>';
}
} ?>
</div>
  </body>
</html>
