<?php
include_once('includes/db.php');
    $access = '';
    if(isset($_POST["submit"])){

        $name = $_POST["username"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        if ($_POST["password"] === $_POST["password2"]){

          $access = "";
        }
        else{
          $access = "passwords do not match up";
        };


        $sql = "SELECT username FROM userTable WHERE username = '".$name."';";
        $result = mysqli_query($conn, $sql);


         $newAccount = "INSERT INTO userTable (username, password) VALUES ('".$name."', password('".$password."'));";



        if(mysqli_num_rows($result) > 0){
            $access = '<p class="bad">Username already exists</p>';
        }
        else if($access == 'passwords do not match up'){
          $access = '<p class="bad">Passwords do not match up.<br><br> Please try again.</p>';
        }
        else{
            mysqli_query($conn, $newAccount);
            $access = '<p class="good">Congrats! Your account has been created.</p>';
        }
    }

?>
<!doctype html>
<html lang="en">
	<head>
		<title>create an account</title>
		<script defer src="js/script.js"></script>
		<link href="css/style.css" type="text/css" rel="stylesheet">
	</head>
	<body>
    <h1>Create An Account</h1>
    <?php
        echo $access;
    ?>
		<p id="msg"></p>
    <p id="pText"></p>
		<form id="main-form" method="post">
      <input id="username" name="username" type="text" placeholder="Username">
			<input id="pw" name="password" placeholder="Enter Password" type="password">
			<input id="cpw" name="password2" placeholder="Confirm Password" type="password">
			<input id="main-button" value="Create Account" name="submit" type="submit" disabled>
            <input type="reset"><br>
            <button id= "button" formaction="index.php" type="submit">Back To Login</button>
		</form>
	</body>
</html>
