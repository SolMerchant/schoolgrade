<!DOCTYPE html>
<html>
<head>
	<title>RECORDS</title>
	<style type="text/css"> 
		li,a{
			 list-style-type:none;
			 padding: 20px;

		}
		body{background-image: url(lib.jpg);
			 background-size: cover;		   }
		#contactus{
					text-align: center;
					background-color: #708090;}
					form{align-content: ;
					     text-align-last: ;
					     alignment-baseline: ;}
	</style>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<nav class="navbar navbar-inverse">
		<div class="navbar-header"><a href="navbar-brand">SO ACADEMY</a></div>


			<div class="container-fluid">
				<ul class="navbar-nav">
					<li ><a href="index.php">HOME</a></li><li><a href="#aboutus">ABOUT US</a></li>
					<li><a href="#contactus">CONTACT US</a></li>
					<li class="active"><a href="student.php">STUDENT PORTAL</a></li>
					<li><a href="studentgrades.php">STUDENT GRADES</a></li>
				</ul>
			</div>
	</nav>
	</head>
<body>
 
 <h4>STUDENT DATA</h4>
	
	<br>
	<p></p>
	<form action="studentgrades.php" method="POST">
		<fieldset>
			<label for="Sname"> STUDENT NAME</label>
			<input type="text" name="sname" required=""><br>
			<BR>
			<label for="math">MATH</label>
			<input type="number" name="math" maxlength="3" required=""><br>
			<BR>
				<label for="eng">ENGLISH</label>
			<input type="number" name="eng" maxlength="3" required=""><br>
			<BR>
				<label for="chem">CHEMISTRY</label>
			<input type="number" name="chem" maxlength="3" required=""><br>
			<BR>
			<label for>PHYSICS</label>
			<input type="number" name="phyc" maxlength="3" required=""><br>
			<BR>
				<label for="bio">BIOLOGY</label>
			<input type="number" name="bio" maxlength="3" required="">	<br>
			<BR>
				<label for="comp">COMPUTER STUDIES</label>
			<input type="number" name="comp" maxlength="3" required=""><br>
			<BR>
				<label for="hist">HISTORY & GOVERNMENT</label>
			<input type="number" name="hist" maxlength="3" required=""><br>
			<BR>
			<button type="submit">SUBMIT</button>
			
		</fieldset>
	</form>
<?php

	



	





 ?>
 <footer id="contactus">
		copyright &copy;SolAcademy<br>
		Tel:0706577037, 0793820873<br>
		Email:solacademy21@gmail.com<br>
		P.O.BOX 141-01000<br>
		&reg;SolAcademy<br>	
	</footer>

</body>
</html>