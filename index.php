<?php
if(isset($_POST['name'])){ 
    $server="localhost";
    $username="root";
    $password="";
    $con= mysqli_connect($server,$username,$password);
    if(!$con){
        die("Connection failed due to ".mysqli_connect_error());
    }
    // echo "Success connecting to the database";
    $name= $_POST['name'];
    $gender= $_POST['gender']?? "";
    $age= $_POST['age'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $extra= $_POST['extra'];
    $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `extra`, `date_submitted`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$extra', current_timestamp())";
    if($con->query($sql)==true){
        echo"<h1>Submitted Successfully</h1> ";
    }
    else{
        echo"<h1>Error during submission: $con->error<h1>";
    }
    $con->close();
}

?>