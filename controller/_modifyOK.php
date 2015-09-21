<?php 
include "../core/database.php";

$no = $_GET['no'];

$name = $_POST['name'];
$subject = $_POST['subject'];
$body = $_POST['body'];

$sql = "UPDATE ss SET name = '$name', subject = '$subject', body = '$body' WHERE no = $no ";

$query = mysql_query($sql, $conn) or die(mysql_error());

$row = mysql_fetch_array($query);


mysql_close($conn);

echo("<script>location.href='../controller/_view.php?no={$no}';</script>"); 