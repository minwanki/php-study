<?php
include "../core/database.php";

$sql  = "SELECT * FROM ss ";
$sql  .= "ORDER BY no DESC";

$result = mysql_query("SELECT count(*) as toal FROM ss");

$query = mysql_query($sql, $conn);

$data = array();

while( $row = mysql_fetch_array($query) ) {
	$data[] = $row;
}

include "../list.php";

mysql_free_result($query);
mysql_close();

?>