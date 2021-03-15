<!DOCTYPE html>
<html>
<head>
	<title>Answer 11</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br>
  </div>
</body>
</html>

<?php
include_once 'connection.php';

// Retrieve the data
$sql = "SELECT * FROM data_table";
$result = mysqli_query($con, $sql) or die('Error ' . mysqli_error($con));

echo "<table border='1'>
<tr>
<th>Picture</th>
<th>Image</th>
</tr>";

while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    if($row['Picture'] == NULL)
    {
        echo "<td>NULL</td>";
    }
    else
    {
        echo "<td>" . $row['Picture'] . "</td>";
    }

    if($row['Image'] == NULL)
    {
        echo "<td>NULL</td>";
    }
    else
    {
        echo "<td>" . '<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/>' . "</td>";
    }

    echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>