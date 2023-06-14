
<?php
include '../connection/connect.php';
if(isset($_POST['remainder'])){
    $event_id=$_POST['event_id'];
        $info_to_send_mail="select * from `EVENT` where event_id=$event_id ";
        $result=mysqli_query($con,$info_to_send_mail);
        $row=mysqli_fetch_assoc($result);
        $email=$row['user_name'];
        $status_value=$row['status_value'];
        $status_reason=$row['status_reason'];
        $event_name=$row['event_name'];
        $event_date=$row['event_date'];
        $query_for_name="select * from `USER` where user_name='$email' ";
        $result1=mysqli_query($con,$query_for_name);
        $row=mysqli_fetch_assoc($result1);
        $name=$row['user_full_name'];
        if($result){
            echo "<script>window.location.href = 'remainder_email.php?event_id=$event_id'</script>";
            //header("location:./remainder_email.php?event_id=$event_id");
       }
      //  echo $event_id;
    //     if(isset($result) and isset($result1)){
    //         echo "<script>";
    // echo "sendEmail();"; // Call your desired JavaScript function with the division ID
    // echo "</script>";
    //     header("location:./admin_home.php?open_event");
    //     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>open events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


<div class="container-fluid">
        <div class="row">
        <div class="col-md-10 col-lg-10 m-auto">
<?php

    $list_of_open_events="SELECT * from `EVENT` where event_date<CURDATE() and status_value='approved' and event_status='Open' ";
    $result=mysqli_query($con,$list_of_open_events);
    $count=0;  
    while($row=mysqli_fetch_assoc($result)){
        $count++;} 
    if($count<1){
        echo "<h1 class='text-center p-4 mt-4 mb-4'>All Departments filled the event information </h1>";
    }
    else{
        echo "<h3 class='text-center mt-3 mb-3'>List of events whose informationn is not filled even the events occured successfully</h3>";
        echo "<table  class='table table-bordered my-4 ' style='align-items:center'>
        <thead >
        <tr >
        <th class='text-center'>Sr No.</th>
            <th class='text-center'>Event Id</th>
            <th class='text-center'>Event Name</th>
            <th class='text-center'>Event Date</th>
            <th class='text-center'>Organization Institute</th>
        </tr>
        </thead>
        <tbody class='bg-primary'>";
            //event_date plus 8 days for remainder
            $list_of_open_events="SELECT * from `EVENT` where DATE_ADD(event_date, INTERVAL 8 DAY)<=CURDATE() and status_value='approved' and event_status='Open'";
            $result=mysqli_query($con,$list_of_open_events);
            $count=0;   
            while($row=mysqli_fetch_assoc($result)){
                $count++;
                $event_id=$row['event_id'];
                $event_name=$row['event_name'];
                $event_date=$row['event_date'];
                $event_organizer=$row['organization_institute'];
                echo"<tr class='text-center text-light'>
                <td> $count</td>
                <td> $event_id</td>
                <td> $event_name</td>
                <td> $event_date</td>
                <td> $event_organizer</td>
                <form method='post'>
                <input type='hidden' id='event_id' name='event_id' readonly class='form-control bg-primary text-light ' value='$event_id'>
                
                <td class='bg-light'><input type='submit' class='bg-primary text-light' name='remainder' value='Send Remainder' ></td></form>
                </tr>";
            }
        }

?> 
<!-- <a href='remainder_email.php?event_id=$event_id'></a> -->
         </div>
    </div>
</div>
</body>
</html>