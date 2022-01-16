<?php
// 1 Violent Femmes  shirt
$VFblack='<img src="img/shirt/VF/VFblack.jpg" class="colorBlack" alt="black">'
?>
<?php
$VFgrey='<img src="img/shirt/VF/VFgrey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$VFwhite='<img src="img/shirt/VF/VFwhite.jpg" class="colorWhite" alt="white">'
?>
<?php
$VFred='<img src="img/shirt/VF/VFred.jpg" class="colorRed" alt="red">'
?>
<?php
$VFblue='<img src="img/shirt/VF/VFblue.jpg" class="colorBlue" alt="blue">'
?>
<?php
// 2 Nirvana  shirt
$Nblack='<img src="img/shirt/N/black.jpg" class="colorBlack" alt="black">'
?>
<?php
$Ngrey='<img src="img/shirt/N/grey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$Nwhite='<img src="img/shirt/N/white.jpg" class="colorWhite" alt="white">'
?>
<?php
$Nred='<img src="img/shirt/N/red.jpg" class="colorRed" alt="red">'
?>
<?php
$Nblue='<img src="img/shirt/N/blue.jpg" class="colorBlue" alt="blue">'
?>
<?php
//3  Grateful Dead  shirt
$GDblack='<img src="img/shirt/GD/black.jpg" class="colorBlack" alt="black">'
?>
<?php
$GDgrey='<img src="img/shirt/GD/grey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$GDwhite='<img src="img/shirt/GD/white.jpg" class="colorWhite" alt="white">'
?>
<?php
$GDred='<img src="img/shirt/GD/red.jpg" class="colorRed" alt="red">'
?>
<?php
$GDblue='<img src="img/shirt/GD/blue.jpg" class="colorBlue" alt="blue">'
?>
<?php
//5  primus shirt
$Pblack='<img src="img/shirt/P/black.jpg" class="colorBlack" alt="black">'
?>
<?php
$Pgrey='<img src="img/shirt/P/grey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$Pwhite='<img src="img/shirt/P/white.jpg" class="colorWhite" alt="white">'
?>
<?php
$Pred='<img src="img/shirt/P/red.jpg" class="colorRed" alt="red">'
?>
<?php
$Pblue='<img src="img/shirt/P/blue.jpg" class="colorBlue" alt="blue">'
?>
<?php
//6  The Black Keys shirt
$TBKblack='<img src="img/shirt/TBK/black.jpg" class="colorBlack" alt="black">'
?>
<?php
$TBKgrey='<img src="img/shirt/TBK/grey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$TBKwhite='<img src="img/shirt/TBK/white.jpg" class="colorWhite" alt="white">'
?>
<?php
$TBKred='<img src="img/shirt/TBK/red.jpg" class="colorRed" alt="red">'
?>
<?php
$TBKblue='<img src="img/shirt/TBK/blue.jpg" class="colorBlue" alt="blue">'
?>
<?php
//7  PF shirt
$PFblack='<img src="img/shirt/PF/black.jpg" class="colorBlack" alt="black">'
?>
<?php
$PFgrey='<img src="img/shirt/PF/grey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$PFwhite='<img src="img/shirt/PF/white.jpg" class="colorWhite" alt="white">'
?>
<?php
$PFred='<img src="img/shirt/PF/red.jpg" class="colorRed" alt="red">'
?>
<?php
$PFblue='<img src="img/shirt/PF/blue.jpg" class="colorBlue" alt="blue">'
?>
<?php
//8  W shirt
$Wblack='<img src="img/shirt/W/black.jpg" class="colorBlack" alt="black">'
?>
<?php
$Wgrey='<img src="img/shirt/W/grey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$Wwhite='<img src="img/shirt/W/white.jpg" class="colorWhite" alt="white">'
?>
<?php
$Wred='<img src="img/shirt/W/red.jpg" class="colorRed" alt="red">'
?>
<?php
$Wblue='<img src="img/shirt/W/blue.jpg" class="colorBlue" alt="blue">'
?>
<?php
//9 TB shirt
$TBblack='<img src="img/shirt/TB/black.jpg" class="colorBlack" alt="black">'
?>
<?php
$TBgrey='<img src="img/shirt/TB/grey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$TBwhite='<img src="img/shirt/TB/white.jpg" class="colorWhite" alt="white">'
?>
<?php
$TBred='<img src="img/shirt/TB/red.jpg" class="colorRed" alt="red">'
?>
<?php
$TBblue='<img src="img/shirt/TB/blue.jpg" class="colorBlue" alt="blue">'
?>
<?php
//9 TC shirt
$TCblack='<img src="img/shirt/TC/black.jpg" class="colorBlack" alt="black">'
?>
<?php
$TCgrey='<img src="img/shirt/TC/grey.jpg" class="colorGrey" alt="grey">'
?>
<?php
$TCwhite='<img src="img/shirt/TC/white.jpg" class="colorWhite" alt="white">'
?>
<?php
$TCred='<img src="img/shirt/TC/red.jpg" class="colorRed" alt="red">'
?>
<?php
$TCblue='<img src="img/shirt/TC/blue.jpg" class="colorBlue" alt="blue">'
?>
<?php
//arrays
$band = array("Violent Femmes","Nirvana","The Grateful Dead","Primus","The Black Keys","Pink Floyd","Weezer","Pearl Jam","The Beatles","The Cure");
$color = array("Black","Grey","White","Red","Blue");
$size = array("Small","Medium","Large","X-Large","XX-Large");
$style = array("Short Sleeve","Long Sleeve","Hoodie","Tank Top","Crew Neck");




	if(empty($_POST['sub-button'])) //button has NOT been pushed
	{
		//Check the URL for any GET variables
		if(!empty($_GET['f'])) $f = $_GET['f']; else $f="";
		if(!empty($_GET['l'])) $l = $_GET['l']; else $l="";
		if(!empty($_GET['e'])) $e = $_GET['e']; else $e="";
		if(!empty($_GET['p'])) $p = $_GET['p']; else $p="";
		if(!empty($_GET['a'])) $a = $_GET['a']; else $a="";
		if(!empty($_GET['b'])) $b = $_GET['b']; else $b="";
		if(!empty($_GET['c'])) $c = $_GET['c']; else $c="";
		if(!empty($_GET['s'])) $s = $_GET['s']; else $s="";
		if(!empty($_GET['st'])) $st = $_GET['st']; else $st="";
?>

<!doctype html>
<html lang="en">
   <head>

       <title>Products</title>
      <link rel="stylesheet" href="./css/style_p.css" type="text/css">
</head>

<body>
	<ul>
  <li><a class="active" href="index.php">Index</a></li>
  <li><a href="music.php">Music I Like</a></li>
  <li><a href="products.php">Products</a></li>
</ul><br>

<div class = "div1">
	<?php
echo "<h2>Shirt Selection</h2>";
echo '<form method="post" action="">';

//band array
echo " Band: ";
echo '<select name="band">';
foreach ($band as $band)
{
 echo '<option value="'.$band.'" name="band">' . $band . '</option>';
}
echo '</select>';

//color array
echo " Color: ";
echo '<select name="color">';


 foreach ($color as $color)
 {
	 echo '<option value="'.$color.'" name="color">' . $color . '</option>';
 }
 echo '</select>';

 //size
 echo " Size: ";
 echo '<select name="size">';


  foreach ($size as $size)
  {
 	 echo '<option value="'.$size. '" name="size">' . $size . '</option>';
  }
  echo '</select>';

	//style
	echo " Style: ";
	echo '<select name="style">';


	 foreach ($style as $style)
	 {
		 echo '<option value="'.$style.'" name="style">' . $style . '</option>';
	 }
	 echo '</select><br><br><br><br>';


		//get input from user
      echo '<h3> Order Information</h3>';
			echo '<input placeholder="First Name" value="'.$f.'" type="text" name="first"><br><br>';
			echo '<input placeholder="Last Name" value="'.$l.'" type="text" name="last"><br><br>';
			echo '<input placeholder="Email" value="'.$e.'" type="text" name="email"><br><br>';
			echo '<input placeholder="Phone Number" value="'.$p.'" type="text" name="phone"><br><br>';
			echo '<input placeholder="Address" value="'.$a.'" type="text" name="address"><br><br>';


			echo '<input type="reset">';
			echo '<input type="submit" name="sub-button">';
		echo '</form><br>';



		//display error message (if needed)
		if(!empty($_GET['ec'])) $ec = $_GET['ec']; else $ec = 0;
		switch ($ec)
		{
			//everything
			case 0: echo "<p>Enter EVERYTHING*</p><br><br>"; break;
			case 11111: echo "<p>Enter EVERYTHING*</p><br><br>"; break;
			//singles
			case 1: echo "<p>Enter First Name*</p><br><br>"; break;
			case 10: echo "<p>Enter Last Name*</p><br><br>"; break;
			case 100: echo "<p>Enter Email*</p><br><br>"; break;
			case 1000: echo "<p>Enter Phone Number*</p><br><br>"; break;
			case 10000: echo "<p>Enter Address*</p><br><br>"; break;
			//doubles
			case 11: echo "<p>Enter First Name and Last Name*</p><br><br>"; break;
			case 101: echo "<p>Enter First Name and Email*</p><br><br>"; break;
			case 1001: echo "<p>Enter First Name and Phone Number*</p><br><br>"; break;
			case 10001: echo "<p>Enter First Name and Address*</p><br><br>"; break;

			case 110: echo "<p>Enter Last Name and Email*</p><br><br>"; break;
			case 1010: echo "<p>Enter Last Name and Phone Number*</p><br><br>"; break;
			case 10010: echo "<p>Enter Last Name and Address*</p><br><br>"; break;

			case 1100: echo "<p>Enter Email and Phone Number*</p><br><br>"; break;
			case 10100: echo "<p>Enter Email and Address*</p><br><br>"; break;

			case 11000: echo "<p>Enter Phone Number And Address*</p><br><br>"; break;
			//triples
			case 111: echo "<p>Enter First Name, Last Name and Email*</p><br><br>"; break;
			case 1011: echo "<p>Enter First Name, Last Name and Phone Number*</p><br><br>"; break;
			case 10011: echo "<p>Enter First Name, Last Name and Address*</p><br><br>"; break;
			case 10101: echo "<p>Enter First Name, Email and Address*</p><br><br>"; break;

			case 1110: echo "<p>Enter Last Name, Email, and Phone Number*</p><br><br>"; break;
			case 1110: echo "<p>Enter Last Name, Email, and Phone Number*</p><br><br>"; break;
			case 10110: echo "<p>Enter Last Name, Email, and Address*</p><br><br>"; break;

			case 11100: echo "<p>Enter Email, Phone Number and Address*</p><br><br>"; break;
			case 1101: echo "<p>Enter First Name, Email, Phone Number*</p><br><br>"; break;
			case 11010: echo "<p>Enter Last Name, Phone Number and Address*</p><br><br>"; break;
			//quadruplets
			case 11110: echo "<p>Enter Last Name, Email, Phone Number and Address*</p><br><br>"; break;
			case 11101: echo "<p>Enter First Name, Email, Phone Number and Address*</p><br><br>"; break;
			case 11011: echo "<p>Enter First Name, Last Name, Phone Number and Address*</p><br><br>"; break;
			case 10111: echo "<p>Enter First Name, Last Name, Email and Address*</p><br><br>"; break;
			case 1111: echo "<p>Enter First Name, Last Name, Email and Phone Number*</p><br><br>"; break;


		}
	}


	else //button HAS been pushed
	{
		//set error counter
		$ec = 0;

		//see what stuff they got right and what stuff they missed
		if (!empty($_POST['first'])) $f = $_POST['first']; else {$f=""; $ec +=1;}
		if (!empty($_POST['last'])) $l = $_POST['last']; else {$l=""; $ec +=10;}
		if (!empty($_POST['email'])) $e = $_POST['email']; else {$e=""; $ec +=100;}
		if (!empty($_POST['phone'])) $p = $_POST['phone']; else {$p=""; $ec +=1000;}
		if (!empty($_POST['address'])) $a = $_POST['address']; else {$a=""; $ec +=10000;}
		if (!empty($_POST['band'])) $band[$i] = $_POST['band']; else {$band[$i]=""; $ec +=2;}
		if (!empty($_POST['color'])) $color[$i] = $_POST['color']; else {$color[$i]=""; $ec +=20;}
		if (!empty($_POST['size'])) $size[$i] = $_POST['size']; else {$size[$i]=""; $ec +=200;}
		if (!empty($_POST['style'])) $style[$i] = $_POST['style']; else {$style[$i]=""; $ec +=2000;}

		//if they missed anything then redirect, otherwise print the data
		if($ec) header('location: ?ec='.$ec.'&f='.$f.'&l='.$l.'&e='.$e.'&p='.$p.'&a='.$a.'&b='.$band[$i].'&c='.$color[$i].'&s='.$size[$i].'&st='.$size[$i]);



		//order page

//new page
		else echo
		'<link rel="stylesheet" href="./css/style_p2.css" type="text/css">';
		echo'<div class="div2">';

		echo '<h1> Order Information </h1>';



	  echo "<p>
		You ordered a $size[$i] $color[$i]	$band[$i] $style[$i] shirt
		</p><br>";



		echo "<p> Name: $f $l <br><br>
		 Email: $e <br><br>
		 Phone Number: $p <br><br>
		 Shipping Address: $a <br><br>

		 </p>";
		 '</div>';

}


//black VF
if ($band[$i] == "Violent Femmes" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $VFblack;
}
//grey VF
if ($band[$i] == "Violent Femmes" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $VFgrey;
}
//white VF
if ($band[$i] == "Violent Femmes" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $VFwhite;
}
//red VF
if ($band[$i] == "Violent Femmes" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $VFred;
}
//blue VF
if ($band[$i] == "Violent Femmes" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $VFblue;
}

//black Nirvana
if ($band[$i] == "Nirvana" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $Nblack;
}
//grey Nirvana
if ($band[$i] == "Nirvana" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $Ngrey;
}
//white Nirvana
if ($band[$i] == "Nirvana" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $Nwhite;
}
//red Nirvana
if ($band[$i] == "Nirvana" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $Nred;
}
//blue Nirvana
if ($band[$i] == "Nirvana" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $Nblue;
}


//black GD
if ($band[$i] == "The Grateful Dead" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $GDblack;
}
//grey GD
if ($band[$i] == "The Grateful Dead" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $GDgrey;
}
//white GD
if ($band[$i] == "The Grateful Dead" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $GDwhite;
}
//red GD
if ($band[$i] == "The Grateful Dead" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $GDred;
}
//blue GD
if ($band[$i] == "The Grateful Dead" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $GDblue;
}


//black P
if ($band[$i] == "Primus" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $Pblack;
}
//grey GD
if ($band[$i] == "Primus" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $Pgrey;
}
//white GD
if ($band[$i] == "Primus" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $Pwhite;
}
//red GD
if ($band[$i] == "Primus" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $Pred;
}
//blue GD
if ($band[$i] == "Primus" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $Pblue;
}

//black The Black Keys
if ($band[$i] == "The Black Keys" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBKblack;
}
//grey TBK
if ($band[$i] == "The Black Keys" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBKgrey;
}
//white TBK
if ($band[$i] == "The Black Keys" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBKwhite;
}
//red TBK
if ($band[$i] == "The Black Keys" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBKred;
}
//blue TBK
if ($band[$i] == "The Black Keys" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBKblue;
}

//black Pink Floyd
if ($band[$i] == "Pink Floyd" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $PFblack;
}
//grey PF
if ($band[$i] == "Pink Floyd" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $PFgrey;
}
//white PF
if ($band[$i] == "Pink Floyd" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $PFwhite;
}
//red PF
if ($band[$i] == "Pink Floyd" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $PFred;
}
//blue PF
if ($band[$i] == "Pink Floyd" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $PFblue;
}


//black Weezer
if ($band[$i] == "Weezer" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $Wblack;
}
//grey W
if ($band[$i] == "Weezer" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $Wgrey;
}
//white W
if ($band[$i] == "Weezer" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $Wwhite;
}
//red W
if ($band[$i] == "Weezer" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $Wred;
}
//blue W
if ($band[$i] == "Weezer" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $Wblue;
}


//black The Beatles
if ($band[$i] == "The Beatles" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBblack;
}
//grey TB
if ($band[$i] == "The Beatles" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBgrey;
}
//white TB
if ($band[$i] == "The Beatles" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBwhite;
}
//red TB
if ($band[$i] == "The Beatles" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBred;
}
//blue TB
if ($band[$i] == "The Beatles" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $TBblue;
}

//black The Cure
if ($band[$i] == "The Cure" && $color[$i] == "Black")
{
 echo "<h2>Sample Image: </h2><br><br>", $TCblack;
}
//grey TC
if ($band[$i] == "The Cure" && $color[$i] == "Grey")
{
 echo "<h2>Sample Image: </h2><br><br>", $TCgrey;
}
//white TC
if ($band[$i] == "The Cure" && $color[$i] == "White")
{
 echo "<h2>Sample Image: </h2><br><br>", $TCwhite;
}
//red TC
if ($band[$i] == "The Cure" && $color[$i] == "Red")
{
 echo "<h2>Sample Image: </h2><br><br>", $TCred;
}
//blue TC
if ($band[$i] == "The Cure" && $color[$i] == "Blue")
{
 echo "<h2>Sample Image: </h2><br><br>", $TCblue;
}

?>
</div>



  </body>
</html>
