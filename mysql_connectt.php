<?php
DEFINE ('DB_USER', 'mbooth');
DEFINE ('DB_PASSWORD', 'Mb467209');
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'F17-CPSC348-01_mbooth');
 
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .
			mysqli_connect_error());
	?>

