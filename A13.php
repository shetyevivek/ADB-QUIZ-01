<!DOCTYPE html>
<html>
<head>
	<title>Answer 13</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br><br>
  </div>
</body>
</html>

<?php
include_once 'connection.php';

$author = $_POST['author'];
$nsize1 = $_POST['nsize1'];
$nsize2 = $_POST['nsize2'];

// Retrieve the data
$sql = "SELECT * FROM data_table WHERE Author = '$author' AND Nsize BETWEEN $nsize1 AND $nsize2";
$result = mysqli_query($con, $sql) or die('Error ' . mysqli_error($con));

echo "<table border='1'>
<tr>
<th style='padding:15px;'>Name</th>
<th style='padding:15px;'>Image</th>
<th style='padding:15px;'>Keywords</th>
</tr>";

while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    if($row['Name'] == NULL)
    {
        echo "<td style='padding:15px;'>No data available</td>";
    }
    else
    {
        echo "<td style='padding:15px;'>" . $row['Name'] . "</td>";
    }

    if($row['Image'] == NULL)
    {
        echo "<td style='padding:15px;'>No data available</td>";
    }
    else
    {
        echo "<td style='padding:15px;'>" . '<img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/>' . "</td>";
    }

    if($row['Keywords'] == NULL)
    {
        echo "<td style='padding:15px;'>No data available</td>";
    }
    else
    {
        echo "<td style='padding:15px;'>" . $row['Keywords'] . "</td>";
    }

    echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>