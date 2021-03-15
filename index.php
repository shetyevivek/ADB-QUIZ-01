<!DOCTYPE html>
<html>
<head>
    <title>Index.php</title>
</head>
<body>
<br/>
<div>
    <h2>Name : Vivek Vishwanath Shetye<br>Student ID : 1001821620</h2><br><br>
</div>
<div class="container">
    <div class="col-xs-8 col-xs-offset-2 well" style="background:none;">
    <form action="A7.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="Name">Enter a name:</label>
            <input type="text" name="txtName">
        </p>
        <legend>Please Choose Image to Update</legend>
        <div class="form-group">
            <input type="file" name="glryimage" accept="image/*" />
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Upload Image" class="btn btn-danger"/>
        </div><br>

        <?php if(isset($_GET['st'])) { ?>
            <div class="alert alert-danger text-center">
            <?php if ($_GET['st'] == 'success') {
                    echo "Image uploaded successfully!!!";
                }
                else
                {
                    echo 'Error uploading image...';
                } ?>
            </div>
        <?php } ?>
        
    </form>
    </div>
</div>
</body>
</html>