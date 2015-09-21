<?php 

$no = $_GET['no'];

echo "
<script>
	var isit = confirm('is it true?');
	if ( isit == true ) {
		<?php include('../controller/_delOK.php'); ?>
	} else {
		location.href='../controller/_list.php';	
	}
</script>
";