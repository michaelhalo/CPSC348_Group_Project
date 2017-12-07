<html>
<body id="profile">
<head>
<link href="gp.css" rel="stylesheet"/>
<div class="banner">
<img class="banner" src="banner.png" style="width:100%; height:50px;">
</div>
<br>
<img src="http://profile.actionsprout.com/default.jpeg" style="width:150px; height:150px;">
<div id="banner">
<br>
<a href="profile.php"><font color="white">Home</a><u>&nbsp &nbsp Friends &nbsp &nbsp Free Time</font></u>
</div>
<p id="name"> User McUser</p>
</head>
</script>
</body>
</html>
<?php
require_once('.CPSC348_Group_Project/mysql_connect.php');

/* Handle posted data */
if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$query = "INSERT INTO classes (class1, class2, class3,
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
}

// Close connection to the database
mysqli_close($dbc);
?>

