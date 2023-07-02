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
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

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
                include '../admin/admin_navbar.html';
                ?>
            </div>
        </div>
</div>
<?php
$get_organizer="SELECT department_name,department_acadamics,count(department_name) as cancel_org from `DEPARTMENT` join `EVENT` on DEPARTMENT.department_id=EVENT.dep_id WHERE DEPARTMENT.department_name<>'Others' and EVENT.status_value='Canceled' GROUP By DEPARTMENT.department_name ORDER by COUNT(department_name) desc LIMIT 5";
//$get_organizer="select organization_institute,COUNT(organization_institute) as cancel_org FROM `EVENT` where status_value='Canceled' and organization_institute <>'Others' GROUP BY organization_institute";
$result=mysqli_query($con,$get_organizer);
$organization=array();
$count_cancel_org=array();
while($row=mysqli_fetch_assoc($result)){
    $acadamics=$row['department_acadamics'];
    if($acadamics=='Junior College'){
    $organization[]=$row['department_name']." ".' JC';//x-axis data
    }
    else if($acadamics=='Degree College'){
        $organization[]=$row['department_name']." ".' DC';//x-axis data
    }
    else{
        $organization[]=$row['department_name']." ".' Commitee';//x-axis data
    }
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
                    <h3 class="text-center">Count of event(s) Cancelled in each department</h3>
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
$max_events_cancelled="SELECT count(status_reason),status_reason as first_cancel_reason from `DEPARTMENT` join `EVENT` on DEPARTMENT.department_id=EVENT.dep_id WHERE DEPARTMENT.department_name<>'Others' and EVENT.status_value='Canceled' GROUP By EVENT.status_reason ORDER by COUNT(status_reason) desc LIMIT 1";
//$max_events_cancelled="SELECT count(status_reason),status_reason  as first_cancel_reason from `EVENT` where organization_institute <>'Others' group by status_reason order by count(status_reason) desc limit 1";
$result=mysqli_query($con,$max_events_cancelled);
$row=mysqli_fetch_assoc($result);
$first_cancel_reason=$row['first_cancel_reason'];
//echo $first_cancel_reason;
$get_reason="SELECT count(department_name) as total,department_acadamics,department_name from `DEPARTMENT` join `EVENT` on DEPARTMENT.department_id=EVENT.dep_id WHERE DEPARTMENT.department_name<>'Others' and EVENT.status_value='Canceled' and EVENT.status_reason like '%$first_cancel_reason%' GROUP by DEPARTMENT.department_name";
//$get_reason="SELECT organization_institute,COUNT(organization_institute) as total from `EVENT` WHERE status_reason='$first_cancel_reason' and status_value='Canceled' GROUP by organization_institute";
$result1=mysqli_query($con,$get_reason);
while($row=mysqli_fetch_assoc($result1)){
    //echo $row['organization_institute'],$row['total'];
}
?>

<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-6 m-auto">
                        <h3 class="text-center"><strong>Primary</strong>  reason for events getting cancelled</h3>
                        <div id="piechart" style="width: 500px; height: 400px;"></div>
                        <!-- one piechart -->
                    </div>
                </div>
            </div>
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
         $get_reason="SELECT count(department_name) as total,department_acadamics,dep_name from `DEPARTMENT` join `EVENT` on DEPARTMENT.department_id=EVENT.dep_id WHERE DEPARTMENT.department_name<>'Others' and EVENT.status_value='Canceled' and EVENT.status_reason like '%$first_cancel_reason%' GROUP by DEPARTMENT.department_name";
         $result1=mysqli_query($con,$get_reason);
            while($row=mysqli_fetch_assoc($result1)){
                $acadamics=$row['department_acadamics'];
                if($acadamics=='Degree College'){
                echo "['".$row['department_name']." ".' DC'."',".$row['total']."],";
                }
                else if($acadamics=='Junior College'){
                    echo "['".$row['department_name']." ".' JC'."',".$row['total']."],";
                }
                else{
                echo "['".$row['department_name']." ".' Commitee'."',".$row['total']."],";
                }
            }
          ?>
        ]);
        var options = {
          title: 'Events cancelled due to <?php echo $first_cancel_reason;?>',
          width:700,
          height:500,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
     <!-- piechart for second reson of cancellation -->

</body>
</html>