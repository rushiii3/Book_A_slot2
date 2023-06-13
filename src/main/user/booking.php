<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
<<<<<<< HEAD
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
=======
>>>>>>> db0b766 (done)
=======
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
>>>>>>> 4c514c7 (donee)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b01df11 (done principal email)
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Book</title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />
    
<<<<<<< HEAD
=======
    <title>Book</title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />
>>>>>>> db0b766 (done)
=======
>>>>>>> 4c514c7 (donee)

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <?php
         include("../config/session.php");
         require "../connection/connect.php";
         require_once("../loader.html"); 
<<<<<<< HEAD
<<<<<<< HEAD
         
=======
>>>>>>> db0b766 (done)
=======
         
>>>>>>> b01df11 (done principal email)
     ?>
    <main id="main">

        <?php
     include("navigation.html");
    ?>


<!-- SUCCESS -->
<div class="modal fade" id="success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered w-75 mx-auto">
    <div class="modal-content">
      <div class="modal-body">
      <img src="https://img.freepik.com/free-vector/goal-achievement-planning-checklist-flat-composition-with-man-holding-pencil-tick-image_1284-63673.jpg?w=1060&t=st=1684568117~exp=1684568717~hmac=d2a5e07e610acc520b8359beead1c1938d3160eb998bd132bdd545f5b00883ee" class="img-fluid" alt="">
        <p class="fs-6 text-center"><strong>Congratulations.</strong> <br/> Your venue will be confirmed in 24hr! <br> You can check you status in Check status</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="bookAgain">Book another</button>
        <button type="button" onclick="location.href='status.php';" class="btn btn-primary">Check Status</button>
      </div>
    </div>
  </div>
</div>
<!-- FAILED -->
<div class="modal fade" id="failed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered w-75 mx-auto">
    <div class="modal-content">
      <div class="modal-body">
      <img src="https://img.freepik.com/free-vector/oops-404-error-with-broken-robot-concept-illustration_114360-1932.jpg?w=1060&t=st=1684568442~exp=1684569042~hmac=939ab6fee619a44b81af999bef8df55df06ea101b4289328e026f74156465ec2" class="img-fluid" alt="">
        <p class="fs-6 text-center"><strong>Failed to Booked.</strong> <br/> Try again. </p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Try Again</button>
      </div>
    </div>
  </div>
</div>


<!-- terms and condition modal -->
<div class="modal fade" id="terms_and_condition" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered w-75 mx-auto">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Terms And Condition</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
      </div>
      <div class="modal-footer" id="tnc_footer">
      <button type="button" class="btn btn-primary" id="iagree" data-bs-dismiss="modal">I Agree</button>
      </div>
    </div>
  </div>
</div>

        <div class="container mt-5 mb-5 shadow p-3 mb-5 bg-body" id="main_body" style="border-radius: 20px">
            <!-- Container starting -->
            <div class="row">
                <!-- row staring -->
                <!-- Image for div -->
                <div class="p-4 col-lg-6">
                    <!-- new col for image -->
                    <img src="https://img.freepik.com/free-vector/appointment-booking-with-woman-calendar_23-2148559014.jpg?w=1060&t=st=1684132939~exp=1684133539~hmac=d2101dc2baf34866ceb2d3eabe252bb481424284e4e6adc90f6765677ba3ae4e" alt="" class="img-fluid">
                </div>
                <div class="p-4 col-lg-6">
                    <!-- new col for booking -->
                    <p class="fs-3 text-center fw-bold">
                        Book your slot
                    </p>
                    <div class="pro">
                    <div class="stepper-wrapper">
                        <div class="stepper-item ">
                            <div class="step-counter">1</div>
                            <div class="step-name text-center">Event <br> Details</div>
                        </div>
                        <div class="stepper-item ">
                            <div class="step-counter">2</div>
                            <div class="step-name text-center">Venue <br> Selection</div>
                        </div>
                        <div class="stepper-item ">
                            <div class="step-counter">3</div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 531ad26 (email)
                            <div class="step-name text-center">Requriement<br> </div>
                        </div>
                        <div class="stepper-item ">
                            <div class="step-counter">4</div>
<<<<<<< HEAD
=======
>>>>>>> db0b766 (done)
=======
>>>>>>> 531ad26 (email)
                            <div class="step-name text-center">Resourse <br> Person info</div>
                        </div>
                        </div>
                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
<form action="<?php $_PHP_SELF ?>" method="post">
=======
<form>
>>>>>>> db0b766 (done)
=======
<form action="<?php $_PHP_SELF ?>" method="post">
>>>>>>> 4c514c7 (donee)
                    <div class="container-fluid">
                        <!-- new container -->
                        <div class="row section1">
                            <!-- new row -->
                            
<<<<<<< HEAD
<<<<<<< HEAD
                            
                            <input type="text" name="user_email" class="form-control" id="user_email" value="<?php echo($user_email); ?>" readonly style="display:none;">

                                        <div class="col-12 mb-3">
                                            <label for="eventName" class="form-label">Event Name</label>
                                            <input type="text" name="eventName" class="form-control" id="eventName" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                                <label for="eventDescription" class="form-label">Event Description</label>
                                                <textarea class="form-control" name="eventDescription" id="eventDescription" rows="2"></textarea>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="no_of_stu_attending" class="form-label">No of students attending event</label>
                                            <input type="number" class="form-control" name="no_of_stu_attending" id="no_of_stu_attending" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                        <label for="department_namee" class="form-label">Select Department</label>
                                        <select
                                            name="department_namee"
                                            class="form-select"
                                            id="department_namee"
                                            name="department_namee"
                                            required
                                        >
                                            <option selected>Select Department</option>
                                            <?php
                                                $get_department_name_query = "SELECT * FROM DEPARTMENT";
                                                $result_of_department_query = mysqli_query($con,$get_department_name_query);
                                                if(mysqli_num_rows($result_of_department_query)>0) 
                                                {
                                                    while($row_of_department_name =
                                                    mysqli_fetch_assoc($result_of_department_query))
                                                    { ?>
                                                    <option
                                                        value="<?php echo($row_of_department_name['department_name']); ?>"
                                                    >
                                                        <?php echo($row_of_department_name['department_name']); ?>
                                                    </option>
                                                    <?php
                                                }
                                                }
                                                    ?>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3" id="org_institue_name">
                                            <label for="Institute_Org_Name" class="form-label">Institute/Organisation Name</label>
                                            <input type="text" name="Institute_Org_Name" class="form-control" id="Institute_OrgName" placeholder="e.g. ....... ">
                                    </div>

                                    <div class="col-12 mb-3" id="org_institue_email">
                                            <label for="Institute/Org_Name_email" class="form-label"> Email</label>
                                            <input type="email" name="Institute_OrgName_email" class="form-control" id="Institute_OrgName_email"  placeholder="e.g. abc@gmail.com" >

                                    </div>
                                    <div class="col-12 mb-3" id="org_institue_phone">
                                            <label for="Institute_Org_Name_phone_no" class="form-label">Phone Number</label>
                                            <input type="number" name="Institute_OrgName_phone_no"  class="form-control" id="Institute_OrgName_phone_no" placeholder="e.g. ....... " pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" >
                                    </div>
                                    <div class="col-12 mb-3" id="org_institue_transaction_id">
                                            <label for="Institute_Org_Name_transaction_id" class="form-label">Transaction ID / RTGS</label>
                                            <input type="text" name="Institute_OrgName_transaction_id" class="form-control" id="Institute_OrgName_transaction_id" placeholder="e.g. ....... ">
                                    </div>
                                        
                                        <div class="col-12 mb-1 mt-5">
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextFirst">Next</button> 
                                        </div>
                                        
                        </div>
                        <!-- new row ending -->


                        <div class="row section2">
                            <!-- new row -->
                            
                                    
                                    <div class="col-12 mb-3">
                                        <label for="Venue_name" class="form-label">Select Venue</label>
                                        <select
                                            name="Venue_name"
                                            class="form-select"
                                            id="Venue_name"
                                            name="Venue_name"
                                            required
                                        >
                                            <option selected>Select Venue</option>
                                            <?php
                                                $get_audi_room_query = "SELECT * FROM AUDI_ROOM";
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
                                    <div class="col-12 mb-3 input-group">
                                            <label for="selectDate" class="form-label w-100">Date</label><br>
                                            <input type="text" name="selectDate" class="form-control rounded-start border-end-0" id="selectDate" placeholder="e.g. ....... ">
=======
                            <input type="text" id="user_email" value="<?php echo($user_email);?>" style="display:none;" readonly>
=======
                            
                            <input type="text" name="user_email" class="form-control" id="user_email" value="<?php echo($user_email); ?>" readonly style="display:none;">
>>>>>>> 4c514c7 (donee)

                                        <div class="col-12 mb-3">
                                            <label for="eventName" class="form-label">Event Name</label>
                                            <input type="text" name="eventName" class="form-control" id="eventName" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                                <label for="eventDescription" class="form-label">Event Description</label>
                                                <textarea class="form-control" name="eventDescription" id="eventDescription" rows="2"></textarea>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="no_of_stu_attending" class="form-label">No of students attending event</label>
                                            <input type="number" class="form-control" name="no_of_stu_attending" id="no_of_stu_attending" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                        <label for="department_namee" class="form-label">Select Department</label>
                                        <select
                                            name="department_namee"
                                            class="form-select"
                                            id="department_namee"
                                            name="department_namee"
                                            required
                                        >
                                            <option selected>Select Department</option>
                                            <?php
                                                $get_department_name_query = "SELECT * FROM DEPARTMENT";
                                                $result_of_department_query = mysqli_query($con,$get_department_name_query);
                                                if(mysqli_num_rows($result_of_department_query)>0) 
                                                {
                                                    while($row_of_department_name =
                                                    mysqli_fetch_assoc($result_of_department_query))
                                                    { ?>
                                                    <option
                                                        value="<?php echo($row_of_department_name['department_name']); ?>"
                                                    >
                                                        <?php echo($row_of_department_name['department_name']); ?>
                                                    </option>
                                                    <?php
                                                }
                                                }
                                                    ?>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3" id="org_institue_name">
                                            <label for="Institute_Org_Name" class="form-label">Institute/Organisation Name</label>
                                            <input type="text" name="Institute_Org_Name" class="form-control" id="Institute_OrgName" placeholder="e.g. ....... ">
                                    </div>

                                    <div class="col-12 mb-3" id="org_institue_email">
                                            <label for="Institute/Org_Name_email" class="form-label"> Email</label>
                                            <input type="email" name="Institute_OrgName_email" class="form-control" id="Institute_OrgName_email"  placeholder="e.g. abc@gmail.com" >

                                    </div>
                                    <div class="col-12 mb-3" id="org_institue_phone">
                                            <label for="Institute_Org_Name_phone_no" class="form-label">Phone Number</label>
                                            <input type="number" name="Institute_OrgName_phone_no"  class="form-control" id="Institute_OrgName_phone_no" placeholder="e.g. ....... " pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" >
                                    </div>
                                    <div class="col-12 mb-3" id="org_institue_transaction_id">
                                            <label for="Institute_Org_Name_transaction_id" class="form-label">Transaction ID / RTGS</label>
                                            <input type="text" name="Institute_OrgName_transaction_id" class="form-control" id="Institute_OrgName_transaction_id" placeholder="e.g. ....... ">
                                    </div>
                                        
                                        <div class="col-12 mb-1 mt-5">
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextFirst">Next</button> 
                                        </div>
                                        
                        </div>
                        <!-- new row ending -->


                        <div class="row section2">
                            <!-- new row -->
                            
                                    
                                    <div class="col-12 mb-3">
                                        <label for="Venue_name" class="form-label">Select Venue</label>
                                        <select
                                            name="Venue_name"
                                            class="form-select"
                                            id="Venue_name"
                                            name="Venue_name"
                                            required
                                        >
                                            <option selected>Select Venue</option>
                                            <?php
                                                $get_audi_room_query = "SELECT * FROM AUDI_ROOM";
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
                                    <div class="col-12 mb-3 input-group">
                                            <label for="selectDate" class="form-label w-100">Date</label><br>
<<<<<<< HEAD
                                            <input type="text" class="form-control rounded-start border-end-0" id="selectDate" placeholder="e.g. ....... ">
>>>>>>> db0b766 (done)
=======
                                            <input type="text" name="selectDate" class="form-control rounded-start border-end-0" id="selectDate" placeholder="e.g. ....... ">
>>>>>>> 4c514c7 (donee)
                                            <span class="input-group-text bg-white" id="basic-addon1"><i class="bi bi-calendar-event"></i></span>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="startTime" class="form-label">Start Time</label>
<<<<<<< HEAD
<<<<<<< HEAD
                                            <select class="form-select" name="selectStartTime" id="selectStartTime" aria-label="select_start_time">
=======
                                            <select class="form-select" id="selectStartTime" aria-label="select_start_time">
>>>>>>> db0b766 (done)
=======
                                            <select class="form-select" name="selectStartTime" id="selectStartTime" aria-label="select_start_time">
>>>>>>> 4c514c7 (donee)
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
                                            
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="endTime" class="form-label">End Time</label>
<<<<<<< HEAD
<<<<<<< HEAD
                                            <select class="form-select" name="selectEndTime" id="selectEndTime" aria-label="select_start_time">
=======
                                            <select class="form-select" id="selectEndTime" aria-label="select_start_time">
>>>>>>> db0b766 (done)
=======
                                            <select class="form-select" name="selectEndTime" id="selectEndTime" aria-label="select_start_time">
>>>>>>> 4c514c7 (donee)
                                                <option selected>Select End time</option>
                                                <option class="end-time" value="07:00">07:00 AM</option>
                                                <option class="end-time" value="07:30">07:30 AM</option>
                                                <option class="end-time" value="08:00">08:00 AM</option>
                                                <option class="end-time" value="08:30">08:30 AM</option>
                                                <option class="end-time" value="09:00">09:00 AM</option>
                                                <option class="end-time" value="09:30">09:30 AM</option>
                                                <option class="end-time" value="10:00">10:00 AM</option>
                                                <option class="end-time" value="10:30">10:30 AM</option>
                                                <option class="end-time" value="11:00">11:00 AM</option>
                                                <option class="end-time" value="11:30">11:30 AM</option>
                                                <option class="end-time" value="12:00">12:00 PM</option>
                                                <option class="end-time" value="12:30">12:30 PM</option>
                                                <option class="end-time" value="13:00">01:00 PM</option>
                                                <option class="end-time" value="13:30">01:30 PM</option>
                                                <option class="end-time" value="14:00">02:00 PM</option>
                                                <option class="end-time" value="14:30">02:30 PM</option>
                                                <option class="end-time" value="15:00">03:00 PM</option>
                                                <option class="end-time" value="15:30">03:30 PM</option>
                                                <option class="end-time" value="16:00">04:00 PM</option>
                                                <option class="end-time" value="16:30">04:30 PM</option>
                                                <option class="end-time" value="17:00">05:00 PM</option>
                                                <option class="end-time" value="17:30">05:30 PM</option>
                                                <option class="end-time" value="18:00">06:00 PM</option>
                                                <option class="end-time" value="18:30">06:30 PM</option>
                                                <option class="end-time" value="19:00">07:00 PM</option>
                                                <option class="end-time" value="19:30">07:30 PM</option>
                                                <option class="end-time" value="20:00">08:00 PM</option>
                                                <option class="end-time" value="20:30">08:30 PM</option>
                                                <option class="end-time" value="21:00">09:00 PM</option>
                                                <option class="end-time" value="21:30">09:30 PM</option>
                                                <option class="end-time" value="22:00">10:00 PM</option>
                                                <option class="end-time" value="22:30">10:30 PM</option>
                                                <option class="end-time" value="23:00">11:00 PM</option>
                                                <option class="end-time" value="23:30">11:30 PM</option>
                                            </select>
                                        </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
                                        <div class="col-12 mb-1 mt-5">
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextFirst">Next</button> 
                                        </div>
                                        
                        </div>
                        <!-- new row ending -->


                        <div class="row section2">
                            <!-- new row -->
                            <div class="col-12 mb-3">
                                        <label for="department_namee" class="form-label">Select Department</label>
                                        <select
                                            name="department_namee"
                                            class="form-select"
                                            id="department_namee"
                                            required
                                        >
                                            <option selected>Select Department</option>
                                            <?php
                                                $get_department_name_query = "SELECT * FROM DEPARTMENT";
                                                $result_of_department_query = mysqli_query($con,$get_department_name_query);
                                                if(mysqli_num_rows($result_of_department_query)>0) 
                                                {
                                                    while($row_of_department_name =
                                                    mysqli_fetch_assoc($result_of_department_query))
                                                    { ?>
                                                    <option
                                                        value="<?php echo($row_of_department_name['department_name']); ?>"
                                                    >
                                                        <?php echo($row_of_department_name['department_name']); ?>
                                                    </option>
                                                    <?php
                                                }
                                                }
                                                    ?>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3" id="org_institue_name">
                                            <label for="Institute/Org_Name" class="form-label">Institute/Organisation Name</label>
                                            <input type="text" class="form-control" id="Institute_OrgName" placeholder="e.g. ....... ">
                                        </div>
                                    
                                    <div class="col-12 mb-3">
                                        <label for="Venue_name" class="form-label">Select Venue</label>
                                        <select
                                            name="Venue_name"
                                            class="form-select"
                                            id="Venue_name"
                                            required
                                        >
                                            <option selected>Select Venue</option>
                                            <?php
                                                $get_audi_room_query = "SELECT * FROM AUDI_ROOM";
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
>>>>>>> db0b766 (done)
=======
>>>>>>> 86879d7 (half blocking donee)
                                    <div class="col-12 mb-1 mt-5">
                                            <button type="button" class="btn btn-secondary px-4 ms-3" id="prevBtnSecond">Previous</button>
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextSecond">Next</button> 
                                        </div>
                                
                        </div>
<<<<<<< HEAD
<<<<<<< HEAD
                        <div class="row section3">
                            <!-- new row -->
                                        <div class="col-12 mb-3">
                                            <label for="rp_name" class="form-label">Select your requriements</label>
                                        </div>
                                        <div class="col-12 mb-4 form-check mic" id="mic">
                                                <input class="form-check-input" name="checkArr"  type="checkbox" value="MIC">
                                                <label class="form-check-label" for="terms_condition">
                                                    Mic
                                                </label>
                                        </div>
                                        <div class="col-12 mb-4 form-check projector" id="projector">
                                                <input class="form-check-input" name="checkArr"   type="checkbox" value="Projector">
                                                <label class="form-check-label" for="terms_condition">
                                                    Projector
                                                </label>
                                        </div>
                                        <div class="col-12 mb-4 form-check pointer" id="pointer">
                                                <input class="form-check-input" name="checkArr"   type="checkbox" value="Pointer">
                                                <label class="form-check-label" for="terms_condition">
                                                    Pointer
                                                </label>
                                        </div>
                                        <div class="col-12 mb-4 form-check laptop" id="laptop">
                                                <input class="form-check-input" name="checkArr"   type="checkbox" value="Laptop">
                                                <label class="form-check-label" for="terms_condition">
                                                    Laptop
                                                </label>
                                        </div>
                                        <div class="col-12 mb-1 mt-5">
                                            <button type="button" class="btn btn-secondary px-4 ms-3" id="prevBtnThird">Previous</button>
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextThird">Next</button> 
                                        </div>
                                        
                        </div>

                        <!-- new row ending -->
                        
                        <div class="row section4">
                            <!-- new row -->
                                        <div class="col-12 mb-3">
                                            <label for="rp_name" class="form-label">Select the number of Resourse Person attending</label>
                                            <select class="form-select" name="no_of_rp" id="no_of_rp">
                                                <option selected>Please Select the Number of Resourse Person</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="No">None</option>
                                            </select>
                                        </div>
                                        <div class="container-fluid">
                                    <div class="row flex-nowrap" id="rps_names" name="rps_names" style=" overflow-x: auto;width:;height:22rem;">

                                    
                                         
                                    </div>
                                </div>    
                                    <div class="col-12 mb-4 form-check">
=======
                        <!-- new row ending -->

=======
>>>>>>> 531ad26 (email)
                        <div class="row section3">
                            <!-- new row -->
                                        <div class="col-12 mb-3">
                                            <label for="rp_name" class="form-label">Select your requriements</label>
                                        </div>
                                        <div class="col-12 mb-4 form-check mic" id="mic">
                                                <input class="form-check-input" name="checkArr"  type="checkbox" value="MIC">
                                                <label class="form-check-label" for="terms_condition">
                                                    Mic
                                                </label>
                                        </div>
                                        <div class="col-12 mb-4 form-check projector" id="projector">
                                                <input class="form-check-input" name="checkArr"   type="checkbox" value="Projector">
                                                <label class="form-check-label" for="terms_condition">
                                                    Projector
                                                </label>
                                        </div>
                                        <div class="col-12 mb-4 form-check pointer" id="pointer">
                                                <input class="form-check-input" name="checkArr"   type="checkbox" value="Pointer">
                                                <label class="form-check-label" for="terms_condition">
                                                    Pointer
                                                </label>
                                        </div>
                                        <div class="col-12 mb-4 form-check laptop" id="laptop">
                                                <input class="form-check-input" name="checkArr"   type="checkbox" value="Laptop">
                                                <label class="form-check-label" for="terms_condition">
                                                    Laptop
                                                </label>
                                        </div>
                                        <div class="col-12 mb-1 mt-5">
                                            <button type="button" class="btn btn-secondary px-4 ms-3" id="prevBtnThird">Previous</button>
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextThird">Next</button> 
                                        </div>
                                        
                        </div>

                        <!-- new row ending -->
                        
                        <div class="row section4">
                            <!-- new row -->
                                        <div class="col-12 mb-3">
                                            <label for="rp_name" class="form-label">Select the number of Resourse Person attending</label>
                                            <select class="form-select" name="no_of_rp" id="no_of_rp">
                                                <option selected>Please Select the Number of Resourse Person</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="No">None</option>
                                            </select>
                                        </div>
<<<<<<< HEAD
                                        <div class="col-12 mb-3">
                                                <label for="companyName" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="companyName" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="designation" class="form-label">Designation</label>
                                            <input type="text" class="form-control" id="designation" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                                <label for="experience" class="form-label">Experience</label>
                                                <input type="number" class="form-control" id="experience" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-4 form-check">
>>>>>>> db0b766 (done)
=======
                                        <div class="container-fluid">
                                    <div class="row flex-nowrap" id="rps_names" name="rps_names" style=" overflow-x: auto;width:;height:22rem;">

                                    
                                         
                                    </div>
                                </div>    
                                    <div class="col-12 mb-4 form-check">
>>>>>>> 4c514c7 (donee)
                                                <input class="form-check-input" id="check_box_terms_and_condition"  type="checkbox" value="">
                                                <label class="form-check-label" for="terms_condition">
                                                    I agree to these 
                                                    <span><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" id="tandcondlink">Terms and Conditions.</a></span>
                                                </label>
                                        </div>
                                        <div class="col-12 mb-1 mt-5">
<<<<<<< HEAD
<<<<<<< HEAD
                                            <button type="button" class="btn btn-secondary px-4 ms-3" id="prevBtnFourth">Previous</button>
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextForth">Submit</button> 
                                            <input type="submit" name="FinalSubmit" id="FinalSubmit" value="none">
                                        </div>
                        </div>
                        <div id="timeBlock">
                        </div>
                        <div id="emailtemp">
<<<<<<< HEAD
=======
                                            <button type="button" class="btn btn-secondary px-4 ms-3" id="prevBtnThird">Previous</button>
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextThird">Submit</button> 
=======
                                            <button type="button" class="btn btn-secondary px-4 ms-3" id="prevBtnFourth">Previous</button>
                                            <button type="button" class="btn btn-primary px-4 ms-3" id="nextForth">Submit</button> 
                                            <input type="submit" name="FinalSubmit" id="FinalSubmit" value="none">
>>>>>>> 4c514c7 (donee)
                                        </div>
                        </div>
                        <div id="timeBlock">
<<<<<<< HEAD
>>>>>>> db0b766 (done)

=======
>>>>>>> bcf6c6f (done disable dates by db)
=======

>>>>>>> b01df11 (done principal email)
                        </div>
<!-- new row ending -->
                                    
                                    
                    </div>
                    <!-- new container ending -->



                </div>
            <!-- row ending -->
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4c514c7 (donee)
            </div>
        <!-- container ending -->
        </div>  
</form>
<<<<<<< HEAD
<<<<<<< HEAD

=======
<?php
if(isset($_POST['FinalSubmit']))
{
echo($user_email);
$eventName = mysqli_real_escape_string($con, $_POST['eventName']);
$eventDescription = mysqli_real_escape_string($con, $_POST['eventDescription']);
$no_of_stu_attending = mysqli_real_escape_string($con, $_POST['no_of_stu_attending']);
$department_namee = mysqli_real_escape_string($con, $_POST['department_namee']);
$Institute_Org_Name = mysqli_real_escape_string($con, $_POST['Institute_Org_Name']);
$Institute_OrgName_email = mysqli_real_escape_string($con, $_POST['Institute_OrgName_email']);
$Institute_OrgName_phone_no = mysqli_real_escape_string($con, $_POST['Institute_OrgName_phone_no']);
$Institute_OrgName_transaction_id = mysqli_real_escape_string($con, $_POST['Institute_OrgName_transaction_id']);
$Venue_name = mysqli_real_escape_string($con, $_POST['Venue_name']);
$selectDate = mysqli_real_escape_string($con, $_POST['selectDate']);
$selectStartTime = mysqli_real_escape_string($con, $_POST['selectStartTime']);
$selectEndTime = mysqli_real_escape_string($con, $_POST['selectEndTime']);
$checkArr = $_POST['checkArr'];
$chked="";
foreach($checkArr as $chk1)  
   {  
      $chked .= $chk1.", ";  
   } 
$requriement = mysqli_real_escape_string($con,$chked);
$no_of_rp = mysqli_real_escape_string($con, $_POST['no_of_rp']);
$rp_name = [];

if($no_of_rp=="No")
{
    $rp_name = mysqli_real_escape_string($con, $_POST['rp_name']);

}else{

}
/*
echo($eventName);
echo("<br>");
echo($eventDescription);
echo("<br>");
echo($no_of_stu_attending);
echo("<br>");
echo($department_namee);
echo("<br>");
echo($Institute_Org_Name);
echo("<br>");
echo($Institute_OrgName_email);
echo("<br>");
echo($Institute_OrgName_phone_no);
echo("<br>");
echo($Venue_name);
echo("<br>");
echo($Institute_OrgName_transaction_id);
echo("<br>");
echo($selectDate);
echo("<br>");
*/
}

?>
>>>>>>> 4c514c7 (donee)
=======

>>>>>>> b01df11 (done principal email)
    </main>
    <script src="../../js/booking.js"></script>
    <script src="../../js/booking2.js"></script>
    <script src="../../js/bookingDate.js"></script>
    <script>
        flatpickr("#selectDate", {
      dateFormat: 'Y-m-d',
      minDate: new Date().fp_incr(3),
      disable: [       
        <?php
            $get_blocked_date_query = "SELECT * FROM disableDates";
            $result_of_blocked_date_query = mysqli_query($con,$get_blocked_date_query);
            if(mysqli_num_rows($result_of_blocked_date_query)>0){
                while($row_of_blocked_date = mysqli_fetch_assoc($result_of_blocked_date_query))
                {?>
                    '<?php echo($row_of_blocked_date['datee']); ?>',
                <?php
                }
            }
        ?>
      ]
    });
    </script>
=======
                                            </form>
            </div>
        <!-- container ending -->
        </div>  
        
    </main>
    <script src="../../js/booking.js"></script>
    <script src="../../js/bookingDate.js"></script>
<<<<<<< HEAD
>>>>>>> db0b766 (done)
=======
    <script>
        flatpickr("#selectDate", {
      dateFormat: 'Y-m-d',
      minDate: new Date().fp_incr(3),
      disable: [       
        <?php
            $get_blocked_date_query = "SELECT * FROM disableDates";
            $result_of_blocked_date_query = mysqli_query($con,$get_blocked_date_query);
            if(mysqli_num_rows($result_of_blocked_date_query)>0){
                while($row_of_blocked_date = mysqli_fetch_assoc($result_of_blocked_date_query))
                {?>
                    '<?php echo($row_of_blocked_date['datee']); ?>',
                <?php
                }
            }
        ?>
      ]
    });
    </script>
>>>>>>> bcf6c6f (done disable dates by db)
</body>
</html>
<?php
            mysqli_close($con);
          ?>
         