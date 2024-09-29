

<?php

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "subtle";

// Establishing a connection to the database
$conn = new mysqli($host, $username, $password, $database);

$uname = $_REQUEST['usern'];
$pass = $_REQUEST['pass'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
 echo "connection estblished";
 $stmt="insert into users values('$uname','$pass')";
 if(mysqli_query($conn, $stmt)){
  echo "<br> registration sucessful";

  echo '<script type="text/javascript">
  alert("Please Login with credientials");
  window.location = "login.html";
  </script>';
} else{
  echo "<br> ERROR: Hush! Sorry $stmt. "
    . mysqli_error($conn);
}
}
/*
/


// SQL query to insert data into the users table
$sql = "INSERT INTO users (name, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Closing the database connection
$conn->close();
*/

?>

