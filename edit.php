<?php

    include "connection.php";

    $data_id = $_GET['data_id'];
    $res = mysqli_query($con,"Select * from firsttest WHERE data_id = $data_id");

    while($row=mysqli_fetch_array($res))
    {
        $data_fname = $row['data_fname'];
        $data_lname = $row['data_lname'];
        $data_email = $row['data_email'];
        $data_address = $row['data_address'];
    }

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!------------- Bootstarp Links ---------------> 
        <link rel="stylesheet" type="text/css" href="libraries1/bootstrap.min_3.css">
        <script type="text/javascript" src="libraries1/jquery.min.js"></script>
        <script type="text/javascript" src="libraries1/bootstrap.min.js"></script>
        <script type="text/javascript" src="libraries1/popper.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form action=""  method="post">
                <div class="form-group mt-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" id="data_fname" value="<?php echo "$data_fname"; ?>" placeholder= "First name" name="data_fname">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" id="data_lname" value="<?php echo "$data_lname"; ?>" placeholder= "Last name" name="data_lname">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="data_email" value="<?php echo "$data_email"; ?>" placeholder= "Email" name="data_email">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" id="data_address" value="<?php echo "$data_address"; ?>" placeholder= "Address" name="data_address">
                </div>
                <button type="submit" name="update" id="button" value="Update Details" class="btn btn-success">Update</button>
            </form>
        </div>
    </body>
</html>

<?php

    if(isset ($_POST['update']))
    {

        mysqli_query($con,"UPDATE firsttest SET data_fname='$_POST[data_fname]', data_lname='$_POST[data_lname]', data_email='$_POST[data_email]', data_address='$_POST[data_address]' WHERE data_id= $data_id ");
 
        ?>
            <script>
                window.location="form.php";
            </script>
        <?php
    }
?>