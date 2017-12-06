<?php require_once('./mysql_connect.php');

/* Handle posted data */
if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$query = "INSERT INTO question (gender, soda, pet,
		food, anime) VALUES (?, ?, ?, ?, ?)";
	$stmt = $dbc->prepare($query);
	if (!$stmt) {
		echo $dbc->error;
	}

	$stmt->bind_param("sssss",$_POST['gender'],
			$_POST['soda'], $_POST['pet'], $_POST['food'], $_POST['anime']);

	$stmt->execute();

	$affected_rows = mysqli_stmt_affected_rows($stmt);

	if($affected_rows == 1){

		mysqli_stmt_close($stmt);

	}
}
$totalAnswers = 0;
$cokeAnswer = 0;
$pepsiAnswer = 0;
$maleAnswer = 0;
$femaleAnswer = 0;
$foxAnswer = 0;
$dogAnswer = 0;
$catAnswer = 0;
$chickenAnswer = 0;

$steakAnswer = 0;
$vegAnswer = 0;
$rwbyAnswer = 0;
$fmaAnswer = 0;
// Create a query for the database
$query = "SELECT gender, soda, pet, food, anime FROM question";
// Get a response from the database by sending the connection
// and the query
$response = $dbc->query($query);

// If the query executed properly proceed
if($response->num_rows > 0){

	echo '<table align="left"
		cellspacing="5" cellpadding="8">

		<tr><td align="left"><b>Gender</b></td>
		<td align="left"><b>Soda</b></td>
		<td align="left"><b>Pet</b></td>
		<td align="left"><b>Food</b></td>
		<td align="left"><b>Anime</b></td>
		</tr>';

	// mysqli_fetch_array will return a row of data from the query
	// until no further data is available
	while($row = $response->fetch_assoc()){
		$totalAnswers++;
		if ($row['soda'] == 'Coke') $cokeAnswer++;
		if ($row['soda'] == 'Pepsi') $pepsiAnswer++;

		if ($row['gender'] == 'Male') $maleAnswer++;
		if ($row['gender'] == 'Female') $femaleAnswer++;
		if ($row['gender'] == 'Fox') $foxAnswer++;
		if ($row['pet'] == 'Dogs') $dogAnswer++;
		if ($row['pet'] == 'Cats') $catAnswer++;
		f ($row['food'] == 'Chicken') $chickenAnswer++;
		if ($row['food'] == 'Veg') $vegAnswer++;
		if ($row['anime'] == 'RWBY') $rwbyAnswer++;
		if ($row['anime'] == 'FMA') $fmaAnswer++;

		echo '<tr><td align="left">' .
			$row['gender'] . '</td><td align="left">' .
			$row['soda'] . '</td><td align="left">' .
			$row['pet'] . '</td><td align="left">' .
			$row['food'] . '</td><td align="left">' .
			$row['anime'] . '</td><td align="left">';

		echo '</tr>';
	}

	echo '</table>';

} else {

	echo "Couldn't issue database query<br />";

	echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

echo "<br><b>Total Answer = $totalAnswers</b><br>";

$maleResult = ($maleAnswer/$totalAnswers)*100;
$femaleResult = ($femaleAnswer/$totalAnswers)*100;
$foxResult = ($foxAnswer/$totalAnswers)*100;
$cokeResult = ($cokeAnswer/$totalAnswers)*100;
$pepsiResult = ($pepsiAnswer/$totalAnswers)*100;
$dogResult = ($dogAnswer/$totalAnswers)*100;
$catResult = ($catAnswer/$totalAnswers)*100;
$chickenResult = ($chickenAnswer/$totalAnswers)*100;
$steakResult = ($steakAnswer/$totalAnswers)*100;
$vegResult = ($vegAnswer/$totalAnswers)*100;
$rwbyResult = ($rwbyAnswer/$totalAnswers)*100;
$fmaResult = ($fmaAnswer/$totalAnswers)*100;

echo "Male = $maleResult%<br>";                                            echo "Female = $femaleResult%<br>";                                        echo "Fox = $foxResult%<br>";
echo "Coke = $cokeResult%<br>";                                            echo "Pepsi = $pepsiResult%<br>";                                          echo "Dogs = $dogResult%<br>";
echo "Cats = $catResult%<br>";                                             echo "Chicken = $chickenResult%<br>";                                      echo "Steak = $steakResult%<br>";
echo "Veg = $vegResult%<br>";
echo "RWBY = $rwbyResult%<br>";
echo "FMA = $fmaResult%<br>";

?>
<html>
<button type="button"><a href="http://cs.umw.edu:51952/hw3/questions.php">Return</button>

