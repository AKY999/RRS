<?php
$name = $_POST['name'];
$username = $_POST['username'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$add= $_POST['add'];
$cno = $_POST['cno'];
if (!empty($username) || !empty($pass1)|| !empty($pass2) || !empty($name) || !empty($dob)|| !empty($email) || !empty($add) || !empty($cno)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "DB";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT username From customer Where username = $username ";
     $INSERT = "INSERT Into customer (name,username,contact no.,dob,emailid,address, password) values($name,$username,$cno ,$dob,$email,$add,$pass1)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssissss",$name,$username,$cno ,$dob,$email,$add,$pass1);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } 
     else {
      echo "Someone already register using this username";
     }
     $stmt->close();
     $conn->close();
    }
}
 else {
 echo "All field are required";
 die();
}
?>