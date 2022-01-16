<?php
$div1 =
'<div>
<form method="post">
    <input name="username" type="text" placeholder="Username" value=""><br><br>
    <!--IMPORTANT!! CHANGE PASSWORD TYPE BACK TO PASSWORD AFTER DONE TESTING -->
    <input name="password" type="password" placeholder="Password" value=""><br><br>
    <input name= "submit" type="submit" value="Log In">
    <input type="reset">
    </div>';
  ?>
<?php
    $access = '<h1>Log in </h1><br>';
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

    $conn = mysqli_connect(HOST, USER, PASS, DB);

    if(isset($_POST['submit'])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT username, password FROM userTable WHERE username = '".$username."' AND  password = '".$password."';";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0 ){
            $access = '<p class="good">Access Granted!</p>';
        }
        if(mysqli_num_rows($result) > 0 ){
            $div1 = '';
        }
        else{
            $access = '<p class="bad">Access Denied! <br> Try Again!</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Less Insecure</title>
        <link type="text/css" rel="stylesheet" href="./css/style.css" />
    </head>
    <body>
        <?php
            echo $access;


            //custim messages for each user
            if (strtolower($_POST['username']) == "beavis" && strtolower($_POST['password']) == "password") {
              echo "Yo Beavis, you should really update your password. <br><br>";
            }
            if (strtolower($_POST['username']) == "butthead" && strtolower($_POST['password']) == "password2") {
              echo "Hello butthead...interesting name. <br><br>";
            }
            if (strtolower($_POST['username']) == "dana" && strtolower($_POST['password']) == "alien") {
              echo "Good day Dana, your pant suit looks lovely today. <br><br>";
            }
            if (strtolower($_POST['username']) == "fox" && strtolower($_POST['password']) == "believe") {
              echo "Hello Mr. Mulder, believe in yourself today. <br><br>";
            }

            echo $div1;
        ?>
        </form>
    </body>
</html>
