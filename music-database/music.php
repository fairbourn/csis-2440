<!doctype html>
<html lang="en">
	<head>
		<title>Music Database</title>
		<link rel="stylesheet" href="./css/style.css" type="text/css">
	</head>
	<body>

		<?php echo ("<h1>Awesome Music!</h1>"); ?>

<!--Album table -->
		<div class="row">
		  <div class="column">
		    <table>
<?php echo ("<tr><th>Artist</th></tr>"); ?>

<?php

	$album2 = array("Dr. Dre","Nirvana","The Grateful Dead","Primus","Kanye West","Kendrick Lamar","Tame Impala","Thundercat","The Beatles","The Cure");

	foreach ($album2 as $x2) echo output2($x2);
?>

<!--Artist table -->
<?php
	function output2($input2)
	{

		$return = "";
		$return .= "<tr><td>\"$input2\"</td></tr>";

		return $return;
	}
?>
</table>
</div>

<div class="column">
    <table>
	<?php echo ("<tr><th>Album</th></tr>"); ?>
		<?php
			$album = array("The Chronic","Incesticide","Ameican Beauty","Frizzle Fry","Donda","Good Kid, m.A.A.d city","Currents","Drunk","Let It Be","Three Imaginary Boys");

			foreach ($album as $x) echo output($x);
		?>

		<?php
			function output($input)
			{

				$return = "";
				$return .= "<tr><td>\"$input\"</td></tr>";

				return $return;
			}
		?>

</table>
</div>
</div>

<!--go back button -->
<div class="goBack">
	<form>
		<!--link to index.php -->
	         <input type="button" onclick="window.location.href = 'index.php';" value="Go Back?"/>
	</form>
</div>



	</body>
</html>
