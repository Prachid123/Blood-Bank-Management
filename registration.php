<?php 
$insert = false;
if(isset($_POST['username'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    // Collect post variables
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $blood = $_POST['blood'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password	= $_POST['password'];
    // $Message = $_POST['Message'];
    

   $sql="INSERT INTO `database`.`register` (`username`,`gender`, `age`, `mobile`,`blood`, `city`, `email`,`password`) VALUES ('$username','$gender','$age', '$mobile','$blood','$city', '$email','$password');";
   echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }

    else{
        echo "ERROR: $sql <br> $con->error";
    }

    header("location:thankyou.html");

    // Close the database connection
    $con->close();
}
        ?>