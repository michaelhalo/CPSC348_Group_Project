<?php
DEFINE ('DB_USER', 'llopez4');
DEFINE ('DB_PASSWORD', 'Ll949608');
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'F17-CPSC348-01_llopez4');
 
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .
			mysqli_connect_error());
	?>

