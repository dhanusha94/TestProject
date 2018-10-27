<html>
<head>
    <title>Add New Idea</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $description = $_POST['description'];
    $impact = $_POST['impact'];
    $successmetrics = $_POST['successmetrics'];
    $poster = $_POST['poster'];
        
    // checking empty fields
    if(empty($description) || empty($impact) || empty($successmetrics) || empty($poster)) {                
        if(empty($description)) {
            echo "<font color='red'>Idea description field is empty.</font><br/>";
        }
        
        if(empty($impact)) {
            echo "<font color='red'>Impact field is empty.</font><br/>";
        }
        
        if(empty($successmetrics)) {
            echo "<font color='red'>Success metrics field is empty.</font><br/>";
        }
        
        if(empty($poster)) {
            echo "<font color='red'>Poster field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO ideas(description,impact,successmetrics,poster,creationtime) VALUES('$name','$age','$email',time())");
        
        //display success message
        echo "<font color='green'>Idea added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>
