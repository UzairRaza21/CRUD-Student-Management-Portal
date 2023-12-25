<?php

if(isset($_POST['subBtn'])){
 include('conn.php');

 $sname = $_POST['sname'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $age = $_POST['age'];
 $phone = $_POST['phone'];


 $sql = "INSERT INTO students(sname, fname, age, email, phone) VALUES ('$sname', '$fname', '$age', '$email', '$phone' )";
 $result = mysqli_query($conn, $sql) or die ("Query not successful");

 mysqli_close($conn);
 header('Location: index.php');

    
}


?>
