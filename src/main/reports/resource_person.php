<?php
include '../connection/connect.php';
<<<<<<< HEAD
<<<<<<< HEAD
if(isset($_POST['close'])){
    header('location:../admin/report_home.php');
}
=======
>>>>>>> 677e8c8 (all reports)
=======
if(isset($_POST['close'])){
    header('location:../admin/report_home.php');
}
>>>>>>> 1896fe1 (changes done)
if(isset($_POST['resource_person'])){
    $academic_year=$_POST['year'];
    $organizer=$_POST['organizer'];
    //echo $organizer;
    $years = explode("-", $academic_year);
    $start_year=intval($years[0]);
    $end_year=intval($years[1]);
<<<<<<< HEAD
    if($end_year<$start_year){
        echo "<script>alert('Please Enter a academic year appropriately')</script>";
        echo("<script>window.location='../reports/report_home.php';</script>");
    }
=======
>>>>>>> 4f687d3 (Add files)
    if($academic_year==''){
        echo "<script>alert('Please Enter a academic year')</script>";
<<<<<<< HEAD
<<<<<<< HEAD
        echo("<script>window.location='../admin/report_home.php';</script>");
=======
        echo("<script>window.location='../report_home.php';</script>");
>>>>>>> 677e8c8 (all reports)
=======
        echo("<script>window.location='../admin/report_home.php';</script>");
>>>>>>> 1896fe1 (changes done)
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Person Reports</title>
<<<<<<< HEAD
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

=======
>>>>>>> 4f687d3 (Add files)
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
            <?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                include '../admin/admin_navbar.html';
=======
                include '../navigation.html';
>>>>>>> 677e8c8 (all reports)
=======
                include '../user/navigation.html';
>>>>>>> 20ec2bd (seperate folders)
=======
                include '../admin/admin_navbar.html';
>>>>>>> 1896fe1 (changes done)
                ?>
            <?php
            $count=0;
                $rp_info="SELECT resource_person.full_name,resource_person.company_name,resource_person.designation,resource_person.experience,event.organization_institute,event.event_name FROM resource_person join `event` on resource_person.event_id=event.event_id WHERE resource_person.event_id in (SELECT event_id from `event` WHERE event.organization_institute='$organizer' and status_value='approved' and event_date between '$start_year-06-15' and '$end_year-06-15')";
                $result1=mysqli_query($con,$rp_info);
                while($row=mysqli_fetch_assoc($result1)){
                    $count++;
                   }
            ?>
            <?php
            if($count>0){
            echo "<h3 class='text-center'>List of resource person's for $organizer (Academic-Year $academic_year)</h3>";
            echo "<table class='table table-bordered my-4 '>
            <thead >
            <tr >
<<<<<<< HEAD
            <th class='text-center'>Sr No</th>
                
=======
                <th class='text-center'>Sr No.</th>
>>>>>>> 4f687d3 (Add files)
                <th class='text-center'>Resource Person Name</th>
                <th class='text-center'>Resource Person Company Name</th>
                <th class='text-center'>Resource Person Designation</th>
                <th class='text-center'>Resource Person Experience</th>
                <th class='text-center'>Event Name</th>
<<<<<<< HEAD
<<<<<<< HEAD
                
=======
                <th class='text-center'>Organization Institute</th>
>>>>>>> 677e8c8 (all reports)
=======
                
>>>>>>> 1896fe1 (changes done)
            </tr>
            </thead>
            <tbody class='bg-primary'>";
               
                // $get_organizations="SELECT distinct event.organization_institute FROM `EVENT` JOIN (SELECT event_id,full_name from `RESOURCE_PERSON` GROUP BY event_id)`resource_person` on event.event_id=resource_person.event_id";
                // $result=mysqli_query($con,$get_organizations);
                // $organizations=array();
                // while($row=mysqli_fetch_assoc($result)){
                //     $organizations[]=$row['organization_institute'];
                // }
                //print_r($organizations);
                
                // foreach($organizations as $organizer){
                    $rp_info="SELECT resource_person.full_name,resource_person.company_name,resource_person.designation,resource_person.experience,event.organization_institute,event.event_name FROM resource_person join `event` on resource_person.event_id=event.event_id WHERE resource_person.event_id in (SELECT event_id from `event` WHERE event.organization_institute='$organizer' and status_value='approved' and event_date between '$start_year-06-15' and '$end_year-06-15')";
                    $result1=mysqli_query($con,$rp_info);
                    if($result1===false){
                        die(mysqli_error($con));
                    }
<<<<<<< HEAD
                  $sr=0;
                    while($row=mysqli_fetch_assoc($result1)){
                        $sr++;
=======
                  
                    while($row=mysqli_fetch_assoc($result1)){
                        $count++;
>>>>>>> 4f687d3 (Add files)
                        $event_name=$row['event_name'];
                        $organization_institute=$row['organization_institute'];
                        $full_name=$row['full_name'];
                        $company_name=$row['company_name'];
                        $designation=$row['designation'];
                        $experience=$row['experience'];
                        echo "<tr class='text-center text-light'>
<<<<<<< HEAD
                        <td>$sr</td>
=======
                        <td>$count</td>
>>>>>>> 4f687d3 (Add files)
                        <td>$full_name</td>
                        <td>$company_name</td>
                        <td>$designation</td>
                        <td>$experience</td>
                        <td>$event_name</td>
<<<<<<< HEAD
<<<<<<< HEAD
                        
=======
                        <td>$organization_institute</td>
>>>>>>> 677e8c8 (all reports)
=======
                        
>>>>>>> 1896fe1 (changes done)
                        </tr>";
                    }
                }
                else{
                     echo "<h2 class='text-center'>$organizer did not invite any resource person for academic-year $academic_year</h2> ";
                }
        
                ?>
            </tbody>
            </table>
            </div>
        </div>
</div>

</body>
</html>