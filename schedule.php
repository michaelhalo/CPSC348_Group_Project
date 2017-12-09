<?php
require_once('./mysql_connect.php');

/* Handle posted data */
if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$query = "INSERT INTO schedule (, class2, class3,
		class4, class5, class6) VALUES (?, ?, ?, ?, ?, ?)";
	$stmt = $dbc->prepare($query);
	if (!$stmt) {
		echo $dbc->error;
	}

	$stmt->bind_param("sssss",$_POST['class1'],
			$_POST['class2'], $_POST['class3'], $_POST['class4'], $_POST['class5'], $_POST['class6']);

	$stmt->execute();

	$affected_rows = mysqli_stmt_affected_rows($stmt);

	if($affected_rows == 1){


		mysqli_stmt_close($stmt);

#mysqli_close($dbc);

	}
}

// Create a query for the database
$query = "SELECT class1, class2, class3, class4, class5, class6 FROM classes";
// Get a response from the database by sending the connection
// and the query
$response = $dbc->query($query);

// If the query executed properly proceed
if($response->num_rows > 0){

	echo '<table align="left"
		llspacing="5" cellpadding="8">

		<tr><td align="left"><b>Class 1</b></td>
		<td align="left"><b>Class 2</b></td>
		<td align="left"><b>Class 3</b></td>
		<td align="left"><b>Class 4</b></td>
		<td align="left"><b>Class 5</b></td>
		<td align="left"><b>Class 6</b></td>
		</tr>';

	// mysqli_fetch_array will return a row of data from the query
	// until no further data is available
	while($row = $response->fetch_assoc()){
		echo '<tr><td align="left">' .
			$row['class1'] . '</td><td align="left">' .
			$row['class2'] . '</td><td align="left">' .
			$row['class3'] . '</td><td align="left">' .
			$row['class4'] . '</td><td align="left">' .
			$row['class5'] . '</td><td align="left">';
			$row['class6'] . '</td><td align="left">';

		echo '</tr>';
	}

	echo '</table>';

} else {

	echo "Couldn't issue database query<br />";

	echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);
?>

