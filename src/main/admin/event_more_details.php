<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
<<<<<<< HEAD
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

=======
>>>>>>> 4f687d3 (Add files)
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
  .con1{
        display: grid;
        place-items: center;
    }
</style>
<body>

  <!-- to fetch data -->
    <?php
<<<<<<< HEAD
<<<<<<< HEAD
    include '../connection/connect.php';
=======
    include './connection/connect.php';
>>>>>>> db0b766 (done)
=======
    include '../connection/connect.php';
>>>>>>> 20ec2bd (seperate folders)
    if(isset($_GET['event_id'])){
        $event_id=$_GET['event_id'];
        $get_event="select * from `EVENT` where event_id=$event_id ";
        $result=mysqli_query($con,$get_event);
        $row=mysqli_fetch_assoc($result);
<<<<<<< HEAD
        $user_name=$row['user_name'];
=======
>>>>>>> 4f687d3 (Add files)
        $event_id=$row['event_id'];
        $event_name=$row['event_name'];
        $event_start_time=$row['event_start_time'];
        $event_end_time=$row['event_end_time'];
        $students_total_number=$row['students_total_number'];
        $ar_name=$row['ar_name'];
        $organization_institute	=$row['organization_institute'];
        $request_date_time=$row['request_date_time'];
        $event_description=$row['event_description'];
<<<<<<< HEAD
        //get user name by username kar me sangto
        // $get_user_name="select * from `USER` where user_name='$user_name'";
        // $result1=mysqli_query($con,$get_user_name);
        // $row=mysqli_fetch_assoc($result1);
        // $name=$row['user_name'];

=======
>>>>>>> 4f687d3 (Add files)
    }
    ?>
    <!-- to approve event  -->
    <?php
if(isset($_POST['approve_event_id'])){
    $event_id=$_POST['event_id'];
<<<<<<< HEAD
    $update_event_status="update `EVENT` set status_value='approved',event_status='Open' where event_id=$event_id";
    $result=mysqli_query($con,$update_event_status);
    $info_to_send_mail="select * from `EVENT` where event_id=$event_id ";
        $result=mysqli_query($con,$info_to_send_mail);
        $row=mysqli_fetch_assoc($result);
        $email=$row['user_name'];
        $status_value=$row['status_value'];
        $event_name=$row['event_name'];
        $event_date=$row['event_date'];
        $query_for_name="select * from `USER` where user_name='$email' ";
        $result1=mysqli_query($con,$query_for_name);
        $row=mysqli_fetch_assoc($result1);
        $name=$row['user_full_name'];
    
    if($result){
       //echo "<script>sendEmail()</script>";
       //header("location:./admin_home.php");
header("location:./email_of_approved_event.php?event_id=$event_id");
=======
    $update_event_status="update `EVENT` set status_value='approved' where event_id=$event_id";
    $result=mysqli_query($con,$update_event_status);
    if($result){
       header("location:./admin_home.php");
>>>>>>> 4f687d3 (Add files)
    }
    else{
        die(mysqli_error($con));
    }
}
?>
<<<<<<< HEAD


  
=======
>>>>>>> 4f687d3 (Add files)
<!-- event not approved -->
<?php
<<<<<<< HEAD
<<<<<<< HEAD
include '../connection/connect.php';
=======
include './connection/connect.php';
>>>>>>> db0b766 (done)
=======
include '../connection/connect.php';
>>>>>>> 20ec2bd (seperate folders)
if(isset($_POST["reason"])){
  $status_reason=$_POST['status_reason'];
  // if( isset($_GET['event_not_approved_id'])){
  $event_id=$_POST['event_id'];
<<<<<<< HEAD
  $update_event_reason="update `EVENT` set status_reason='$status_reason',status_value='not approved',event_status='Null' where event_id=$event_id ";

  $result=mysqli_query($con,$update_event_reason);
      if($result){
        //echo "<a href='./email_of_event.php?event_id=$event_id'></a>";
         header("location:./email_of_not_approved_events.php?event_id=$event_id");
=======
  $update_event_reason="update `EVENT` set status_reason='$status_reason',status_value='not approved' where event_id=$event_id ";
  $result=mysqli_query($con,$update_event_reason);
      if($result){
         header("location:./admin_home.php");
>>>>>>> 4f687d3 (Add files)
      }
      else{
          die(mysqli_error($con));
      }
}

?>
<<<<<<< HEAD

<!-- <script>
  var event_id = $('event_id').val();
$(document).ready(function() {
  $('#approve_event_id').on('click', function() {
    // Perform AJAX request to update data
    $.ajax({
      url: 'email_of_approved_event.php',
      method: 'POST',
      data: { event_id:event_id },
      success: function(response) {
        // Display success message or handle the response as needed
        console.log('Data updated successfully!');
      },
      error: function(error) {
        // Display error message or handle the error as needed
        console.log('Error updating data: ' + error);
      }
    });

    // Perform AJAX request to send email
    $.ajax({
      url: 'event_more_details.php',
      method: 'POST',
      data: { event_id:event_id},
      success: function(response) {
        // Display success message or handle the response as needed
        console.log('Email sent successfully!');
      },
      error: function(error) {
        // Display error message or handle the error as needed
        console.log('Error sending email: ' + error);
      }
    });
    //window.location.href = './admin/admin_shome.php';

  });
});
</script> -->




=======
>>>>>>> 4f687d3 (Add files)
<div class='container-fluid mt-5'>
<<<<<<< HEAD
  <div class="row">
    <div class="col-md-10 col-lg-10 m-auto">
    <?php
                include '../user/navigation.html';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  <div class="row">
    <div class="col-md-10 col-lg-10 m-auto">
    <?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                include './navigation.html';
=======
                include './navigation.php';
>>>>>>> 58a66d1 (month report)
=======
                include './navigation.html';
>>>>>>> c75f32a (room occupacy report added)
=======
  <div class="row">
    <div class="col-md-10 col-lg-10 m-auto">
    <?php
<<<<<<< HEAD
                include './navigation.php';
>>>>>>> dba010a (room occupacy report added)
=======
                include './navigation.html';
>>>>>>> c8b61ed (events detail)
=======
                include './navigation.html';
>>>>>>> ec9b477 (room occupacy report added)
=======
  <div class="row">
    <div class="col-md-10 col-lg-10 m-auto">
    <?php
<<<<<<< HEAD
                include './navigation.php';
>>>>>>> b5dc987 (room occupacy report added)
=======
                include './navigation.html';
>>>>>>> c42b176 (events detail)
=======
=======
>>>>>>> daf825c (room occupacy report added)
                include './navigation.html';
=======
                include './navigation.php';
>>>>>>> 4dd1ec8 (month report)
<<<<<<< HEAD
>>>>>>> 9123d1a (month report)
=======
=======
                include './navigation.html';
>>>>>>> 3f0a459 (room occupacy report added)
>>>>>>> daf825c (room occupacy report added)
>>>>>>> db0b766 (done)
=======
                include '../user/navigation.html';
>>>>>>> 20ec2bd (seperate folders)
                ?>
    <div class="row">
        <div class="col-md-6 col-lg-7">
          <div class="con1 my-5">
            <table class='table table-bordered ' >
              <thread class="bg-info">
                <tr>
                  <th class="text-center">Title</th>
                  <th class="text-center">Description</th>
                </tr>
              </thread>
              <tbody class="bg-primary text-light text-center">
                <tr>
                  <td>Event id </td>
                  <td><?php echo $event_id?></td>
                </tr>
                <tr>
                  <td>Event Name</td>
                  <td><?php echo $event_name?></td>
                </tr>
                <tr>
                  <td>Event Description</td>
                  <td><?php echo $event_description?></td>
                </tr>
                <tr>
                  <td>Event Start Time</td>
                  <td><?php echo $event_start_time?></td>
                </tr>
                <tr>
                  <td>Event End Time</td>
                  <td><?php echo $event_end_time?></td>
                </tr>
                <tr>
                  <td>Number Of Students Paricipating Event</td>
                  <td class="mt-2"><?php echo $students_total_number?></td>
                </tr>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c75f32a (room occupacy report added)
=======
>>>>>>> c8b61ed (events detail)
=======
>>>>>>> ec9b477 (room occupacy report added)
=======
>>>>>>> c42b176 (events detail)
=======
>>>>>>> 9123d1a (month report)
=======
=======
>>>>>>> 3f0a459 (room occupacy report added)
>>>>>>> daf825c (room occupacy report added)
>>>>>>> db0b766 (done)
=======
>>>>>>> 20ec2bd (seperate folders)
                <tr>
                  <td>Event Place</td>
                  <td class="mt-2"><?php echo $ar_name?></td>
                </tr>
                <tr>
                  <td>Event Organizer</td>
                  <td class="mt-2"><?php echo $organization_institute?></td>
                </tr>
<<<<<<< HEAD
<<<<<<< HEAD
              </tbody>
            </table>
            </div>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 58a66d1 (month report)
=======
>>>>>>> c75f32a (room occupacy report added)
=======
>>>>>>> c8b61ed (events detail)
=======
>>>>>>> ec9b477 (room occupacy report added)
=======
>>>>>>> c42b176 (events detail)
=======
=======
>>>>>>> 4dd1ec8 (month report)
>>>>>>> 9123d1a (month report)
=======
=======
>>>>>>> 4dd1ec8 (month report)
=======
>>>>>>> 3f0a459 (room occupacy report added)
>>>>>>> daf825c (room occupacy report added)
=======
>>>>>>> 20ec2bd (seperate folders)
              </tbody>
            </table>
            </div>
=======
    <div class="row">
        <div class="col-md-6 col-lg-7">
>>>>>>> 7602cd1 (month report)
=======
              </tbody>
            </table>
            </div>
>>>>>>> dba010a (room occupacy report added)
=======
    <div class="row">
        <div class="col-md-6 col-lg-7">
>>>>>>> 9278f26 (month report)
=======
              </tbody>
            </table>
            </div>
>>>>>>> b5dc987 (room occupacy report added)
>>>>>>> db0b766 (done)
            <form name="approvalForm" action='event_more_details.php' method='POST' >
                <div class='form-outline w-50 m-auto my-2'>
<<<<<<< HEAD
                    <input type='hidden' id='event_id' name='event_id' readonly class='form-control bg-primary text-light ' value='<?php echo $event_id?>'>
                </div>
                <div class='text-center mt-3'>
                    <input type='submit' id='approve_event_id' name='approve_event_id' value='Approve' 
                    class='btn btn-success px-3 mb-3' >
                    <!-- onclick="sendEmail()" -->
=======
                    <input type='hidden' name='event_id' readonly class='form-control bg-primary text-light ' value='<?php echo $event_id?>'>
                </div>
                <div class='text-center mt-3'>
                    <input type='submit' id='approve_event_id' name='approve_event_id' value='Approve' class='btn btn-success px-3 mb-3'>
>>>>>>> 4f687d3 (Add files)
                    <a  style='text-decoration:none'  type='button' class='text-light' data-toggle='modal' data-target='#exampleModalCenter'> 
                    <input type='submit' id='not_approve_event_id' name='not_approve_event_id' value='Not Approve' class='btn btn-danger px-3 mb-3'></a>
                </div>
            </form>
        </div>
        <div class="col-md-4 col-lg-5">
            <img src="https://tse2.mm.bing.net/th?id=OIP.Gde1iAYuuGbikzWG-R6OzgHaE7&pid=Api&P=0"
             alt="image" style="height:100%;width:90%">
        </div>
    </div> 
    </div>
  </div>
</div>
<<<<<<< HEAD

=======
<!-- Modal -->
>>>>>>> 4f687d3 (Add files)
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <form method='POST' action='event_more_details.php'>
      <div class="modal-body">
      <input type='hidden' name='event_id' readonly class='form-control bg-primary text-light ' value='<?php echo $event_id?>'>
      <label for="ar_name " class="form-label fw-bold">Reason For Not Approving Event Request</label>
<<<<<<< HEAD
      <textarea name='status_reason'  rows="4" cols="60" required></textarea>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="reason" >
        OK</button>
=======
      <input type="text" class="w-100" name='status_reason' autocomplete="off" placeholder='eg......' required>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="reason">
        OK</button>
        <!-- <a  style='text-decoration:none' href='event_more_details.php?event_not_approved_id=<?php echo $event_id?>' class='text-light text-decoration-none' > <a>-->
>>>>>>> 4f687d3 (Add files)
       
      </div>
      
      </div>
    </div>
    </form>
  </div>
</div> 
</body>
<<<<<<< HEAD
</html>
=======
</html>

>>>>>>> 4f687d3 (Add files)
