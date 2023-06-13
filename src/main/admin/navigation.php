<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- upper line -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Nav bar</title>
    <style>
        /* style for links on navbar */
        .nav_link{
            font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 30px;
            transition: 0.5s;
            color:white;
            text-decoration: none;
        }
        .nav_link a:hover{
            /* background: #3498db; */
            color:#669999;
        }
    </style>
</head>
<body>
<div class="container-fluid nav-bg" style="height: 80px;background-color:#0033cc" >
<div class="row">
    <div class="col-md-10 mx-auto me-auto  d-flex">
    <div class="col-md-2 mx-auto my-4">
    <h4 style="color:white">Website Name</h4>
    </div>
     <div class="col-md-8  me-auto   my-4">
<ul class="nav justify-content-end ms-auto me-auto mb-lg-0 ">
  <li class="nav-item">
    <a class="nav-link  nav_link" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nav_link" href="#">Register</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link nav_link" href="#">Book</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link nav_link ">View</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link nav_link ">Contact</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link nav_link ">About</a>
  </li>
</ul>
     </div>
</div>
</div>
 </div>
</body>
</html>