<!DOCTYPE html>
<html>

<head>
    <title>Upload Image</title>
</head>

<body>
    <div>
        <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2>
        <br>
        <br>
    </div>
    <div>
        <div>
            <form action="Answer.php" method="post" enctype="multipart/form-data">
                <p>
                    <label for="Name">Enter a name:</label>
                    <input type="text" name="txtName">
                </p>
                <legend>Please Choose Image to Update</legend>
                <div class="form-group">
                    <input type="file" name="glryimage" accept="image/*" />
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Upload Image" class="btn btn-danger" />
                </div>
                <br>
                <?php if(isset($_GET['st'])) { ?>
                    <div>
                        <?php
                        if ($_GET['st'] == 'success') {
                        echo "Image uploaded successfully!!!";
                    }
                    else
                    {
                        echo 'Error uploading image...';
                    }
                    ?>
                    </div>
                    <?php } ?>
            </form>
        </div>
    </div>
</body>

</html>