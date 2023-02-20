<?php
  include "insrt.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" type="text/css" href="fontswesome/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
  </head>
  <body>

    <div class="container bg-light">
      <ul class="nav nav-tabs mt-4" role="tablist">
        <li class="nav-item">
          <a class="nav-link bg-secondary text-white btn-sm active" data-toggle="tab" href="#menu1" style="color:#000066;">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-success text-white btn-sm" data-toggle="modal" data-target="#Student_AddModal" data-toggle="tab" href="#home" style="color:#000066;">Add</a>
        </li>
      </ul>
      <div class="tab-content">
        <div id="home" class="container-fluid">
          <div class="modal fade" id="Student_AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                  <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="" method="post" id="user_form">
                    <div class="form-group mt-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" id="data_fname" class="data_fname" placeholder= "First name" name="data_fname" required="true">
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" id="data_lname" class="data_lname" placeholder= "Last name" name="data_lname" >
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="data_email" class="data_email" placeholder= "Email" name="data_email" required="true">
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" id="data_address" class="data_address" placeholder= "Address" name="data_address">
                    </div>
                    <div class="float-right">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-success" id="btn_save" name="btn_save" type="submit" value="Save" /> Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="menu1" class="container-fluid tab-pane active"><br>
          <div class="container-fluid"><br>
            <div class="col-lg-12" id="form_table">
              <input type="text" class="p-1 mb-2 float-right" id="myInput" onkeyup="myFunction()" placeholder="Search..." title="Type in a name">
              
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                
                <tbody class="studentdata" id="myTable">
                  <!-- <?php
              
                    $res=mysqli_query($con,"select * from firsttest");
                    while($row=mysqli_fetch_array($res))
                    {
                      echo "<tr>";
                      echo "<td class='stud_id'>" . $row["data_id"] . "</td>";
                      echo "<td>" . $row["data_fname"] . "</td>";
                      echo "<td>" . $row["data_lname"] . "</td>";
                      echo "<td>" . $row["data_email"] . "</td>";
                      echo "<td>" . $row["data_address"] . "</td>";
                      echo "<td class='text-center'>"; ?> <a href="edit.php? data_id=<?php echo $row["data_id"]; ?>"><button class="btn btn-success"><i class="fas fa-pencil-alt text-white"></i></button></a> <?php echo"</td>";
                      echo "<td class='text-center'>"; ?> <a href="delete.php? data_id=<?php echo $row["data_id"]; ?>" class="delete"><button class="btn btn-success"><i class="fa fa-trash-alt text-white"></i></button></a> <?php echo"</td>";
                      echo "<td class='text-center'>"; ?> <input data_id="<?php echo $row["data_id"]; ?>" type="button" value="View" class="btn btn-success view_btn"> </input> <?php echo"</td>";
                      echo "</tr>";
                    }
                  ?> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div  id="dataModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">  
              <h4 class="modal-title">View Data</h4> 
              <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times text-success"></i></button>
            </div> 
            <div class="modal-body" id="view_detail">  
            </div> 
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div> 
      </div>
         
    </div> 

  </body>
  
  <script>
        $(document).ready(function () {
            getdata();
        });

        function getdata()
        {
            $.ajax({
                type: "GET",
                url: "fetch.php",
                success: function (response) {
                    // console.log(response);
                    $.each(response, function (key, value) { 
                        // console.log(value['data_fname']);
                        $('.studentdata').append('<tr>'+
                                '<td class="stud_id">'+value['data_id']+'</td>\
                                <td>'+value['data_fname']+'</td>\
                                <td>'+value['data_lname']+'</td>\
                                <td>'+value['data_email']+'</td>\
                                <td>'+value['data_address']+'</td>\
                                <td>\
                                    <a href="view.php" class="badge btn-info viewbtn">VIEW</a>\
                                    <a href="edit.php" class="badge btn-primary edit_btn">EDIT</a>\
                                    <a href="delete.php" class="badge btn-danger">Delete</a>\
                                </td>\
                            </tr>');
                    });
                }
            });
        }
    </script>

  <script>
    $(document).ready(function(){
      getdata();
      $('#btn_save').click(function(){
	      var data = $('#user_form').serialize()+'&btn_save=btn_save';
	      $.ajax({
    	   	url:'insrt.php',
  	    	type:'post',
	  	    data:data,
      		success:function(response){
            $('#Student_AddModal').modal('hide');
            $('#user_form')[0].reset();
                            getdata();
                            $('.data_fname').val("");
                            $('.data_lname').val("");
                            $('.data_email').val("");
                            $('.data_address').val("");
		      }
	      });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $(".delete").click(function(){
        var data_id = $(this).parents("tr").attr("data_id");
        if(confirm('Are you sure to delete this record ?')) {
          $.ajax({
            url: 'delete.php',
            type: 'GET',
            data: {data_id: data_id},
            success: function(response) {  
            }
          });
        }
        else{
          return false;
        }
      });
    });     
  </script>

  <script>  
    $(document).ready(function(){
      $('.view_btn').click(function(e){
        e.preventDefault();
        var stud_id = $(this).closest('tr').find('.stud_id').text();
        $.ajax({
          type : "POST", 
          url : "view.php", 
          data:{
            'checking_viewbtn' : true,
            'student_id' : stud_id,
          },  
          success:function(response){  
            //  console.log(response);
            $('#view_detail').html(response);  
            $('#dataModal').modal("show");  
          }  
        });  
      });
    });  
  </script>

  <script>
    $(document).ready(function() {
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text()
          .toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>

</html>