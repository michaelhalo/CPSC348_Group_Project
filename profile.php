<html>
<body>
<head>
<link href="homework3.css" rel="stylesheet"/>
</head>
<form action="results.php" method="post">
<label for ="classNum">Select your number of classes:</label><br>
<select>
<option value="3">3</option><br/>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<br>
<br>
Enter Class Name:<br>
<input type ="text" name="className" id="className1"><br>
Enter Class Time:<br>
<input type ="text" name="classTime" id="classTimeH1">:
<input type ="text" name="classTime" id="classTimeM1">
<br><br>
Enter Class Name:<br>
<input type ="text" name="className" id="className2"><br>
Enter Class Time:<br>
<input type ="text" name="classTime" id="classTimeH2">:
<input type ="text" name="classTime" id="classTimeM2">
<br><br>
Enter Class Name:<br>
<input type ="text" name="className" id="className3"><br>
Enter Class Time:<br>
<input type ="text" name="classTime" id="classTimeH3">:
<input type ="text" name="classTime" id="classTimeM3">
<br><br>
Enter Class Name:<br>
<input type ="text" name="className" id="className4"><br>
Enter Class Time:<br>
<input type ="text" name="classTime" id="classTimeH4">:
<input type ="text" name="classTime" id="classTimeM4">
<br><br>
Enter Class Name:<br>
<input type ="text" name="className" id="className5"><br>
Enter Class Time:<br>
<input type ="text" name="classTime" id="classTimeH5">:
<input type ="text" name="classTime" id="classTimeM5">
<br><br>
Enter Class Name:<br>
<input type ="text" name="className" id="className6"><br>
Enter Class Time:<br>
<input type ="text" name="classTime" id="classTimeH6">:
<input type ="text" name="classTime" id="classTimeM6">


</form>
<button onclick="checkAnswer()">Submit</button>
<script>
function checkAnswer(){
	var checked = true;
	//check to see if the first question is answered
	if(!((document.getElementById('coke').checked) || (document.getElementById('pepsi').checked))){
		alert("Not all questions are answered");
		ecked = false;
	}

	else if(!((document.getElementById('cats').checked) || (document.getElementById('dogs').checked))){
		alert("Not all questions are answered");
		checked = false;
	}

	else if(!((document.getElementById('chicken').checked) || (document.getElementById('steak').checked) || (document.getElementById('veg').checked))){
		alert("Not all questions are answered");
		checked = false;
	}
	else if(!((document.getElementById('rwby').checked) || (document.getElementById('fma').checked))){
		alert("Not all questions are answered");
		checked = false;
	}
}

</script>
</body>
</html>

