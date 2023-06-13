<?php
include '../connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Cancelled</title>
<<<<<<< HEAD
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

=======
>>>>>>> 4f687d3 (Add files)
    <style>
        .chartBox{
          width:700px 
        }
    </style>
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
<<<<<<< HEAD
                include '../user/navigation.html';
=======
                include '../navigation.html';
>>>>>>> 677e8c8 (all reports)
=======
                include '../user/navigation.html';
>>>>>>> 20ec2bd (seperate folders)
=======
                include '../admin/admin_navbar.html';
>>>>>>> bef689f (changes done)
=======
                include '../admin/admin_navbar.html';
=======
                include '../user/navigation.html';
>>>>>>> 4f687d3 (Add files)
>>>>>>> c4ed1f1 (Add files)
                ?>
            </div>
        </div>
</div>
<?php
$get_organizer="select organization_institute,COUNT(organization_institute) as cancel_org FROM `EVENT` where status_value='cancel' GROUP BY organization_institute";
$result=mysqli_query($con,$get_organizer);
$organization=array();
$count_cancel_org=array();
while($row=mysqli_fetch_assoc($result)){
    $organization[]=$row['organization_institute'];//x-axis data
    $count_cancel_org[]=$row['cancel_org'];//y-axis data
 }
//  print_r($organization);
//  print_r($count_cancel_org);
 $yLabel='No. of event';//y-axis label
?>  
<!-- code to plot graph -->
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto d-flex justify-content-center">
                <div class="chartBox">
                    <h3 class="text-center">Count of events Cancelled in each organization/institute</h3>
                    <canvas id="cancelChart"></canvas>
                </div>
            </div>
        </div>
</div>
<!-- code for bar graph -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // setup block
    //console.log(<?php echo json_encode($organization);?>);
     //console.log(<?php echo json_encode($count_cancel_org);?>)
    //console.log(<?php echo json_encode($yLabel);?>)
    const organization=<?php echo json_encode($organization);?>;
    const count_cancel_org=<?php echo json_encode($count_cancel_org);?>;
    const yLabel=<?php echo json_encode($yLabel);?>;
    const data={
        labels:organization,
        datasets:[{
            label:'count of events cancelled in each organization/institude',
            data:count_cancel_org,
            backgroundColor:[
                'rgba(255,162,54,0.2)',
            ],
            borderColor:[
                'rgba(255,162,54,1)',
            ],
            borderWidth:1
        }]
    };
    //config part
    const config={
        type:'bar',
        data,
        options:{
            scales:{
                y:{
                    beginAtZero:true,
                    title:{
                        display:true,
                        text:yLabel,
                    },
                    ticks:{
                    font:{
                        size:16, // Set the font size for the y-axis ticks
                    }
                    }
                },
                x:{
                    ticks: {
                    font: {
                    size: 12, // Set the font size for the x-axis labels
                    }
                }
                }
            }
        }
    };
    //Render Block
    const myChart=new Chart(
        document.getElementById('cancelChart'),
        config
    );
</script>
<?php
//code showing primary reason for cancellation
$max_events_cancelled="SELECT max(status_reason)  as first_cancel_reason from `EVENT`";
$result=mysqli_query($con,$max_events_cancelled);
$row=mysqli_fetch_assoc($result);
$first_cancel_reason=$row['first_cancel_reason'];
//echo $first_cancel_reason;
$get_reason="SELECT organization_institute,COUNT(organization_institute) as total from `EVENT` WHERE status_reason='$first_cancel_reason' and status_value='cancel' GROUP by organization_institute";
$result1=mysqli_query($con,$get_reason);
while($row=mysqli_fetch_assoc($result1)){
    //echo $row['organization_institute'],$row['total'];
}
?>
<?php
//code showing second primary reason for cancellation of event
$second_max_events_cancelled="SELECT max(status_reason) as second_cancel_reason from `EVENT` where status_reason not in (SELECT max(status_reason) from `EVENT`) and status_value='cancel'";
$result=mysqli_query($con,$second_max_events_cancelled);
$row=mysqli_fetch_assoc($result);
$second_cancel_reason=$row['second_cancel_reason'];
//echo $second_cancel_reason;
$get_reason="SELECT organization_institute,COUNT(organization_institute) as total from `EVENT` WHERE status_reason='$second_cancel_reason' and status_value='cancel' GROUP by organization_institute";
$result1=mysqli_query($con,$get_reason);
?>
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
                <div class="row mt-5">
                    <div class="col-md-5 col-lg-5 m-auto">
                        <h3 class="text-center"><strong>Primary</strong>  reason for events getting cancelled</h3>
                        <div id="piechart" style="width: 500px; height: 400px;"></div>
                        <!-- one piechart -->
                    </div>
                    <div class="col-md-5 col-lg-5 m-auto">

<<<<<<< HEAD
                     <h3 class="text-center"><strong>Second </strong>  reason for events getting cancelled</h3>
=======
                     <h3 class="text-center"><strong>Second Primary</strong>  reason for events getting cancelled</h3>
>>>>>>> 4f687d3 (Add files)
                        <div id="pie" style="width: 500px; height: 400px;"></div>

                    <!-- one piechart -->
                    </div>
<!-- piechart  for maximum event cancellation result-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['organizations_institute', 'count'],
          <?php
         $get_reason="SELECT organization_institute,COUNT(organization_institute) as total from `EVENT` WHERE status_reason like '%$first_cancel_reason%' and status_value='cancel' GROUP by organization_institute";
         $result1=mysqli_query($con,$get_reason);
            while($row=mysqli_fetch_assoc($result1)){
                echo "['".$row['organization_institute']."',".$row['total']."],";
            }
          ?>
        ]);
        var options = {
          title: 'Events cancelled due to <?php echo $first_cancel_reason;?>',
          width:700,
          height:600,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
     <!-- piechart for second reson of cancellation -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
<<<<<<< HEAD
      function drawChart() {
=======

      function drawChart() {

>>>>>>> 4f687d3 (Add files)
        var data = google.visualization.arrayToDataTable([
            ['organizations_institute', 'count'],
          <?php
         $get_reason="SELECT organization_institute,COUNT(organization_institute) as total from `EVENT` WHERE status_reason like '%$second_cancel_reason%' and status_value='cancel' GROUP by organization_institute";
         $result1=mysqli_query($con,$get_reason);
            while($row=mysqli_fetch_assoc($result1)){
                echo "['".$row['organization_institute']."',".$row['total']."],";
            }
<<<<<<< HEAD
          ?>         
=======
          ?>
         
>>>>>>> 4f687d3 (Add files)
        ]);

        var options = {
          title: 'Events cancelled due to  <?php echo $second_cancel_reason;?>',
          width:700,
          height:600,
        };
<<<<<<< HEAD
        var chart = new google.visualization.PieChart(document.getElementById('pie'));
=======

        var chart = new google.visualization.PieChart(document.getElementById('pie'));

>>>>>>> 4f687d3 (Add files)
        chart.draw(data, options);
      }
    </script>
</body>
</html>