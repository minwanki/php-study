<?php 
include "../core/database.php";

$no = $_GET['no'];

$sql = "DELETE FROM ss WHERE no = $no";

$query = mysql_query($sql, $conn) or die(mysql_error());


mysql_close($conn);
echo '<script>location.href=("../controller/_list.php");</script>';