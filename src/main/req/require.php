<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <title>Home</title>
  <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />
</head>
<body>
  <?php
    require("../config/session.php");
    require_once("../loader.html");
    require "../connection/connect.php";
    if($user_type=="r")
  {
  }else{
    echo("<script>window.location='../user/sign_in.php';</script>");
  }
  ?>
  
  <main id="main">
    <?php
      include("navigation.html");
    ?>
    <div class="w-100 d-flex justify-content-between align-items-center mt-3">
    <button class="btn"><i class="bi bi-caret-left-fill fa-10x" style="font-size: 1rem;font-size: clamp(2rem, 3.5vw, 6rem);"></i></button>
    <span style="font-size: 1rem;font-size: clamp(2rem, 3.5vw, 6rem);">29 DECEMBER 2023</span>
    <button class="btn"><i class="bi bi-caret-right-fill fa-10x" style="font-size: 1rem;font-size: clamp(2rem, 3.5vw, 6rem);"></i></button>
    </div>

    <div class="container">
        <div class="row mt-5">
            
            <?php 
            $get_venue_names = "SELECT * FROM AUDI_ROOM" ;
            $result_of_query = mysqli_query($con,$get_venue_names);
            if(mysqli_num_rows($result_of_query)>0)
            {
                while($row_of_venue = mysqli_fetch_assoc($result_of_query))
                {
                    $venue = $row_of_venue['ar_name'];

                    ?>
                    <table class="table table-responsive table-striped table-bordered">
            <thead>
                <tr>
                <th colspan="4"><?php echo($venue); ?></th>
                </tr>
                <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Event Name</th>
                <th scope="col">Event Time</th>
                <th scope="col">Event Requirement</th>
                </tr>
            </thead>
            <?php
                    $get_events = "SELECT * FROM `EVENT` WHERE ar_name = '$venue' AND status_value = 'Approved' ";
                    $result_of_events = mysqli_query($con,$get_events);
                    if(mysqli_num_rows($result_of_events)>0)
                    {
                        while($row_of_event = mysqli_fetch_assoc($result_of_events))
                        {
                            ?>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><?php echo($row_of_event['event_name']); ?></td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            </tbody>
</table>
                            <?php
                        }
                    }
                }
            }
            ?>
        

        </div>
    </div>
    
  </main>
</body>
</html>
