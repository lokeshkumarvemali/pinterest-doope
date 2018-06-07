<?php
// Connecting to and selecting a MySQL database named sakila
// Hostname: 127.0.0.1, username: your_user, password: your_pass, db: sakila
$mysqli = new mysqli('localhost', 'root', '', 'registration');

// Oh no! A connect_errno exists so the connection attempt failed!
if ($mysqli->connect_errno) {
 // The connection failed. What do you want to do?
 // You could contact yourself (email?), log the error, show a nice page, etc.
 // You do not want to reveal sensitive information

 // Let's try this:
 echo "Sorry, this website is experiencing problems.";

 // Something you should not do on a public site, but this example will show you
 // anyways, is print out MySQL error related information -- you might log this
 echo "Error: Failed to make a MySQL connection, here is why: \n";
 echo "Errno: " . $mysqli->connect_errno . "\n";
 echo "Error: " . $mysqli->connect_error . "\n";

 // You might want to show them something nice, but we will simply exit
 exit;
}
else {
echo "connection successfull.";
echo $_POST["first_name"];
echo $_POST["last_name"];
echo $_POST["email"];
echo $_POST["mobile"];
echo $_POST["password"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$password=$_POST["password"];
$query="INSERT INTO `registration`(`first_name`, `last_name`, `email`, `phone number`, `password`) VALUES ('$first_name','$last_name','$email','$mobile','$password')";

 if ($result = $mysqli->query($query)) {
  // code...
  echo "data inserted";

}
else {
  echo "data not inserted";
  echo "Errno: " . $mysqli->connect_errno . "\n";
  echo "Error: " . $mysqli->connect_error . "\n";

}
}
?>
