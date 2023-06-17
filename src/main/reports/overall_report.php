<?php
include '../connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary Report</title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    img{
        height: 250px;
        width: 250px;
        margin:10px;
    }
</style>
</head>

<body>
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
            <?php
                include '../admin/admin_navbar.html';
                ?>
                <button class="btn btn-primary w-50 m-auto d-flex justify-content-center fw-bolder" style="align-items: center;">OVERALL SUMMARY</button>

                <div class="row mt-5">
                    <!-- row1 -->
                    <div class="col-md-5 col-lg-5 m-auto">
                        <!-- left side -->
                        <div style="background-color: #9999ff">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                            <img src="https://img.freepik.com/free-photo/large-audience-watching-crowded-city-nightlife-celebration-generated-by-ai_188544-27408.jpg?size=626&ext=jpg&ga=GA1.1.304178890.1681303369&semt=sph">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                $most_occupied_ar="SELECT ar_name as first_ar,count(ar_name) as occurance from `EVENT` where status_value='Approved' group by ar_name order by occurance desc LIMIT 1 ";
                                $result=mysqli_query($con,$most_occupied_ar);
                                $row=mysqli_fetch_assoc($result);
                                $ar_name= $row['first_ar'];
                                echo "<h2>Maximum time events occured in <strong class='fw-bolder'> $ar_name </strong> </h2>"
                                ?>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-5 col-lg-5 m-auto">
                         <!-- right side -->
                    <div style="background-color: #cc99ff">
                    <div class="row">
                            <div class="col-md-6 col-lg-6">
                            <img src="https://images.pexels.com/photos/1963622/pexels-photo-1963622.jpeg?auto=compress&cs=tinysrgb&w=600">
                            </div>

                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                $organizer="SELECT count(organization_institute) as max_organizer,organization_institute from `EVENT` where status_value='Approved' GROUP by organization_institute order by max_organizer desc limit 1";
                                $result=mysqli_query($con,$organizer);
                                $row=mysqli_fetch_assoc($result);
                                $organization_institute= $row['organization_institute'];
                                $count=$row['max_organizer'];
                                echo "<h2>Most of the events organized by <strong class='fw-bolder'> $organization_institute </strong> </h2>"
                                ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
                <div class="row mt-5">
                    <!-- row2 -->
                    <div class="col-md-5 col-lg-5 m-auto">
                        <!-- left side -->
                        <div style="background-color: #ffb3ff">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="https://img.freepik.com/free-photo/corporate-businessman-giving-presentation-large-audience_53876-101865.jpg?size=626&ext=jpg&ga=GA1.2.304178890.1681303369&semt=sph" alt="">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                // $max_resource_person="SELECT max(organization_institute) FROM `EVENT` WHERE event_id in (SELECT event_id FROM `RESOURCE_PERSON`) and status_value='approved'";
                                $max_resource_person="SELECT count(event.organization_institute) as total,event.organization_institute,resource_person.full_name FROM `EVENT` JOIN (SELECT event_id,full_name from `resource_person` GROUP BY event_id)`resource_person` on event.event_id=resource_person.event_id WHERE status_value='Approved' GROUP by organization_institute ORDER By total DESC LIMIT 1";
                                $result=mysqli_query($con,$max_resource_person);
                                $row=mysqli_fetch_assoc($result);
                                $resource_person_organized=$row['organization_institute'];
                                echo "<h2><strong>$resource_person_organized</strong> Invite  resource persons maximum time</h2>";
                                ?>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-5 col-lg-5 m-auto">
                         <!-- right side -->
                    <div style="background-color: #ccccff">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.QfwG0oQMcw3nZF5fPO1ykAHaE8&pid=Api&P=0&h=180" alt="">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                $max_events="SELECT event_date, COUNT(event_date) AS occurrences FROM `EVENT` where status_value='Approved' GROUP BY event_date ORDER BY occurrences DESC LIMIT 1";
                                $result=mysqli_query($con,$max_events);
                                $row=mysqli_fetch_assoc($result);
                                $date=$row['event_date'];
                                $count=$row['occurrences'];
                                echo "<h2>On <strong>$date</strong> maximum events occured</h2>";
                                ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
                <!-- new row -->
                <div class="row mt-5">
                    <!-- row2 -->
                    <div class="col-md-5 col-lg-5 m-auto">
                        <!-- left side -->
                        <div style="background-color: #f3b2b1">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.X4H3g7tEFozAVl0Fw-8TZgHaEJ&pid=Api&P=0&h=180">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                // $max_resource_person="SELECT max(organization_institute) FROM `EVENT` WHERE event_id in (SELECT event_id FROM `RESOURCE_PERSON`) and status_value='approved'";
                                $max_purpose="SELECT close_event_purpose,count(close_event_purpose) as purpose_count from `CLOSE_EVENT` group by close_event_purpose order by purpose_count desc limit 1";
                                $result=mysqli_query($con,$max_purpose);
                                $row=mysqli_fetch_assoc($result);
                                $event_purpose_value=$row['close_event_purpose'];
                                $event_purpose="SELECT close_event_purpose,count(close_event_purpose) as purpose_count from `CLOSE_EVENT` where  close_event_purpose like '%$event_purpose_value%' ";
                                $result_of_purpose=mysqli_query($con,$event_purpose);
                                if($result_of_purpose===false){
                                    die(mysqli_error($con));
                                }
                                $row=mysqli_fetch_assoc($result_of_purpose);
                                $purpose=$row['close_event_purpose'];
                                echo "<p>Most of the time Event <strong>purpose </strong>is $purpose</p>";
                                ?>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-5 col-lg-5 m-auto">
                         <!-- right side -->
                    <div style="background-color: #80dfff">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.dFmZXcsdyY6oYXNCXdIssAHaEz&pid=Api&P=0&h=180" alt="">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                $max_event_mode="SELECT close_event_mode, COUNT(close_event_mode) AS mode FROM `CLOSE_EVENT`  GROUP BY close_event_mode ORDER BY mode DESC LIMIT 1";
                                $result=mysqli_query($con,$max_event_mode);
                                $row=mysqli_fetch_assoc($result);
                                $mode=$row['close_event_mode'];
                               
                                echo "<h2>Most of the time events occured in <strong>$mode</strong> mode</h2>";
                                ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
                <div class="row mt-5">
                    <!-- row2 -->
                    <div class="col-md-5 col-lg-5 m-auto">
                        <!-- left side -->
                        <div style="background-color: #e5b3cd">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.497xvLO9t0RX4xrZneokywHaE8&pid=Api&P=0&h=180">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                // $max_resource_person="SELECT max(organization_institute) FROM `EVENT` WHERE event_id in (SELECT event_id FROM `RESOURCE_PERSON`) and status_value='approved'";
                                $attendance="SELECT SUM(male_students_count) AS male, SUM(female_students_count) AS female, CASE WHEN SUM(male_students_count) > SUM(female_students_count) THEN 'boys' ELSE 'girls' END AS max_sum_column FROM `CLOSE_EVENT`";
                                $result=mysqli_query($con,$attendance);
                                $row=mysqli_fetch_assoc($result);
                                mysqli_fetch_assoc($result_of_purpose);
                                $max_attendance=$row['max_sum_column'];
                        
                                echo "<h3>Most of the Events attained by <strong>$max_attendance </strong></h3>";
                                ?>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                    
                    <!-- <div class="col-md-5 col-lg-5 m-auto"> -->
                         <!-- right side -->
                    <!-- <div style="background-color: #4d79ff">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.dFmZXcsdyY6oYXNCXdIssAHaEz&pid=Api&P=0&h=180" alt="">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                // $max_event_mode="SELECT close_event_mode, COUNT(close_event_mode) AS mode FROM `CLOSE_EVENT`  GROUP BY close_event_mode ORDER BY mode DESC LIMIT 1";
                                // $result=mysqli_query($con,$max_event_mode);
                                // $row=mysqli_fetch_assoc($result);
                                // $mode=$row['close_event_mode'];
                               
                                // echo "<h2>Most of the time events occured in <strong>$mode</strong> mode</h2>";
                                ?>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>          
            </div>
        </div>
</div>           
</body>
</html>
