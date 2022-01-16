<!DOCTYPE html>
<html>
<head>
<title>User Table</title>
<link type="text/css" rel="stylesheet" href="./css/style2.css" />
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>


<?php
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
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, password FROM userTable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<div class="button">

  <form>
      <button id= "button" formaction="index.php" type="submit">Back To Login</button>
  </form>
</div>

</body>
</html>
