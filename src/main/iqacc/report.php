<?php
include '../connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Report</title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />
</head>
<body>
<?php
            include "navigation.html"
            ?>
        <div class="row">
        <div class="col-lg-5 m-auto">
<div class="container mt-5 mb-5 shadow p-3 mb-5 bg-body" id="main_body" style="border-radius: 20px">
           
            <p class="fs-3 text-center fw-bold">
                    Get information of close events.
            </p>
            <form action="main_report.php" method="POST" enctype="multipart/form-data">
            <div class="form-outline w-75 m-auto  mt-5">
                    <label for="organizer" class="form-label fw-bold">select department </label>
                    <select name="organizer" class='w-100 m-auto form-control' id="organizer">
                        <?php
                        $all_organizer=array();
                        $get_organizations="SELECT distinct DEPARTMENT.department_name FROM `EVENT` JOIN `DEPARTMENT` on EVENT.dep_id=DEPARTMENT.department_id  where status_value='Approved' and DEPARTMENT.department_name<>'Others' and EVENT.event_status='Closed'";
                        $result=mysqli_query($con,$get_organizations);
                        while($row=mysqli_fetch_assoc($result)){
                            $all_organizer[]=$row['department_name'];
                            $organizer=$row['department_name'];
                            echo "<option  value='$organizer'>$organizer</option>  ";
                        ?>
                        <?php
                        }
                        ?>    
                    </select>
            </div>
            <div class="form-outline w-75 m-auto  mt-5">
                        <label for="date" class="form-label w-100 fw-bold">Date</label><br>
                        <input type="date" class="form-control rounded-start border-end-0" id="selectDate"
                             name="date" id="date">
            </div>
            <!-- <div class="form-outline w-75 m-auto  mt-5">
                    <label for="date" class="form-label fw-bold">Select Date on which events occured </label>
                    <select name="date" class='w-100 m-auto form-control' id="date">
                        <?php
                    //     foreach($all_organizer as $organizer){
                    //     $get_date_for_organization="SELECT DISTINCT EVENT.event_date,EVENT.organization_institute,EVENT.event_id from `EVENT` join `CLOSE_EVENT` on EVENT.event_id=CLOSE_EVENT.event_id where EVENT.organization_institute<>'Others' and EVENT.event_status='Closed' and EVENT.status_value='Approved' and EVENT.organization_institute='$organizer'";
                    //     $result=mysqli_query($con,$get_date_for_organization);
                    //     while($row=mysqli_fetch_assoc($result)){
                    //         $date=$row['event_date'];
                    //         echo "<option  value='$date'>$date</option> ";
                    //     }
                    // }
                        ?>    
                    </select>
            </div> -->
            <div class="mb-5 mt-5 form-outline d-flex align-item-center m-auto">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary px-5 py-2 ms-5 mt-3">
                            Submit
                        </button>
                    </div>
            </form>
        </div>
        </div>
</div>

</body>
</html>