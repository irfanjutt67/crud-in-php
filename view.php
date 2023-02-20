<?php

    include "connection.php";
                                         
    if(isset($_POST['checking_viewbtn']))
    {
        $s_id = $_POST['student_id'];

        $query = "SELECT * FROM firsttest where data_id = '$s_id' ";
        $query_run = mysqli_query($con,$query);

        if(mysqli_num_rows($query_run) > 0 )
        {
            foreach($query_run as $row)
            {
                echo $return ='
                  <h5> ID : '.$row['data_id'].' </h5>
                  <h5> First Name : '.$row['data_fname'].' </h5>
                  <h5> Last Name : '.$row['data_lname'].' </h5>
                  <h5> Email : '.$row['data_email'].' </h5>
                  <h5> Address : '.$row['data_address'].' </h5>
                ';
            }
        }
        else{
             echo $return = "No Record Found";
        }
    }
       
?>