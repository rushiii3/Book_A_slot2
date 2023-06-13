<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d4f288e (month report done)
=======
>>>>>>> a735689 (month report done)
<?php
include '../connection/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Month wise Report</title>
<<<<<<< HEAD
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

=======
>>>>>>> 4f687d3 (Add files)
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<?php
            header('Content-Type:appication/xls');
            header('Content-Disposition:attachment;filename=month_report.xls');
            ?>
<body>
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
            <table  class='table table-bordered my-4 ' style="align-items:center">
            <thead >
            <tr >
                <th class="text-center">Event Name</th>
                <th class="text-center">Event Date</th>
                <th class="text-center"> Event Description</th>
                <th class="text-center">Event Start Time</th>
                <th class="text-center">Event End Time</th>
                <th class="text-center">Organization Institute</th>
                <th class="text-center">Number of participants</th>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                <th class="text-center">Event Place</th>
=======
>>>>>>> 4dd1ec8 (month report)
=======
>>>>>>> 58a66d1 (month report)
=======
>>>>>>> d4f288e (month report done)
=======
>>>>>>> a735689 (month report done)
=======
                <th class="text-center">Event Place</th>
>>>>>>> 20ec2bd (seperate folders)
            </tr>
            </thead>
            <tbody class="bg-primary">
            <?php
            if(isset($_GET['month_report'])){
                $month=$_GET['month'];
                $year=$_GET['year'];
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $get_event="select * from `EVENT` where MONTH(event_date)='$month' and YEAR(event_date)='$year' and status_value='approved' ";
            $result=mysqli_query($con,$get_event);
            if($result===false){
                die(mysqli_error($con));
            }
=======
            $get_event="Select * from `EVENT` where MONTH(event_date)=$month and YEAR(event_date)=$year and status_value='approved'";
            $result=mysqli_query($con,$get_event);
>>>>>>> 4dd1ec8 (month report)
=======
            $get_event="select * from `EVENT` where MONTH(event_date)='$month' and YEAR(event_date)='$year' and status_value='approved' ";
            $result=mysqli_query($con,$get_event);
            if($result===false){
                die(mysqli_error($con));
            }
>>>>>>> a8eddd9 (month report done)
=======
            $get_event="Select * from `EVENT` where MONTH(event_date)=$month and YEAR(event_date)=$year and status_value='approved'";
            $result=mysqli_query($con,$get_event);
>>>>>>> 58a66d1 (month report)
=======
            $get_event="select * from `EVENT` where MONTH(event_date)='$month' and YEAR(event_date)='$year' and status_value='approved' ";
            $result=mysqli_query($con,$get_event);
            if($result===false){
                die(mysqli_error($con));
            }
>>>>>>> dbb484b (month report done)
=======
            $get_event="Select * from `EVENT` where MONTH(event_date)=$month and YEAR(event_date)=$year and status_value='approved'";
            $result=mysqli_query($con,$get_event);
>>>>>>> d4f288e (month report done)
=======
            $get_event="select * from `EVENT` where MONTH(event_date)='$month' and YEAR(event_date)='$year' and status_value='approved' ";
            $result=mysqli_query($con,$get_event);
            if($result===false){
                die(mysqli_error($con));
            }
>>>>>>> a7b1e3c (month report done)
=======
            $get_event="Select * from `EVENT` where MONTH(event_date)=$month and YEAR(event_date)=$year and status_value='approved'";
            $result=mysqli_query($con,$get_event);
>>>>>>> a735689 (month report done)
=======
            $get_event="select * from `EVENT` where MONTH(event_date)='$month' and YEAR(event_date)='$year' and status_value='approved' ";
            $result=mysqli_query($con,$get_event);
            if($result===false){
                die(mysqli_error($con));
            }
>>>>>>> 72a1f3e (month report done)
            while($row=mysqli_fetch_assoc($result)){
                $event_name=$row['event_name'];
                $event_date=$row['event_date'];
                $event_description=$row['event_description'];
                $event_start_time=$row['event_start_time'];
                $event_end_time=$row['event_end_time'];
                $organization_institute=$row['organization_institute'];
                $students_total_number=$row['students_total_number'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $ar_name=$row['ar_name'];
=======
>>>>>>> 4dd1ec8 (month report)
=======
>>>>>>> 58a66d1 (month report)
=======
>>>>>>> d4f288e (month report done)
=======
>>>>>>> a735689 (month report done)
=======
                $ar_name=$row['ar_name'];
>>>>>>> 20ec2bd (seperate folders)
                echo"<tr class='text-center text-light'><td> $event_name</td>
                <td> $event_date</td>
                <td> $event_description</td>
                <td> $event_start_time</td>
                <td> $event_end_time</td>
                <td>$organization_institute</td>
                <td>$students_total_number</td>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 20ec2bd (seperate folders)
                <td>$ar_name</td>
                </tr>
                ";
            }
       
            
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                </tr>
                ";
            }
>>>>>>> 4dd1ec8 (month report)
=======
>>>>>>> a8eddd9 (month report done)
=======
                </tr>
                ";
            }
>>>>>>> 58a66d1 (month report)
=======
>>>>>>> dbb484b (month report done)
=======
                </tr>
                ";
            }
>>>>>>> d4f288e (month report done)
=======
>>>>>>> a7b1e3c (month report done)
=======
                </tr>
                ";
            }
>>>>>>> a735689 (month report done)
=======
>>>>>>> 72a1f3e (month report done)
            ?>
            </tbody>
            
            </table>
            </div>
        </div>    
</div>    
</body>
</html>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7602cd1 (month report)
=======
>>>>>>> d4f288e (month report done)
=======
>>>>>>> 9278f26 (month report)
=======
>>>>>>> a735689 (month report done)
