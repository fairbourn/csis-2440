<?php
    $access = '';

    if ($_SERVER['HTTP_HOST'] == 'localhost')
    {
      define("HOST", "localhost");
      define("USER", "root");
      define("PASS", "1550");
      define("DB", "users");
    }
    else
    {
      define("HOST", "localhost");
      define("USER", "colemurn");
      define("PASS", "Singleap4");
      define("DB", "colemurn_users");
    }
#INSERT INTO secretTable (secertCode) VALUES ('rawhide');
    $conn = mysqli_connect(HOST, USER, PASS, DB);

    if(isset($_POST["submit"])){

        $name = $_POST["username"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $secretCode = $_POST["secretCode"];

        if ($_POST["password"] === $_POST["password2"]){

          $access = "";
        }
        else{
          $access = "passwords do not match up";
        };


        $sql = "SELECT username FROM userTable WHERE username = '".$name."';";
        $result = mysqli_query($conn, $sql);

        $secret = "SELECT secertCode FROM secretTable WHERE secertCode = '".$secretCode."';";
        $check = mysqli_query($conn, $secret);

         $newAccount = "INSERT INTO userTable (username, password) VALUES ('".$name."', password('".$password."'));";



        if(mysqli_num_rows($result) > 0){
            $access = '<p class="bad">Username already exists</p>';
        }
        else if($access == 'passwords do not match up'){
          $access = '<p class="bad">Passwords do not match up.<br><br> Please try again.</p>';
        }
        else if(mysqli_num_rows($check) == 0){
            $access = '<p class="bad">The secret code you submitted is incorrect</p>';
        }
        else{
            mysqli_query($conn, $newAccount);
            $access = '<p class="good">Congrats! Your account has been created.</p>';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Create An Account</title>
        <link type="text/css" rel="stylesheet" href="./css/style.css" />

    </head>
    <body>
      <h1>Create An Account</h1>
    <?php
        echo $access;
    ?>
        <form method="post">
            <input id="username" name="username" type="text" placeholder="Username">
            <input id="password" name="password" type="password" placeholder="Password">
            <input id="password2" name="password2" type="password" placeholder="Verify Password">
            <input id="secretCode" name= "secretCode" type="password" placeholder="Secret Code">
            <input name="submit" type="submit" value="Create Account">
            <input type="reset">
            <button id= "button" formaction="index.php" type="submit">Back To Login</button>
        </form>
    </body>
</html>
