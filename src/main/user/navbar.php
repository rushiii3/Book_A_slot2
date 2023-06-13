
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .nav-link:hover {
            background-color: rgba(0, 77, 255, 0.5);
            border-radius: 20px;
            color: white;
        }
    </style>
</head>
<?php
         include("../config/session.php");
         require "../connection/connect.php";
         require_once("../loader.html"); 
     ?>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid p-1">
            <a class="navbar-brand text-primary ms-3 fw-bolder" href="home.php">GACbooker</a>
            <button class="navbar-toggler" type="button"  name="showNav" id="showNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-1 px-3 fw-bold" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-1 px-3 dropdown-toggle fw-bold" href="#" id="DropDown">
                            View
                        </a>
                        <ul class="dropdown-menu bg-light" id="DropDownMenu">
                            <li><a class="dropdown-item nav-link mx-1 px-3 fw-bold" href="list.php">List</a></li>
                            <li><a class="dropdown-item nav-link mx-1 px-3 fw-bold" href="view_bydate.php">Date</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 px-3 fw-bold" href="booking.php">Book Slot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 px-3 fw-bold" href="status.php">Check Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 px-3 fw-bold" href="cancel.php">Cancel Slot</a>
                    </li>
                    <?php
                     $list_of_open_events="SELECT * from `EVENT` where event_date<CURDATE() and status_value='approved' and event_status='Open' and user_name='$user_email'";
                     $result=mysqli_query($con,$list_of_open_events);
                     $count=0;
                     while($row=mysqli_fetch_assoc($result)){
                        $count++;
                     }
                     
                    if($count>=1){
                        echo '<li class="nav-item">
                        <a class="nav-link mx-1 px-3 fw-bold" href="../user/list_of_open_events.php">See Opened Events</a>
                    </li>';
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link mx-1 px-3 fw-bold" id="logout" href="../config/logout.php" style="background-color: rgba(0,77,255,0.5);border-radius: 20px;color: white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        $('#showNav').on('click', function () {
            $('#navbarSupportedContent').toggle(300);
        });
        $('#DropDown').on('click', function () {
            $('#DropDownMenu').toggle(300);
        });
    </script>
</body>
</html>
