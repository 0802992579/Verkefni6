<head>
		<meta charset="utf-8">
<		title>Titill vefsíðu</title>
</head>
<body>
<?php 
	include "dbcon.php";
	include "query.php";
 ?>
<table border="1">	
<tr>
	<th>Player</th>
	<th>Score</th>
	</tr>
	<?php 
		# birtir töflu með player og score
		foreach ($myndir as $entry) {
			echo '<tr><td>'.$entry[0].'</td><td>'.$entry[1].'</td></tr>';
		}
	 ?>
</table>
</body>
</html>