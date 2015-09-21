<?php 
include "../core/database.php";

$no = $_GET['no'];

$sql = "SELECT * FROM ss WHERE no = {$no}";

$query = mysql_query($sql, $conn) or die(mysql_error());

$row = mysql_fetch_array($query);

$name = $row['name'];
$subject = $row['subject'];
$body = $row['body'];


mysql_close($conn);

include "../modify.php";