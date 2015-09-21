<?php 
include "../core/database.php";

$name = $_POST['name'];
$subject = $_POST['subject'];
$body = $_POST['body'];
$no = 1;

// echo "<br>";
// echo $name . "<br>";
// echo $subject . "<br>";
// echo $body . "<br>";


$sql = "INSERT INTO ss (name, subject, body) ";
$sql .= "VALUES ('$name', '$subject', '$body')";


$query = mysql_query($sql, $conn) or die(mysql_error());

$num_rows = mysql_num_rows($query);

mysql_close($conn);
echo("<script>location.href='../controller/_list.php';</script>"); 
 

?>