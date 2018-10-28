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

<body style="background-image:url(big_idea_env3.jpg)">
<a href="add.html">Add New Idea</a><br/>
    <header> 
	<h2 align="center">Idea Repository</h2> </header>
	<table width='95%' border=1 align=center>

	<tr bgcolor=white>
		<td align="center">ID Number</td>
		<td align="center">Description</td>
		<td align="center">Impact</td>
		<td align="center">Sucess Metrics</td>
		<td align="center">Poster</td>
		<td align="center">Creation Time</td>
		<td align="center">Actions</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['description']."</td>";
		echo "<td>".$res['impact']."</td>";
		echo "<td>".$res['successmetrics']."</td>";	
		echo "<td><a href=".$res['poster']." download>".$res['poster']."</a></td>";
		echo "<td>".$res['creationtime']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>
