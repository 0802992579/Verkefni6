﻿<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Skrá inn sýnidæmi</title>
</head>
<body>
	<!-- Með formi á notandi að geta sent gildi úr input reitum til insert.php
	     insert.php mun svo sjá um að koma þeim áleiðis í gagnagrunninn Highscore (highscore tafla með player og score dálkum) 
	 -->
	<form action="insert.php" method="post">
		<label>Player: </label>
		<input type="text" name="image_name" required ><br>
		
		<label>Score: </label>
		<input type="text" name="image_text" required ><br>

		<input type="submit">
	</form>
</body>
</html>