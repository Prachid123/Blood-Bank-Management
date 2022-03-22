<?php
$conne = mysqli_connect("localhost", "root", "", "database");
$name = $_POST['name'];
$mail = $_POST['mail'];
$feedback = $_POST['feedback'];
// Check connection
if ($conne->connect_error) {
die("Connection failed: " . $conne->connect_error);
}
$sql1 = "INSERT INTO `database`.`contact` (`name`,`mail`,`feedback`) VALUES ('$name','$mail','$feedback');";
$result = $conne->query($sql1);
echo $sql1;
if($result == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
    header("location:thankyou.html");
}
else{
    echo "ERROR: $sql1 <br> $conne->error";
}
$conne->close();
?>
