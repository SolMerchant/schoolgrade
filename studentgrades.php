<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css"> 
		li,a{
			 list-style-type:none;
			 padding: 20px;

		}
		footer{
			padding-bottom: 0px;
		}
		body{background-image: url(libre.jpg);
		     background-size: cover;
		     color: #ffffff;}
					   
		#contactus{
					text-align: center;
					background-color: #708090;
	</style>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="navbar-header"><a href="navbar-brand">SOL ACADEMY</a></div>

			<div class="container-fluid">
				<ul class="navbar-nav">
					<li ><a href="index.php">HOME</a></li><li><a href="#aboutus">ABOUT US</a></li>
					<li><a href="#contactus">CONTACT US</a></li>
					<li><a href="student.php">STUDENT PORTAL</a></li>
					<li class="active"><a href="studentgrades.php">STUDENT GRADES</a></li>
				</ul>
			</div>
	</nav>
<?php  
$Student="";                      
$Student=$_POST["sname"];
$Math="";
$Math=$_POST["math"];
$English="";
$English=$_POST["eng"];
$Chemistry="";
$Chemistry=$_POST["chem"];
$Physics="";
$Physics=$_POST["phyc"];
$Biology="";
$Biology=$_POST["bio"];
$Computer="";
$Computer=$_POST["comp"];
$History="";
$History=$_POST["hist"];

$total=$Math+$English+$Chemistry+$Physics+$Biology+$Computer+$History;
$Average=$total/7;

	echo "<table border=solid black>
        <tr>
		<th>STUDENT NAME</th>
		<th>ENGLISH</th>
		<th>MATH</th>
		<th>PHYSICS</th>
		<th>CHEMISTRY</th>
		<th>BIOLOGY</th>
		<th>HISTORY</th>
		<th>COMPUTER</th>
		<th>Total</th>
		<th>Average</th></tr>
		
		<td>$Student</td>
		<td>$English</td>
		<td>$Math</td>
		<td>$Physics</td>
		<td>$Chemistry</td>
		<td>$Biology</td>
		<td>$History</td>
		<td>$Computer</td>
		<td>$total</td>
		<td>$Average</td>
	</table>";
	switch ($Average) {
	case $Average>90:
		# code...
	echo "A";

	break;case $Average>80:
		# code...
	echo "A-";

	break;case $Average>73:
		# code...
	echo "B+";

	break;case $Average>67:
		# code...
	echo "B";

	break;case $Average>60:
		# code...
	echo "B-";

	break;case $Average>55:
		# code...
	echo "C+";

	break;
	case $Average>50:
		# code...
	echo "C";
		break;case $Average>45:
		# code...
	echo "C-";
		break;case $Average>40:
		# code...
	echo "D+";
		break;case $Average>36:
		# code...
	echo "D";
		break;
		case $Average>30:
			# code
		echo("D-");
		break;
		case $Average>26:
		echo "E";
		break;
		default:
		echo "enter average";
		break;}
	
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer id="contactus">
		copyright &copy;SolAcademy<br>
		Tel:0706577037, 0793820873<br>
		Email:solacademy21@gmail.com<br>
		P.O.BOX 141-01000<br>
		&reg;SolAcademy<br>	
	</footer>




</body>
</html>