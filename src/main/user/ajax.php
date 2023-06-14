<?php
require "../connection/connect.php";
if (!empty($_POST['fullname']) &&
    !empty($_POST['email']) &&
    !empty($_POST['department_namee']) &&
    !empty($_POST['password'])
) {
    $user_name = mysqli_real_escape_string($con, $_POST['fullname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $department_namee = mysqli_real_escape_string($con, $_POST['department_namee']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $insert_user_info = "INSERT INTO `USER` (`user_name`, `user_full_name`, `pwd`, `department_name`, `user_type`) VALUES ('$email', '$user_name', '$password', '$department_namee', 'o')";

    if (mysqli_query($con, $insert_user_info)) {
        echo ("1");
    } else {
        echo ("2");
        echo ("Error description: " . mysqli_error($con));
    }
}

if (!empty($_POST['email_login']) &&
    !empty($_POST['password_login'])
) {

    $email = mysqli_real_escape_string($con, $_POST["email_login"]);
    $password = mysqli_real_escape_string($con, $_POST["password_login"]);
    $user_info_query = "SELECT * FROM USER WHERE user_name = '$email' AND  pwd = '$password' ";
    $result_of_user_info = mysqli_query($con, $user_info_query);
    if (mysqli_num_rows($result_of_user_info) == 1) {
        while ($row = mysqli_fetch_assoc($result_of_user_info)) {
            $user_email = $row["user_name"];
            $user_full_name = $row["user_full_name"];
            $user_type = $row["user_type"];
            if ($user_type == "o") {
                echo ("1");
            } elseif($user_type == "a") {
                echo ("2");
            }elseif($user_type == "p") {
                echo ("3");
            }elseif($user_type == "i") {
                echo ("4");
            }else{
                echo("5");
            }
            session_start();
            $_SESSION["user_email"] = $email;
            $_SESSION["user_full_name"] = $user_full_name;
            $_SESSION["user_type"] = $user_type;
        }


    } else {
        echo ("no");
    }
}
if (!empty($_POST['datee']) && !empty($_POST['Venue_name']) ) {
    $datee = date('Y-m-d', strtotime($_POST["datee"]));
    $Venue_name = mysqli_real_escape_string($con, $_POST["Venue_name"]);
    $get_time_info = "SELECT * FROM `EVENT` WHERE `event_date` = '$datee' AND ar_name = '$Venue_name' AND status_value in ('Approved','Pending')";
    $result_of_time = mysqli_query($con, $get_time_info);
    if (mysqli_num_rows($result_of_time) > 0) {
        ?>
        <script>
            $start_time = $('.start-time');
            $end_time = $('.end-time');
            var i, x = $('.start-time');
            for (i = 0; i < x.length; i++) {
                $start_time.eq(i).prop('disabled', false);
                $end_time.eq(i).prop('disabled', false);
            }
            for (i = 0; i < x.length; i++) {
                <?php
                while ($row_of_result = mysqli_fetch_assoc($result_of_time)) {
                    ?>
                    if ("<?php echo(date('H:i', strtotime($row_of_result['event_start_time']))); ?>" == $start_time[i].attributes[1].value) {
                        do {
                            $start_time.eq(i).prop('disabled', true);
                            $end_time.eq(i).prop('disabled', true);

                            i = i + 1;
                        } while ("<?php echo( date('H:i', strtotime($row_of_result['event_end_time'])) ); ?>">=$start_time[i].attributes[1].value);
                    }
                    <?php

                }
                ?>
            }
        </script>
        <?php
    }else{
        ?>
        <script>
            $start_time = $('.start-time');
            $end_time = $('.end-time');
            var i, x = $('.start-time');
            for (i = 0; i < x.length; i++) {
                $start_time.eq(i).prop('disabled', false);
                $end_time.eq(i).prop('disabled', false);
            }
            </script>
        <?php
    }
}
if (!empty($_POST['eventid']) && !empty($_POST['reason'])) {
    $reason =  mysqli_real_escape_string($con, $_POST['reason']);
    $id = mysqli_real_escape_string($con, $_POST['eventid']);
    $query_to_cancel_slot = "UPDATE `EVENT` SET status_reason = '$reason', status_value = 'Canceled' WHERE event_id ='$id' ";
    if (mysqli_query($con, $query_to_cancel_slot)) {
        echo ("1");
    } else {
        echo ("2");
        echo ("Error description: " . mysqli_error($con));
    }
}

if (!empty($_POST['selectdatee']) && !empty($_POST['venue_name'])) {
    $dateee = date('Y-m-d', strtotime($_POST["selectdatee"]));
    $venue_name = mysqli_real_escape_string($con, $_POST["venue_name"]);
    $get_event_info_by_date = "SELECT * FROM `EVENT` WHERE event_date = '$dateee' AND ar_name = '$venue_name' AND status_value in ('Approved','Pending') ORDER BY event_start_time";
    $result_of_get_event_info_by_date = mysqli_query($con, $get_event_info_by_date);
    if (mysqli_num_rows($result_of_get_event_info_by_date) > 0) {
        while ($row_of_get_event_info_by_date = mysqli_fetch_assoc($result_of_get_event_info_by_date)) {
            $color_array = Array(
                '#FF0000', // Red
                '#0000FF', // Blue
                '#00FF00', // Green
                '#FFFF00', // Yellow
                '#FFA500', // Orange
                '#800080', // Purple
                '#00FFFF', // Cyan
                '#FF00FF', // Magenta
                '#008080', // Teal
                '#FFC0CB', // Pink
                '#00FF00', // Lime
                '#A52A2A', // Brown
                '#808080', // Gray
                '#000000'  // Black   
            );
            ?>
            <div class="col-12 mt-4"> 
                <p style="border-left:3px solid  <?php echo ($color_array[array_rand($color_array)]); ?> ; padding-left:2rem;">
                    <?php echo ($row_of_get_event_info_by_date['event_name']); ?>
                    <br>
                    <?php echo (date('H:i A', strtotime($row_of_get_event_info_by_date['event_start_time']))); ?> to <?php echo (date('H:i A', strtotime($row_of_get_event_info_by_date['event_end_time']))); ?>
                    <br>
                    <small> <?php echo ($row_of_get_event_info_by_date['organization_institute']); ?> </small>
                </p>
            </div>
            <hr>
            <?php
        }
    } else {
        echo '<div class="col-12 mt-4 text-center"> No Events  </div>';
    }
}

if(!empty($_POST['user_email']) 
            &&
    !empty($_POST['event_name'])
            &&
    !empty($_POST['event_Descr'])
            &&
    !empty($_POST['num_of_students'])
            &&
    !empty($_POST['department_namee'])
            &&
    !empty($_POST['Venue_name'])
            &&
    !empty($_POST['event_date'])
            &&
    !empty($_POST['event_start_time'])
            &&
    !empty($_POST['event_end_time'])
            &&
    !empty($_POST['requriment'])
            &&
    !empty($_POST['rp_names'])
            &&
    !empty($_POST['company_names'])
            &&
    !empty($_POST['designations'])
            &&
    !empty($_POST['experience'])
            &&
    !empty($_POST['insider'])
        

)
{
    date_default_timezone_set("Asia/Calcutta");
    $FourDigitRandomNumber = mt_rand(11111, 99999);
    $timestamp = date("Y-m-d H:i:s");
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $event_name = mysqli_real_escape_string($con, $_POST['event_name']);
    $event_Descr = mysqli_real_escape_string($con, $_POST['event_Descr']);
    $num_of_students = mysqli_real_escape_string($con, $_POST['num_of_students']);
    $department_namee = mysqli_real_escape_string($con, $_POST['department_namee']);
    $Venue_name = mysqli_real_escape_string($con, $_POST['Venue_name']);
    $event_date = date('Y-m-d', strtotime($_POST["event_date"]));
    $event_start_time = $_POST["event_start_time"];
    $event_end_time = $_POST["event_end_time"];
    $requriment = mysqli_real_escape_string($con, $_POST['requriment']);
    $rp_names = $_POST['rp_names'];
    $company_names = $_POST['company_names'];
    $designations = $_POST['designations'];
    $experience = $_POST['experience'];
    $query_insert_event_for_insider = "INSERT INTO `EVENT` (`event_id`, `event_name`, `event_date`, `event_start_time`, `event_end_time`, `event_description`, `students_total_number`, `status_value`, `organization_institute`, `request_date_time`, `user_name`, `ar_name`, `event_requriement`) VALUES ('$FourDigitRandomNumber','$event_name','$event_date','$event_start_time','$event_end_time','$event_Descr','$num_of_students','Pending','$department_namee','$timestamp','$user_email','$Venue_name','$requriment')";
    if(mysqli_query($con,$query_insert_event_for_insider))
    {
        $count = 0;
        for($i=0;$i<=sizeof($rp_names) && $i<sizeof($company_names) && $i<sizeof($designations) && $i<sizeof($experience);$i++ )
        {
            $resource_person_info = "INSERT INTO `RESOURCE_PERSON` (`full_name`,`company_name`,`designation`,`experience`,`event_id`) VALUES ('$rp_names[$i]','$company_names[$i]','$designations[$i]','$experience[$i]','$FourDigitRandomNumber')";
            if (mysqli_query($con, $resource_person_info)) {
                $count = $count + 1;   
            }
        }
        if(sizeof($rp_names)==$count)
        {
            echo("1");
        }else{
            echo("2");
        }
    }else{
        echo("2");
        echo ("Error description: " . mysqli_error($con));
    } 
}


if(!empty($_POST['user_email']) 
            &&
    !empty($_POST['event_name'])
            &&
    !empty($_POST['event_Descr'])
            &&
    !empty($_POST['num_of_students'])
            &&
    !empty($_POST['department_namee'])
            &&
    !empty($_POST['Venue_name'])
            &&
    !empty($_POST['event_date'])
            &&
    !empty($_POST['event_start_time'])
            &&
    !empty($_POST['event_end_time'])
            &&
    !empty($_POST['requriment'])
            &&
    !empty($_POST['rp_names'])
            &&
    !empty($_POST['company_names'])
            &&
    !empty($_POST['designations'])
            &&
    !empty($_POST['experience'])
            &&
    !empty($_POST['Institute_OrgName'])
            &&
    !empty($_POST['Institute_OrgName_email'])
            &&
    !empty($_POST['Institute_OrgName_phone_no'])
            &&
    !empty($_POST['Institute_OrgName_transaction_id'])
            &&
    !empty($_POST['others'])
)
{
    date_default_timezone_set("Asia/Calcutta");
    $FourDigitRandomNumber = mt_rand(11111, 99999);
    $timestamp = date("Y-m-d H:i:s");
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $event_name = mysqli_real_escape_string($con, $_POST['event_name']);
    $event_Descr = mysqli_real_escape_string($con, $_POST['event_Descr']);
    $num_of_students = mysqli_real_escape_string($con, $_POST['num_of_students']);
    $department_namee = mysqli_real_escape_string($con, $_POST['department_namee']);
    $Venue_name = mysqli_real_escape_string($con, $_POST['Venue_name']);
    $event_date = date('Y-m-d', strtotime($_POST["event_date"]));
    $event_start_time = $_POST["event_start_time"];
    $event_end_time = $_POST["event_end_time"];
    $requriment = mysqli_real_escape_string($con, $_POST['requriment']);
    $rp_names = $_POST['rp_names'];
    $company_names = $_POST['company_names'];
    $designations = $_POST['designations'];
    $experience = $_POST['experience'];
    $Institute_OrgName = mysqli_real_escape_string($con, $_POST['Institute_OrgName']);
    $Institute_OrgName_email = mysqli_real_escape_string($con, $_POST['Institute_OrgName_email']);
    $Institute_OrgName_phone_no = mysqli_real_escape_string($con, $_POST['Institute_OrgName_phone_no']);
    $Institute_OrgName_transaction_id = mysqli_real_escape_string($con, $_POST['Institute_OrgName_transaction_id']);

    $query_insert_event_for_outsider = "INSERT INTO `EVENT` (`event_id`, `event_name`, `event_date`, `event_start_time`, `event_end_time`, `event_description`, `students_total_number`, `status_value`, `organization_institute`, `request_date_time`, `user_name`, `ar_name`, `event_requriement`) VALUES ('$FourDigitRandomNumber','$event_name','$event_date','$event_start_time','$event_end_time','$event_Descr','$num_of_students','Pending','$department_namee','$timestamp','$user_email','$Venue_name','$requriment')";
    $query_to_insert_outsider_info = "INSERT INTO `OUTSIDER_INFO` (`outsider_name`, `outsider_email`, `outsider_phone`, `outsider_transaction_id`, `outsider_payment_date`, `event_id`) VALUES ('$Institute_OrgName', '$Institute_OrgName_email', '$Institute_OrgName_phone_no', '$Institute_OrgName_transaction_id', '2023-06-15', '$FourDigitRandomNumber')";
    if(mysqli_query($con,$query_insert_event_for_outsider))
    {
        if(mysqli_query($con,$query_to_insert_outsider_info))
        {
            $count = 0;
            for($i=0;$i<=sizeof($rp_names) && $i<sizeof($company_names) && $i<sizeof($designations) && $i<sizeof($experience);$i++ )
            {
                $resource_person_info = "INSERT INTO `RESOURCE_PERSON` (`full_name`,`company_name`,`designation`,`experience`,`event_id`) VALUES ('$rp_names[$i]','$company_names[$i]','$designations[$i]','$experience[$i]','$FourDigitRandomNumber')";
                if (mysqli_query($con, $resource_person_info)) {
                    $count = $count + 1;   
                }
            }
    
            if(sizeof($rp_names)==$count)
            {
                echo("1");
                
            }else{
                echo("2");
                echo ("Error description: " . mysqli_error($con));
            }
        }else{
            echo("2");
            echo ("Error description: " . mysqli_error($con));
        }
        
    }else{
        echo("2");
        echo ("Error description: " . mysqli_error($con));
    } 
}

if(!empty($_POST['user_email_forgot']) && !empty($_POST['password']))
{
    $user_email = mysqli_real_escape_string($con, $_POST['user_email_forgot']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $change_user_password = "UPDATE `USER` SET `pwd` = '$password' WHERE `USER`.`user_name` = '$user_email' ";
    if(mysqli_query($con,$change_user_password))
    {
        echo("1");
    }else{
        echo("2");
    }
}


if(!empty($_POST['event_id_change']) && !empty($_POST['imglink']))
{
    echo($_POST['imglink']);
}


if(!empty($_POST['sign_up_email']))
{
    $email = $_POST['sign_up_email'];
    $query_to_search_email = "SELECT * FROM USER WHERE user_name = '$email'";
    if(mysqli_num_rows(mysqli_query($con,$query_to_search_email))>0)
    {
        echo("1");
    }else{
        echo("2");
    }
}


mysqli_close($con);
?>