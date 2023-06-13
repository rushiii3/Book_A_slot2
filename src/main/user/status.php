<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4c514c7 (donee)

<meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
<<<<<<< HEAD
=======
>>>>>>> db0b766 (done)
=======
>>>>>>> 4c514c7 (donee)
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Check Status</title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />
    <style>
    </style>
</head>

<body>
    <?php
    include("../config/session.php");
    require "../connection/connect.php";
    require_once("../loader.html");
    ?>
    <main id="main">
        <?php
        include("navigation.html");
        ?>
        <div class="container mt-2">
            <div class="row p-3">
                <?php
                date_default_timezone_set("Asia/Calcutta");
                $today_date = date("Y-m-d");
<<<<<<< HEAD
<<<<<<< HEAD
                $get_events_pending_approved = "SELECT * FROM `EVENT` WHERE user_name = '$user_email' AND status_value in ('Approved','Not Approved','Pending') ORDER BY event_date";
                $result_of_events_pending_approved = mysqli_query($con, $get_events_pending_approved);
                if (mysqli_num_rows($result_of_events_pending_approved) > 0) {
                    while ($row_of_query = mysqli_fetch_assoc($result_of_events_pending_approved)) {
                        $event_status = $row_of_query['event_status'];
                        if($event_status=="Open" || $event_status=="")
                        {
=======
                $get_events_pending_approved = "SELECT * FROM `EVENT` WHERE user_name = '$user_email' AND status_value in ('Approved','Not Approved','Pending')  AND event_date > '$today_date' ORDER BY event_date";
                $result_of_events_pending_approved = mysqli_query($con, $get_events_pending_approved);
                if (mysqli_num_rows($result_of_events_pending_approved) > 0) {
                    while ($row_of_query = mysqli_fetch_assoc($result_of_events_pending_approved)) {
>>>>>>> db0b766 (done)
=======
                $get_events_pending_approved = "SELECT * FROM `EVENT` WHERE user_name = '$user_email' AND status_value in ('Approved','Not Approved','Pending') ORDER BY event_date";
                $result_of_events_pending_approved = mysqli_query($con, $get_events_pending_approved);
                if (mysqli_num_rows($result_of_events_pending_approved) > 0) {
                    while ($row_of_query = mysqli_fetch_assoc($result_of_events_pending_approved)) {
                        $event_status = $row_of_query['event_status'];
                        if($event_status=="Open" || $event_status=="")
                        {
>>>>>>> 3711305 (google drive api done)
                ?>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="card shadow p-1" style="width: auto;border-radius: 20px;">
                                <div class="card-body" style="<?php
                                                            if ($row_of_query['status_value'] == "Not Approved") {
                                                                echo ("opacity: 0.6;");
                                                            }
                                                            ?>">
                                    <h5 class="card-title"><?php echo ($row_of_query['event_name']); ?></h5>
                                    <div class="badge p-1 mb-2
                                        <?php
                                        if ($row_of_query['status_value'] == "Approved") {
                                            echo ("bg-success");
                                        } elseif ($row_of_query['status_value'] == "Pending") {
                                            echo ("bg-warning");
                                        } else {
                                            echo ("bg-secondary");
                                        }
                                        ?>
                                    ">
                                        <?php echo ($row_of_query['status_value']); ?>
                                    </div>
                                    <p class="card-text" style="text-align:justify;"> <span class="fw-bold">Description : </span> <?php echo ($row_of_query['event_description']); ?> </p>
                                    <p class="card-text"> <span class="fw-bold">Date : </span> <?php echo date("d M Y", strtotime($row_of_query['event_date'])); ?></p>
                                    <p class="card-text"> <span class="fw-bold">Time : </span> <?php echo date("g:i A", strtotime($row_of_query['event_start_time'])); ?> to <?php echo date("g:i A", strtotime($row_of_query['event_end_time'])); ?> </p>
                                    <p class="card-text"> <span class="fw-bold">Venue : </span> <?php echo ($row_of_query['ar_name']); ?> </p>
                                    <?php
                                    if ($row_of_query['status_value'] == "Not Approved") {
                                    ?>
                                        <p class="card-text bg-secondary text-white w-100 rounded p-2"> <span class="fw-bold">Reason: </span> <?php echo ($row_of_query['status_reason']); ?> </p>
                                    <?php
                                    } else {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3711305 (google drive api done)
                                        if($event_status=="Open")
                                        {
                                            ?>
                                            <button type="button" class="btn btn-primary btn-primary w-100 my-1" >Close Event</button>

                                            <?php
                                        }else{
                                            ?>
                                                <a href="cancel.php">What to cancel the event?</a>
                                            <?php
                                        }
                                    
<<<<<<< HEAD
=======
                                    ?>
                                        <a href="cancel.php">What to cancel the event?</a>
                                    <?php
>>>>>>> db0b766 (done)
=======
>>>>>>> 3711305 (google drive api done)
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php
<<<<<<< HEAD
<<<<<<< HEAD
                    }}
=======
                    }
>>>>>>> db0b766 (done)
=======
                    }}
>>>>>>> 3711305 (google drive api done)
                } else {
                ?>
                    <div class="col-lg-12 col-md-12 mb-5">
                        <p class="fs-2 text-center" style="margin-top:11rem;">
                            You have not booked any events<br>
                            <a type="button" class="btn btn-primary px-5 mt-3" href="booking.php">Book Now</a>
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        
    </main>
</body>

</html>
<?php
mysqli_close($con);
?>
