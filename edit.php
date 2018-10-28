<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
	$impact = mysqli_real_escape_string($mysqli, $_POST['impact']);
	$successmetrics = mysqli_real_escape_string($mysqli, $_POST['successmetrics']);
	$poster = mysqli_real_escape_string($mysqli, $_FILES['poster']['tmp_name']);
	$file_name = $_FILES['poster']['name'];
	
	// checking empty fields
	if(empty($description) || empty($impact) || empty($successmetrics)) {
				
        if(empty($description)) {
            echo "<font color='red'>Idea description field is empty.</font><br/>";
        }
        
        if(empty($impact)) {
            echo "<font color='red'>Impact field is empty.</font><br/>";
        }
        
        if(empty($successmetrics)) {
            echo "<font color='red'>Success metrics field is empty.</font><br/>";
        }
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		if(empty($poster)){
			$result = mysqli_query($mysqli, "UPDATE ideas SET description='$description',impact='$impact',successmetrics='$successmetrics' WHERE id=$id");
		} else{
		//insert data to database	
		$result = mysqli_query($mysqli, "UPDATE ideas SET description='$description',impact='$impact',successmetrics='$successmetrics',poster='$file_name' WHERE id=$id");
		}
		 move_uploaded_file($poster,"posters/".$file_name);
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM ideas WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$description = $res['description'];
	$impact = $res['impact'];
	$successmetrics = $res['successmetrics'];
	$poster = $res['poster'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body style="background-image:url(big_idea_env3.jpg)">
	<a href="index.php">View Ideas</a>
    <br/><br/><br/><br/><br/><br/>
	
	<form name="form1" method="post" action="edit.php" enctype="multipart/form-data">
		<table width="500" height="300" border="0" align="center">
            <tr> 
                <td>Idea Description*</td>
                <td><input type="textarea" name="description" value="<?php echo $description;?>" style="width: 300px;height: 60px;" rows="10"></td>
            </tr>
            <tr> 
                <td>Impact*</td>
                <td><input type="text" name="impact" value="<?php echo $impact;?>" style="width: 300px;height: 60px;"></td>
            </tr>
            <tr> 
                <td>Success Metrics*</td>
                <td><input type="text" name="successmetrics" value="<?php echo $successmetrics;?>" style="width: 300px;height: 60px;"></td>
            </tr>
            <tr> 
                <td>Poster*</td>
                <td><input type="file" name="poster" value="<?php echo $poster;?>" accept="image/*" width="300" height="100"></td>
            </tr>
            <tr> 
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" style="width: 300px;height: 60px;background-color:#00EE00"></td>
            </tr>
        </table>
	</form>
</body>
</html>
