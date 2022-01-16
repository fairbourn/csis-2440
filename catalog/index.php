<?php
include_once('includes/db.php');
$div1 =
'<div>
<form method="post">
    <input name="username" type="text" placeholder="Username" value=""><br><br>
    <input name="password" type="password" placeholder="Password" value=""><br><br>
    <input name= "submit" type="submit" value="Log In">
    <input type="reset"><br>
    <button id= "button" formaction="create-account.php" type="submit">Create Account</button><br>
    </div>';
  ?>
<?php
    $access = '<h1>Log in </h1><br>';

    if(isset($_POST['submit'])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        if (isset($_POST['username']))
        {
        $_SESSION['usr'] = $_POST['username'];
        }



        $sql = "SELECT username, password FROM userTable WHERE username = '".$username."' AND  password = password('".$password."');";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0 ){
            header('location: home.php');
        }
        if(mysqli_num_rows($result) > 0 ){
            $div1 = '';
        }
        else{
            $access = '
            <h1>Log in </h1>
            <p class="bad">Access Denied! <br> Try Again!
            </p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
        <link type="text/css" rel="stylesheet" href="./css/style.css" />
    </head>
    <body>
        <?php
            echo $access;
            echo $div1;
        ?>
        </form>
    </body>
</html>
