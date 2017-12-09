<html>
<script>
function checkAnswer(event){
	var classNum = document.getElementById("classNum");
	var selectedValue = classNum.options[classNum.selectedIndex].value;
	if(selectedValue == "3"){
		if(((document.getElementById('className1').value)=="")||((document.getElementById('className2').value)=="")||((document.getElementById('className3').value)=="")){
			alert("Not all class names are entered");
		}
		else if(((document.getElementById('className4').value)!="")||((document.getElementById('className5').value)!="")||((document.getElementById('className6').value)!="")){
			alert("Correct number of classes was not selected");
		}

	}
	else if(selectedValue == "4"){
		if(((document.getElementById('className1').value)=="")||((document.getElementById('className2').value)=="")||((document.getElementById('className3').value)=="")||((document.getElementById('className4').value)=="")){
			alert("Not all class names are entered");
		}
		else if(((document.getElementById('className5').value)!="")||((document.getElementById('className6').value)!="")){
			alert("Correct number of classes was not selected");
		}

	}
	else if(selectedValue == "5"){
		if(((document.getElementById('className1').value)=="")||((document.getElementById('className2').value)=="")||((document.getElementById('className3').value)=="")||((document.getElementById('className4').value)=="")||((document.getElementById('className5').value)=="")){
			alert("Not all class names are entered");
		}
		else if(((document.getElementById('className6').value)!="")){
			alert("Correct number of classes was not selected");
		}

	}

	else if(selectedValue == "6"){
		if(((document.getElementById('className1').value)=="")||((document.getElementById('className2').value)=="")||((document.getElementById('className3').value)=="")||((document.getElementById('className4').value)=="")||((document.getElementById('className5').value)=="")||((document.getElementById('className6').value)=="")){
			alert("Not all class names are entered");
		}
	}
}
function onbodyload(){
	document.getElementById('theform').addEventListener('submit',checkAnswer);
}
</script>
<body id ="profile">
<head>
<link href="gp.css" rel="stylesheet"/>
<form action="cs.umw.edu:51952/groupProject/CPSC348_Group_Project/schedule.php" method="post" id="theform">
<body onload="onbodyload()">

<div class="banner">
<img class="banner" src="banner.png" style="width:100%; height:50px;">
</div>
<div id="banner2">
<a href="profile.php"><font color="white">Home</a><u>&nbsp &nbsp Friends &nbsp &nbsp Free Time</font></u>
</div>
Select your number of classes:<br>
<select id="classNum" name="num">
<option value="3">3</option><br/>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<br>
<br>

Enter Class 1 Name:<br>
<input type ="text" name="className1" id="className1" value=""><br>
Enter Class 1 Time:<br>
<select name="class1hour">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option><br/>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
:
<select name="class1min">
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
<select name="class1ampm">
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br><br>
Enter Class 2 Name:<br>
<input type ="text" name="className2" id="className2" value=""><br>
Enter Class 2 Time:<br>
<select name="class2hour">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option><br/>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
:
<select name="class2min">
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
<select name="class2ampm">
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br><br>
Enter Class 3 Name:<br>
<input type ="text" name="className3" id="className3" value=""><br>
Enter Class 3 Time:<br>
<select name="class3hour">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
:
<select name="class3min">
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
<select name="class3ampm">
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br> <br>
Enter Class 4 Name:<br>
<input type ="text" name="className4" id="className4" value=""><br>
Enter Class 4 Time:<br>
<select name="class4hour">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option><br/>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
:
<select name="class4min">
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
<select name="class4ampm">
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br>
<br>
Enter Class 5 Name:<br>
<input type ="text" name="className5" id="className5" value=""><br>
Enter Class 5 Time:<br>
<select name="class5hour">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option><br/>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
:
<select name="class5min">
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
<select name="class5ampm">
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br>
<br>
Enter Class 6 Name:<br>
<input type ="text" name="className6" id="className6" value=""><br>
Enter Class 6 Time:<br>
<select name="class6hour">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option><br/>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
:
<select name="class6min">
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
<select name="class6ampm">
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br>
<input type="submit" name="submit" value="Submit"/>

