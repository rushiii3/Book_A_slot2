<?php
include ('../connection/connect.php');
if(isset($_GET['event_id'])){
    $event_id=$_GET['event_id'];
    $getting_event_info="SELECT * from `event` where event_id='$event_id'";
    $result=mysqli_query($con,$getting_event_info);
    $row=mysqli_fetch_assoc($result);
    $event_name=$row['event_name'];
    $event_date=$row['event_date'];
    $event_description=$row['event_description'];
    $event_start_time=$row['event_start_time'];
    $event_end_time=$row['event_end_time'];
    $event_venue=$row['ar_name'];
    $event_organizer=$row['organization_institute'];
}
if(isset($_POST['close_event'])){
    $event_name = $_POST['close_event_name'];
    $event_id=$_POST['close_event_id'];
    $event_description=$_POST['close_event_description'];
    $event_organizer=$_POST['close_event_organizer'];
    $event_venue=$_POST['close_event_ar_name'];
    $event_date=date('Y-m-d', strtotime($_POST["event_date"]));
    $event_start_time=$_POST['close_event_start_time'];
    $event_end_time=$_POST['close_event_end_time'];
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
      $close_event_query="INSERT into `CLOSE_EVENT`(close_event_name,close_event_date,close_event_start_time,close_event_end_time,
      close_event_ar_name,close_event_mode,close_event_link,close_event_description,close_event_purpose,close_event_organizer,
      close_event_activities,close_event_impact,male_students_count,female_students_count,faculty_members_count,event_pic1,	event_pic2,event_id)
      values ('$event_name','$event_date','$event_start_time','$event_end_time','$event_venue','$event_mode','$event_link',
      '$event_description','$event_purpose','$event_organizer','$event_activities','$event_impact','$male_students','$female_students','$faculty',
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
            <form action="close_event.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 col-md-6 m-auto fw-bold mt-3">
                    <!-- <p>Hello</p> -->
                    
                            
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                            <label for="close_event_id" class="form-label">Event id</label>
                            <input type="number" class="form-control" id="close_event_id" name="close_event_id" value=<?php echo $event_id;?> required>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                            <label for="close_event_name" class="form-label">Event Name</label>
                            <input type="text" class="form-control" id="close_event_name" name="close_event_name" value=<?php echo $event_name;?> required>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                            <label for="close_event_description" class="form-label">Event Description</label>
                             <textarea class="form-control" id="close_event_description" name="close_event_description" rows="2"  required></textarea>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                            <label for="close_event_organizer" class="form-label">Select organization/institute</label>
                                        <select
                                           
                                            class="form-select"
                                            id="close_event_organizer"
                                            name="close_event_organizer"
                                            required
                                        >
                                            <option selected><?php echo $event_organizer;?></option>
                                            <?php
                                                $get_organization_name_query = "SELECT distinct  organization_institute FROM `event`";
                                                $result_of_organization_query = mysqli_query($con,$get_organization_name_query);
                                                if(mysqli_num_rows($result_of_organization_query)>0) 
                                                {
                                                    while($row_of_organization_name =
                                                    mysqli_fetch_assoc($result_of_organization_query))
                                                    { ?>
                                                    <option
                                                        value="<?php echo($row_of_organization_name['organization_institute']); ?>"
                                                    >
                                                        <?php echo($row_of_organization_name['organization_institute']); ?>
                                                    </option>
                                                    <?php
                                                }
                                                }
                                                    ?>
                                        </select>
                                    </div>   
                                    <div class="form-outline w-100 m-auto mt-2 mb-3">
                                        <label for="Venue_name" class="form-label">Select Venue where event happened</label>
                                        <select
                
                                            class="form-select"
                                            id="close_event_ar_name"
                                            name="close_event_ar_name"
                                            required
                                        >
                                            <option selected><?php echo $event_venue;?></option>
                                            <?php
                                                $get_audi_room_query = "SELECT * FROM `AUDI_ROOM`";
                                                $result_of_audi_room_query = mysqli_query($con,$get_audi_room_query);
                                                if(mysqli_num_rows($result_of_audi_room_query)>0) 
                                                {
                                                    while($row_of_audi_room_query =
                                                    mysqli_fetch_assoc($result_of_audi_room_query))
                                                    { ?>
                                                    <option
                                                        value="<?php echo($row_of_audi_room_query['ar_name']); ?>"
                                                    >
                                                        <?php echo($row_of_audi_room_query['ar_name']); ?>
                                                    </option>
                                                    <?php
                                                }
                                                }
                                                    ?>
                                        </select>
                            </div>  
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="selectDate" class="form-label w-100">Date</label><br>
                                            <input type="date" class="form-control rounded-start border-end-0" id="event_date" value="<?php echo $event_date;?>" name="event_date" required >
                                        </div>
                                <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="close_event_start_time" class="form-label">Event Start Time:</label>
                                            <select name="close_event_start_time" id="close_event_start_time" required>
                                            <option selected>Select the start time</option>
                                                <option class="start-time" value="07:00">07:00 AM</option>
                                                <option class="start-time" value="07:30">07:30 AM</option>
                                                <option class="start-time" value="08:00">08:00 AM</option>
                                                <option class="start-time" value="08:30">08:30 AM</option>
                                                <option class="start-time" value="09:00">09:00 AM</option>
                                                <option class="start-time" value="09:30">09:30 AM</option>
                                                <option class="start-time" value="10:00">10:00 AM</option>
                                                <option class="start-time" value="10:30">10:30 AM</option>
                                                <option class="start-time" value="11:00">11:00 AM</option>
                                                <option class="start-time" value="11:30">11:30 AM</option>
                                                <option class="start-time" value="12:00">12:00 PM</option>
                                                <option class="start-time" value="12:30">12:30 PM</option>
                                                <option class="start-time" value="13:00">01:00 PM</option>
                                                <option class="start-time" value="13:30">01:30 PM</option>
                                                <option class="start-time" value="14:00">02:00 PM</option>
                                                <option class="start-time" value="14:30">02:30 PM</option>
                                                <option class="start-time" value="15:00">03:00 PM</option>
                                                <option class="start-time" value="15:30">03:30 PM</option>
                                                <option class="start-time" value="16:00">04:00 PM</option>
                                                <option class="start-time" value="16:30">04:30 PM</option>
                                                <option class="start-time" value="17:00">05:00 PM</option>
                                                <option class="start-time" value="17:30">05:30 PM</option>
                                                <option class="start-time" value="18:00">06:00 PM</option>
                                                <option class="start-time" value="18:30">06:30 PM</option>
                                                <option class="start-time" value="19:00">07:00 PM</option>
                                                <option class="start-time" value="19:30">07:30 PM</option>
                                                <option class="start-time" value="20:00">08:00 PM</option>
                                                <option class="start-time" value="20:30">08:30 PM</option>
                                                <option class="start-time" value="21:00">09:00 PM</option>
                                                <option class="start-time" value="21:30">09:30 PM</option>
                                                <option class="start-time" value="22:00">10:00 PM</option>
                                                <option class="start-time" value="22:30">10:30 PM</option>
                                                <option class="start-time" value="23:00">11:00 PM</option>
                                                <option class="start-time" value="23:30">11:30 PM</option>
                                            </select>
                                            <!-- <input type="text" name="close_event_start_time" id="close_event_start_time" placeholder="10:00 AM"> -->
                                </div>
                                <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="close_event_end_time" class="form-label">Event end Time:</label>
                                            <select name="close_event_end_time" id="close_event_end_time" required>
                                            <option selected>Select the end time</option>
                                                <option class="start-time" value="07:00">07:00 AM</option>
                                                <option class="start-time" value="07:30">07:30 AM</option>
                                                <option class="start-time" value="08:00">08:00 AM</option>
                                                <option class="start-time" value="08:30">08:30 AM</option>
                                                <option class="start-time" value="09:00">09:00 AM</option>
                                                <option class="start-time" value="09:30">09:30 AM</option>
                                                <option class="start-time" value="10:00">10:00 AM</option>
                                                <option class="start-time" value="10:30">10:30 AM</option>
                                                <option class="start-time" value="11:00">11:00 AM</option>
                                                <option class="start-time" value="11:30">11:30 AM</option>
                                                <option class="start-time" value="12:00">12:00 PM</option>
                                                <option class="start-time" value="12:30">12:30 PM</option>
                                                <option class="start-time" value="13:00">01:00 PM</option>
                                                <option class="start-time" value="13:30">01:30 PM</option>
                                                <option class="start-time" value="14:00">02:00 PM</option>
                                                <option class="start-time" value="14:30">02:30 PM</option>
                                                <option class="start-time" value="15:00">03:00 PM</option>
                                                <option class="start-time" value="15:30">03:30 PM</option>
                                                <option class="start-time" value="16:00">04:00 PM</option>
                                                <option class="start-time" value="16:30">04:30 PM</option>
                                                <option class="start-time" value="17:00">05:00 PM</option>
                                                <option class="start-time" value="17:30">05:30 PM</option>
                                                <option class="start-time" value="18:00">06:00 PM</option>
                                                <option class="start-time" value="18:30">06:30 PM</option>
                                                <option class="start-time" value="19:00">07:00 PM</option>
                                                <option class="start-time" value="19:30">07:30 PM</option>
                                                <option class="start-time" value="20:00">08:00 PM</option>
                                                <option class="start-time" value="20:30">08:30 PM</option>
                                                <option class="start-time" value="21:00">09:00 PM</option>
                                                <option class="start-time" value="21:30">09:30 PM</option>
                                                <option class="start-time" value="22:00">10:00 PM</option>
                                                <option class="start-time" value="22:30">10:30 PM</option>
                                                <option class="start-time" value="23:00">11:00 PM</option>
                                                <option class="start-time" value="23:30">11:30 PM</option>
                                            </select>
                                            <!-- <input type="text" name="event_info_end_time" id="event_info_end_time" placeholder="10:00 AM"> -->
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
                                            <label for="event_purpose" class="form-label">Event purpose</label>
                                            <textarea class="form-control" id="event_purpose" name="event_purpose" rows="2" required placeholder="education or entertain"></textarea>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="event_activities" class="form-label">Event activities</label>
                                            <textarea class="form-control" id="event_activities" name="event_activities" required rows="2" placeholder="speech or performane or discussion"></textarea>
                            </div>
                            <div class="form-outline w-100 m-auto mt-2 mb-3">
                                            <label for="event_impact" class="form-label">Event impact/outcome</label>
                                            <textarea class="form-control" id="event_impact" name="event_impact" rows="2" required></textarea>
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
                                            <label for="no_of_faculty_attending" class="form-label">No of faculty staff attending event</label>
                                            <input type="number" class="form-control" id="no_of_faculty_attending" name="no_of_faculty_attending" required>
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
         