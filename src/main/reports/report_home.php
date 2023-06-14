<?php
include '../connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

    <link rel='stylesheet' type='text/css' href='../css/images.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>

    img{
    display: block;
    width: 500px;
    height: 500px;
    margin: 0 auto;
    transition: 0.3s;
}
.btn_style{
  display: flex;
  justify-content: center;
  align-items: center;
   /* Adjust the height according to your needs */
}
</style>
    <title>Reports</title>
</head>

<body>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
            <?php
                include '../admin/admin_navbar.html';
                ?>
                <button class="btn btn-primary w-50 m-auto d-flex justify-content-center fw-bolder" style="align-items: center;">REPORTS PANEL</button>
                <a href="../reports/overall_report.php"><strong class="text-center d-flex justify-content-center" >click here to get short summary</strong></a>
                <div class="row mt-5">
                    <div class="col-md-5 col-lg-5 m-auto">
                        <img src="" alt="" id="image" >
                        <!-- montwise reports -->
                        <button class="btn btn-primary mt-3 m-auto d-flex justify-content-center" data-toggle="modal" data-target="#exampleModalLabel" >Get Month Wise Report</button>
                        
                    </div>
                    <div class="col-md-5 col-lg-5 m-auto">
                        <img src="" alt="" id="room">
                        <!-- room occupacy report -->
                        <a href="../reports/room_occupacy.php" class="text-decoration:none" ><button class="btn btn-primary mt-3 m-auto d-flex justify-content-center" >Room Occupacy Report</button></a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-5 col-lg-5 m-auto">
                    <img src="" alt="" id="cancel" >
                        <a class="col-md-5 col-lg-5 m-auto text-decoration:none" href="../reports/cancel_report.php"><button class=" m-auto btn btn-primary mt-3 m-auto d-flex justify-content-center">Cancelled Event Report</button></a>
                </div>
                    <div class="col-md-5 col-lg-5 m-auto">
                    <img src="" alt="" id="guest" >
                    <!-- <div class="col-md-5 col-lg-5 m-auto"> -->
                        <button class=" btn btn-primary mt-3 m-auto d-flex justify-content-center" data-toggle="modal" data-target="#resource">Resource Person Report</button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-5 col-lg-5 m-auto">
                    <img src="" alt="" id="attendance" >
                    <button class=" btn btn-primary mt-3 m-auto d-flex justify-content-center" data-toggle="modal" data-target="#present">Attendance Report</button>

                        <!-- <a class="col-md-5 col-lg-5 m-auto text-decoration:none" href="../reports/attendance.php"><button class=" m-auto btn btn-primary mt-3 m-auto d-flex justify-content-center">Attendance Report</button></a> -->
                </div>
                    <div class="col-md-5 col-lg-5 m-auto">
                    <img src="" alt="" id="outsider" >
                    <button class=" btn btn-primary mt-3 m-auto d-flex justify-content-center" data-toggle="modal" data-target="#out">Outsider Report</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ../js/report_img.js -->
    <!-- <script src="../.././js/report_img.js"></script>    -->

    <script>
      let image=document.getElementById('image');
        let images=['../.././img/m1.jpg','../.././img/m2.jpg','../.././img/m3.jpg'];
        setInterval(function(){
            let random=Math.floor(Math.random()*3);
            image.src=images[random];
        },800);

        let room=document.getElementById('room');
        let rooms=['../.././img/ar1.jpg','../.././img/ar2.jpg','../.././img/ar3.jpg'];
        setInterval(function(){
            let random=Math.floor(Math.random()*3);
            room.src=rooms[random];
        },800);

        let cancel=document.getElementById('cancel');
       let cancels=['../.././img/c1.jpg','../.././img/c2.jpg','../.././img/c3.jpg'];
       setInterval(function(){
        let random=Math.floor(Math.random()*3);
        cancel.src=cancels[random];
       },800);

       let guest=document.getElementById('guest');
       let guests=['../.././img/rp2.jpg','../.././img/rp3.jpg','../.././img/rp4.jpg'];
       setInterval(function(){
        let random=Math.floor(Math.random()*3);
        guest.src=guests[random];
       },800);

       let attendance=document.getElementById('attendance');
       let attendances=['../.././img/att1.jpg','../.././img/att2.jpg','../.././img/att3.jpg'];
       setInterval(function(){
        let random=Math.floor(Math.random()*3);
        attendance.src=attendances[random];
       },800);

       let outsider=document.getElementById('outsider');
       let outsiders=['../.././img/out1.jpg','../.././img/out2.jpg','../.././img/out3.jpg'];
       setInterval(function(){
        let random=Math.floor(Math.random()*3);
        outsider.src=outsiders[random];
       },800);
    </script>
</body>
<!-- Modal for month report-->
<div class="modal fade" id="exampleModalLabel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="../reports/month_report.php" method='post'>
      <div class="modal-body">
      <h1 class="modal-title fs-5" id="exampleModalLabel"> Month Wise Report</h1>
            <div class="form-outline w-100 m-auto mt-3">
                <label for="month" class="form-label fw-bold">Select Month:</label>
                <select name="month" id="month">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
                </select>
            </div>
                <div class="form-outline w-100 m-auto  mt-3">
                    <label for="year" class="form-label fw-bold">Enter a year </label>
                    <input type="number" id="year" name="year" class="form-control" placeholder="eg.2023">
                </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary"  name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="month_report">OK</button>
      </div>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- modal for outsider report -->
<div class="modal fade" id="out" tabindex="-1" aria-labelledby="out" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <form action="../reports/outsider_report.php" method="post">
      <div class="modal-body">
      <h1 class="modal-title fs-5 text-center" id="out">Outsider Information</h1>
        <div class="form-outline w-100 m-auto  mt-3">
                    <label for="year" class="form-label fw-bold">Enter a Academic year </label>
                    <input type="text" id="year" name="year" class="form-control" placeholder="eg.2023-2024">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name='outsider_report'>OK</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
<!-- modal for attendance report -->
<div class="modal fade" id="present" tabindex="-1" aria-labelledby="present" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <form action="../reports/attendance.php" method="post">
      <div class="modal-body">
      <h1 class="modal-title fs-5 text-center" id="out">Department Wise attendance</h1>
        <div class="form-outline w-100 m-auto  mt-3">
                    <label for="year" class="form-label fw-bold">Enter a Academic year </label>
                    <input type="text" id="year" name="year" class="form-control" placeholder="eg.2023-2024">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name='outsider_report'>OK</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
<!-- Modal for resource person report-->
<div class="modal fade" id="resource" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="../reports/resource_person.php" method="post">
      <div class="modal-body">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Resource Person Information</h1>
      <div class="form-outline w-100 m-auto  mt-3">
                    <label for="year" class="form-label fw-bold">select organization/institute who invited resource persons:</label>
                    <select name="organizer" class='w-50 m-auto' id="organizer">
                        <?php
                        $get_organizations="SELECT distinct event.organization_institute FROM `EVENT` JOIN (SELECT event_id,full_name from `RESOURCE_PERSON` GROUP BY event_id)`resource_person` on event.event_id=resource_person.event_id where status_value='approved'";
                        $result=mysqli_query($con,$get_organizations);
                        while($row=mysqli_fetch_assoc($result)){
                            $organizer=$row['organization_institute'];
                            echo "<option  value='$organizer'>$organizer</option>   ";
                        }
                        ?>
                        
                    </select>
        </div>
        <div class="form-outline w-100 m-auto  mt-3">
                    <label for="year" class="form-label fw-bold">Enter a Academic year </label>
                    <input type="text" id="year" name="year" class="form-control" placeholder="eg.2023-2024">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name='resource_person'>OK</button>
      </div>
    </div>
    </form>
  </div>
</div>
<!--  -->

<!--  -->


</html>


        