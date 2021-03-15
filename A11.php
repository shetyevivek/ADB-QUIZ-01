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
<th style='padding:15px;'>Picture</th>
<th style='padding:15px;'>Image</th>
</tr>";

while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    if($row['Picture'] == NULL)
    {
        echo "<td style='padding:15px;'>NULL</td>";
    }
    else
    {
        echo "<td style='padding:15px;'>" . $row['Picture'] . "</td>";
    }

    if($row['Image'] == NULL)
    {
        echo "<td style='padding:15px;'>NULL</td>";
    }
    else
    {
        echo "<td style='padding:15px;'>" . '<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/>' . "</td>";
    }

    echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>