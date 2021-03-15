<?php
include_once 'dbconnect.php';

$name = $_POST['txtName'];

//check if form submitted
if (isset($_POST['submit']))
{
    $img_name = $_FILES['glryimage']['name'];

    echo '$img_name';
    echo "<br><br>";

    //upload file
    if ($img_name!='')
    {
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $allowed = ['png', 'gif', 'jpg', 'jpeg'];

        echo '$ext';
        echo "<br><br>";
    
        //check if it is valid image type
        if (in_array($ext, $allowed))
        {
            $created = @date('Y-m-d H:i:s');

            // read image data into a variable for inserting
            $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));
        }
        else
        {
            header("Location: Q7.php?st=error");
        }
    }
    else
        header("Location: Q7.php");
}
?>