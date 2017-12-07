<html>
<script>
function checkAnswer(event){
	var classNum = document.getElementById("classNum");
	var selectedValue = classNum.options[classNum.selectedIndex].value;
	if(selectedValue == "3"){
		alert("THIS WORKS");
	}
	if((document.getElementById('className1').value)==""){
		alert("Not answered");
	}
	else{
		alert("shit it didn't work");
	}
}
function onbodyload(){
document.getElementById('theform').addEventListener('submit',checkAnswer);
}
</script>
<body id ="profile">
<head>
<link href="gp.css" rel="stylesheet"/>
<form action="cs.umw.edu:51952/groupProject/CPSC348_Group_Project/profile.php" method="post" id="theform">
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

Enter Class Name:<br>
<input type ="text" name="className" id="className1" value=""><br>
Enter Class Time:<br>
<select>
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
<select>
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
 <select>
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br><br>
Enter Class Name:<br>
<input type ="text" name="className" id="className2" value="Class Name"><br>
Enter Class Time:<br>
<select>
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
<select>
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
 <select>
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br><br>
Enter Class Name:<br>
<input type ="text" name="className" id="className3" value="Class Name"><br>
Enter Class Time:<br>
<select>
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
<select>
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
 <select>
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br> <br>
Enter Class Name:<br>
<input type ="text" name="className" id="className4" value="Class Name"><br>
Enter Class Time:<br>
<select>
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
<select>
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
 <select>
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br>
<br>
Enter Class Name:<br>
<input type ="text" name="className" id="className5" value="Class Name"><br>
Enter Class Time:<br>
<select>
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
<select>
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
 <select>
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br>
<br>
Enter Class Name:<br>
<input type ="text" name="className" id="className6" value="Class Name"><br>
Enter Class Time:<br>
<select>
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
<select>
<option value="00">00</option><br/>
<option value="15">15</option><br/>
<option value="30">30</option><br/>
<option value="45">45</option><br/>
</select>
 <select>
<option value="am">am</option><br/>
<option value="pm">pm</option><br/>
</select>
<br>
<input type="submit" name="submit" value="Submit"/>

