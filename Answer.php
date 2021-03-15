<?php
include_once 'dbconnect.php';

$name = $_POST['txtName'];

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
            $sql = "UPDATE people SET Image = '$img_data' WHERE Name = '$name'";
            mysqli_query($con, $sql) or die("Error " . mysqli_error($con));
            header("Location: Upload_Image.php?st=success");
        }
        else
        {
            header("Location: Upload_Image.php?st=error");
        }
    }
    else
        header("Location: Upload_Image.php");
}
?>