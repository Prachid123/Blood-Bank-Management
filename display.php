<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Username</th>
<th>Gender</th>
<th>Age</th>
<th>Mobile</th>
<th>Blood Group</th>
<th>City</th>
<th>Email</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "database");
// Check connection
$city = $_POST['city'];
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, gender, age, mobile, blood , city , email FROM register where city='$city'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["username"]. "</td><td>" . $row["gender"]. "</td><td>"
. $row["age"]. "</td><td>" . $row["mobile"]. "</td><td>" . $row["blood"] . "</td><td>" . $row["city"]. "</td><td>" . $row["email"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>