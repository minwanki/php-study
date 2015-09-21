<?php 
include "../core/database.php";

function get(&$var, $default=null) {
	return isset($var) ? $var : $default;
}

$no = $_GET['no'];

$sql  = "SELECT * FROM ss ";
$sql .= "WHERE no = $no";


$query = mysql_query($sql, $conn) or die(mysql_error());

$row = mysql_fetch_array($query);
// $num_rows = mysql_num_rows($query);

mysql_close($conn);

if (get($_GET['format'], 'html') == 'json') {
	echo json_encode(array(
		'name' => $row['name'],
		'subject' => $row['subject'],
		'body' => $row['body']
	));
} else {
	include "../view.php";
}
 ?>