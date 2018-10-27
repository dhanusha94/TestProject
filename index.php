<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM ideas ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>View Ideas</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Idea Desciption</td>
		<td>Impact</td>
		<td>Success Metrics</td>
		<td>Poster</td>
		<td>Creation Time</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['description']."</td>";
		echo "<td>".$res['impact']."</td>";
		echo "<td>".$res['successmetrics']."</td>";	
		echo "<td>".$res['poster']."</td>";
		echo "<td>".$res['creationtime']."</td>";		
	}
	?>
	</table>
</body>
</html>
