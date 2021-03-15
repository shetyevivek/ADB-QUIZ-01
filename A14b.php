<!DOCTYPE html>
<html>
<head>
	<title>Answer 14b</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br><br>
  </div>
</body>
</html>

<?php
include_once 'connection.php';

$name = $_POST['name2'];
$author = $_POST['author'];

// Retrieve the data
$sql = "UPDATE data_table SET Author = '$author' WHERE Name = '$name'";
$result = mysqli_query($con, $sql) or die('Error ' . mysqli_error($con));

if(mysqli_affected_rows($con))
{
    echo "Author of " .$name. " have been successfully updated!";
}
else
{
    echo $name. " does not exists!";
}

mysqli_close($con);

?>