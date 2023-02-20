<?php
       
    include "connection.php";
    
    if(isset($_POST['btn_save']))
    {
        $data_fname = mysqli_real_escape_string($con,$_POST['data_fname']);
        $data_lname = $_POST['data_lname']; 
        $data_email = $_POST['data_email'];
        $data_address = $_POST['data_address'];
        $sql = "INSERT INTO `firsttest`(`data_fname`, `data_lname`, `data_email`, `data_address`) VALUES ('$data_fname','$data_lname','$data_email','$data_address')";
        $query = mysqli_query($con,$sql);
        if($query)
        {
	        echo "Data Saved Successfully";
        }
        else {
        	echo "Failed to save data";
        }
    }

?>