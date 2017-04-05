<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "test";
  $usr = $_REQUEST['usr'];
  $pass = $_REQUEST['pass'];
  $email = $_REQUEST['email'];
  $passC = $_REQUEST['passC'];
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }

  if($pass == $passC){
    $sql = "INSERT INTO WebUsers (username, password, email)
    VALUES ('$usr', '$pass', '$email')";
  }else{
    echo "Passwords do not match!"."<br>";
  }

  if(mysqli_query($conn, $sql)){
    echo "New record created.";
  } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?>
