<!DOCTYPE html>
<html>
<head>
    <title>Answer 14a</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br><br>
  </div>
</body>
</html>

<?php
include_once 'connection.php';

$name = $_POST['name1'];

//check if form submitted
if (isset($_POST['submit']))
{
    $img_name = $_FILES['glryimage']['name'];

    //upload file
    if ($img_name!='')
    {
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $allowed = ['png', 'gif', 'jpg', 'jpeg'];
    
        //check if it is valid image type
        if (in_array($ext, $allowed))
        {
            // read image data into a variable for inserting
            $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));
                    
            // insert image into mysql database
            $sql = "UPDATE data_table SET Image = '$img_data', Picture = '$img_name' WHERE Name = '$name'";
            mysqli_query($con, $sql) or die("Error " . mysqli_error($con));
            
            echo "Image of " .$name. " has been successfully updated!"
        }
        else
        {
            echo .$name. " does not exist!"
        }
    }
    else
        header("Location: Q14.html");
}
?>