<?php
include ('../connection/connect.php');
if(isset($_GET['event_id'])){
    $event_id=$_GET['event_id'];
    $getting_event_info="SELECT * from `event` where event_id='$event_id'";
    $result=mysqli_query($con,$getting_event_info);
    $row=mysqli_fetch_assoc($result);
    $event_end_time=$row['event_end_time'];
}
if(isset($_POST['close_event'])){
    $event_id=$_POST['close_event_id'];
    $event_purpose=$_POST['event_purpose'];
    $event_mode=$_POST['event_mode'];
    $event_link=$_POST['link_of_event'];
    $event_activities=$_POST['event_activities'];
    $event_impact=$_POST['event_impact'];
    $male_students=$_POST['no_of_male_stu_attending'];
    $female_students=$_POST['no_of_female_stu_attending'];
    $faculty=$_POST['no_of_faculty_attending'];
    if (isset($_FILES['event_pic_first'])) {
        $eventPicFirst = $_FILES['event_pic_first'];
        $pic1_name=$eventPicFirst['name'];
        $pic1_path=$eventPicFirst['tmp_name'];
        $destination_first='../event_images/'.$pic1_name; 
        move_uploaded_file($pic1_path,$destination_first);
      } 
      if (isset($_FILES['event_pic_second'])) {
        $eventPicSecond = $_FILES['event_pic_second'];
        $pic2_name=$eventPicSecond['name'];
        $pic2_path=$eventPicSecond['tmp_name'];
        $destination_second='../event_images/'.$pic2_name;
        move_uploaded_file($pic2_path,$destination_second);
      }
      if($event_start_time==$event_end_time) {
        echo "<script>alert('Event Start Date and end date can't be same')</script>";

      }
      $close_event_query="INSERT into `CLOSE_EVENT`(close_event_mode,close_event_link,close_event_purpose,
      close_event_activities,close_event_impact,male_students_count,female_students_count,faculty_members_count,event_pic1,	event_pic2,event_id)
      values ('$event_mode','$event_link',
     '$event_purpose','$event_activities','$event_impact','$male_students','$female_students','$faculty',
      '$destination_first','$destination_second','$event_id')";
      $result_of_closed_event=mysqli_query($con,$close_event_query);
      $update_event_status="update `EVENT` set event_status='Closed' where event_id='$event_id'";
      $result_of_update=mysqli_query($con,$update_event_status);
      if($result_of_closed_event && $result_of_update){
        header('location:../user/home.php');
      }
      else{
        die(mysqli_error($con));
      }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="../../css/booking.css">
    <title>close event </title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <?php
         include("../config/session.php");
         require "../connection/connect.php";
         require_once("../loader.html"); 
     ?>
    <main id="main">

        <?php
     include("../user/navigation.html");
    ?>


<script>
    function changeMode(){
        var status=document.getElementById('event_mode');
        if(status.value=='online'){
            document.getElementById('event_link').style.visibility='visible';
        }
        else{
            document.getElementById('event_link').style.visibility='hidden';
        }
    }
</script>

  <div class="container mt-5 mb-5 shadow p-3 mb-5 bg-body" id="main_body" style="border-radius: 20px">
            <!-- Container starting -->
            <p class="fs-3 text-center fw-bold">
                        Close your event by filling form
            </p>
            <form action="close_event_form.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 col-md-6 m-auto fw-bold mt-3">
                    <!-- <p>Hello</p> -->
                    
                            
                            <!-- <div class="form-outline w-100 m-auto mt-2 mb-3">
                            <label for="close_event_id" class="form-label">Event id</label> -->
                            <input type="hidden" class="form-control" id="close_event_id" name="close_event_id" value=<?php echo $event_id;?> required>
                            <!-- </div> -->
                            
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="event_purpose" class="form-label">Event purpose</label>
                                            <textarea class="form-control" id="event_purpose" name="event_purpose" rows="2" required placeholder="education or entertain"></textarea>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="event_activities" class="form-label">Event activities</label>
                                            <textarea class="form-control" id="event_activities" name="event_activities" required rows="2" placeholder="speech or performane or discussion"></textarea>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="no_of_male_stu_attending" class="form-label">No. of Male students attended event</label>
                                            <input type="number" class="form-control" id="no_of_male_stu_attending" name="no_of_male_stu_attending" required>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="no_of_female_stu_attending" class="form-label">No. of Female students attended event</label>
                                            <input type="number" class="form-control" id="no_of_female_stu_attending" name="no_of_female_stu_attending" required>
                            </div>
                          
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="event_mode" class="form-label">Event mode</label>
                                            <select name="event_mode" id="event_mode" onchange="changeMode()" required>
                                                <option value="online">online</option>
                                                <option value="offline">offline</option>
                                            </select>
                                </div>
                                <div class="form-outline w-100 m-auto mt-2 mb-3 " id="event_link">
                                    <label for="link_of_event" class="form-label">Event Link</label>
                                    <input class="form-control" type="text" name="link_of_event" id="link_of_event">
                                </div>
                            
                                
                              
                    <!-- </form> -->
                </div>
                <div class="col-lg-6 col-md-6 m-auto fw-bold mt-3">
                    <!-- <p>Hello</p> -->
                    <!-- <form action=""> -->
                    <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="no_of_faculty_attending" class="form-label">No. of faculty staff attended event</label>
                                            <input type="number" class="form-control" id="no_of_faculty_attending" name="no_of_faculty_attending" required>
                            </div>
                             

                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="event_impact" class="form-label">Event impact/outcome</label>
                                            <textarea class="form-control" id="event_impact" name="event_impact" rows="2" required></textarea>
                            </div>
                                
                           
                            <small class="form-text text-muted">Please upload event photo with event name.</small>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                        <label for="event_pic_first" class="form-label" >Upload event photo:</label>
                                        <input type="file" name="event_pic_first" id="event_pic_first" required>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3" >
                                        <label for="event_pic_second" class="form-label">Upload event photo:</label>
                                        <input type="file" name="event_pic_second" id="event_pic_second" required>
                            </div>
                            <div class=' mt-3'>
                                <input type='submit' id='close_event' name='close_event' value='Submit' 
                                    class='btn btn-primary px-3 mb-3' >
                            </div>
                    
                </div>
                
            </div>
            </form>
           
                    <!-- <div class="container-fluid"> -->
                            <!-- <input type="text" id="user_email" value="<?php //echo($user_email);?>" style="display:none;" readonly> -->
                    <!-- <img src="https://img.freepik.com/free-vector/appointment-booking-with-woman-calendar_23-2148559014.jpg?w=1060&t=st=1684132939~exp=1684133539~hmac=d2101dc2baf34866ceb2d3eabe252bb481424284e4e6adc90f6765677ba3ae4e" alt="" class="img-fluid"> -->
               
                                         
    
</body>
</html>
<?php
            mysqli_close($con);
          ?>
         