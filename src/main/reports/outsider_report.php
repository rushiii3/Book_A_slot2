<?php
include '../connection/connect.php';
if(isset($_POST['close'])){
    header('location:../admin/report_home.php');
}
if(isset($_POST['outsider_report'])){
    $academic_year=$_POST['year'];
    $years = explode("-", $academic_year);
    $start_year=intval($years[0]);
    $end_year=intval($years[1]);
    if($end_year<$start_year){
        echo "<script>alert('Please Enter a academic year appropriately')</script>";
        echo("<script>window.location='../reports/report_home.php';</script>");
    }
    if($academic_year==''){
        echo "<script>alert('Please Enter a academic year')</script>";
        echo("<script>window.location='../reports/report_home.php';</script>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>outsider</title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

    <link rel='stylesheet' type='text/css' href='../css/images.css'>
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
                include '../admin/admin_navbar.html';
                ?>
               
               
                
            </div>
            </div>
            <?php
            $count=0;
                $outsider_info="SELECT * FROM `EVENT` where organization_institute not in (SELECT * FROM `DEPARTMENT`) and status_value='approved' and event_date between '$start_year-06-15' and '$end_year-06-15'";
                $result1=mysqli_query($con,$outsider_info);
                while($row=mysqli_fetch_assoc($result1)){
                    $count++;
                   }
            ?>
             
                
            <?php
            if($count>0){
                echo "<div class='row m-auto'>
                <div class='col-lg-5 col-md-5 m-auto'>";
                $most_organizer="SELECT count(organization_institute),organization_institute,event_date FROM `EVENT` where organization_institute not in (SELECT * FROM `DEPARTMENT`) and status_value='approved' and event_date between '$start_year-06-15' and '$end_year-06-15' GROUP by organization_institute order by COUNT(organization_institute) desc LIMIT 1 ";
                $result=mysqli_query($con,$most_organizer);
                $row=mysqli_fetch_assoc($result);
                $organizer=$row['organization_institute'];
                echo "<div class='container mt-5 mb-5 shadow p-3 mb-5 bg-body' style='border-radius: 20px'> 
                <h3 class='text-center'>Most of the time event organized by institute/organization :<strong>$organizer</strong> </h3>
                </div>";
                echo "</div>";
                echo "<div class='col-lg-5 col-md-5 m-auto'>";
                $most_dense_audi="SELECT count(ar_name),ar_name,event_date FROM `EVENT` where organization_institute not in (SELECT * FROM `DEPARTMENT`) and status_value='approved' and event_date between '$start_year-06-15' and '$end_year-06-15' GROUP by organization_institute order by COUNT(ar_name) desc LIMIT 1";
                $result=mysqli_query($con,$most_dense_audi);
                $row=mysqli_fetch_assoc($result);
                $ar_name=$row['ar_name'];
                echo "<div class='container mt-5 mb-5 shadow p-3 mb-5 bg-body' style='border-radius: 20px'> 
                <h3 class='text-center'>Most of the time <strong>$ar_name</strong> booked by outsider </h3>
                </div>";
                echo "</div>";
                echo "<div class='col-md-10 col-lg-10 m-auto'>";
            echo "<h3 class='text-center'>List of Events organized by outsider (Academic-Year $academic_year)</h3>";
            echo "<table class='table table-bordered my-4 '>
            <thead >
            <tr >
                <th class='text-center'>Sr No.</th>
                <th class='text-center'>Event Name</th>
                <th class='text-center'>Event organizer</th>
                <th class='text-center'>Event Description</th>
                <th class='text-center'>Event Date</th>
                <th class='text-center'>Event Venue</th>
                <th class='text-center'>Event Participants</th>
                
            </tr>
            </thead>
            <tbody class='bg-primary'>";

            $outsider="SELECT * FROM `EVENT` where organization_institute not in (SELECT * FROM `DEPARTMENT`) and status_value='approved' and event_date between '$start_year-06-15' and '$end_year-06-15' order by event_date desc";
            $result=mysqli_query($con,$outsider);
            $sr=0;
            while($row=mysqli_fetch_assoc($result)){
                $sr++;
                $event_name=$row['event_name'];
                $event_date=$row['event_date'];
                $organization_institute=$row['organization_institute'];
                $total_students=$row['students_total_number'];
                $description=$row['event_description'];
                $venue=$row['ar_name'];
                echo "<tr class='text-center text-light'>
                <td>$sr</td>
                <td>$event_name</td>
                <td>$organization_institute</td>
                <td>$description</td>
                <td>$event_date</td>
                <td>$venue</td>
                <td>$total_students</td>
                </tr>";
            }
        }
        else{
            echo "<h2 class='text-center'>No outsider organized the event for academic-year $academic_year</h2> ";
       }
            ?>
            </tbody>
        </table>
            </div>
        </div>
</div>     
</body>
</html>