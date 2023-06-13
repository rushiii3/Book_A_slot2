<?php
session_start();
<<<<<<< HEAD
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["user_type"]))
=======
if(!isset($_SESSION["user_email"]) )
>>>>>>> db0b766 (done)
{
  echo("<script>window.location='../user/sign_in.php';</script>");
}
else{
  $user_email = $_SESSION["user_email"];
  $user_name = $_SESSION["user_full_name"];
<<<<<<< HEAD
  $user_type = $_SESSION["user_type"];
  /*
  if($user_type!=="p")
  {
    echo("<script>window.location='../user/sign_in.php';</script>");
  }*/
=======
>>>>>>> db0b766 (done)
}
?>