<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php
    include '../connection/connect.php';
    if(isset($_GET['event_id'])){
        $event_id=$_GET['event_id'];
        $info_to_send_mail="select * from `EVENT` where event_id=$event_id ";
        $result=mysqli_query($con,$info_to_send_mail);
        $row=mysqli_fetch_assoc($result);
        $email=$row['user_name'];
        $status_value=$row['status_value'];
        $status_reason=$row['status_reason'];
        $event_name=$row['event_name'];
        $event_date=$row['event_date'];
        $query_for_name="select * from `USER` where user_name='$email' ";
        $result1=mysqli_query($con,$query_for_name);
        $row=mysqli_fetch_assoc($result1);
        $name=$row['user_full_name'];
    }
    ?>
<div class='container-fluid mt-5'>
  <div class="row">
    <div class="container d-flex align-items-center justify-content-center " style="height: 80vh;">
    <div class="row">
        <div class="rounded border border-light bg-light">
            <h3>Click Here To Send Email</h3>
            <form method="post">
    <input type="submit" value="Send Email" onclick="sendEmail()" name='email_done'  >
  </form>
        </div>
    </div>
</div>
</div>
</div>
<?php
if(isset($_POST['email_done'])){
  header("location:./admin_home.php");
}?>
<div id="emailContent" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><style type="text/css">body, html { margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-size-adjust: none; width: 100% !important; }table td, table { }#outlook a { padding: 0px; }.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }.ExternalClass { width: 100%; }@media only screen and (max-width: 480px) {
        table tr td table.edsocialfollowcontainer {width: auto !important;} table, table tr td, table td { width: 100% !important; }
       img { width: inherit; }
       .layer_2 { max-width: 100% !important; }
       .edsocialfollowcontainer table { max-width: 25% !important; }
       .edsocialfollowcontainer table td { padding: 10px !important; }
       .edsocialfollowcontainer table { max-width: 25% !important; }
       .edsocialfollowcontainer table td { padding: 10px !important; }
     }</style><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
     crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i &subset=cyrillic,latin-ext" data-name="open_sans" 
     rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
     integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
     crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
     crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
    </head>
    <body style="padding:0; margin: 0;background: #f5f6f8" data-new-gr-c-s-check-loaded="14.1091.0" data-gr-ext-installed="" 
    data-new-gr-c-s-loaded="14.1091.0">
    <table style="height: 100%; width: 100%; background-color: #f5f6f8;" align="center">
        <tbody>
            <tr>
                <td valign="top" id="dbody" data-version="2.31" style="width: 100%; height: 100%; padding-top: 0px; padding-bottom: 0px; background-color: #f5f6f8;"><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:640px" width="640" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->
                    <table class="layer_1" align="center" border="0" cellpadding="0" cellspacing="0" 
                    style="max-width: 600px; box-sizing: border-box; width: 100%; margin: 0px auto;">
                    <tbody>
                        <tr>
                            <td class="drow" valign="top" align="center" style="background-color: #ffffff; 
                            box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse; width: 100%; background-color: #f5f6f8;"><tbody><tr><td valign="top" class="edimg" style="padding: 5px; box-sizing: border-box; text-align: center;"><img src="https://api.smtprelay.co/userfile/fc9c45b8-8787-40a3-a935-23c33031daaa/logo11.jpeg" alt="Image" width="108" style="border-width: 0px; border-style: none; max-width: 108px; width: 100%;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->
                            <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">
                                <table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%">
                                    <tbody>
                                        <tr>
                                            <td valign="top" class="edtext" style="padding: 5px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;">
                                                <h2 class="text-center" style="text-align: center;">
                                                <strong>V.G. Vaze College of Arts, Science and Commerce (Autonomous)</strong></h2>
     <p style="margin: 0px; padding: 0px;">
        <b class="llfsGb KJY1Gc" jsname="gKZrRe" jsmodel="W2oOzd" jscontroller="PEXgde" data-clid="local-photo-browser" 
        jsaction="rcuQ6b:npT2md;click:uMoMHf;" jsdata="QVhOy;_;AljjjE" data-ved="2ahUKEwjoiaKQkq__AhXU-zgGHQgdAO4Qy5oKKAB6BAgFEAQ">
        </b></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
    </td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;">
        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->
            <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">
                <table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%">
                    <tbody><tr><td valign="top" class="emptycell" style="padding: 16px;"></td></tr></tbody></table></div>
                    <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" 
                        style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->
                            <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">
                                <table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%">
                                    <tbody>
                                        <tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;">
                                            <span>​</span><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;">
                                                Hello <strong><?php echo $name;?></strong>,
                                            </p><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;"><br></p>
                                                <p class="text-center" style="text-align: center; margin: 0px; padding: 0px;"> Your Request of audi booking for 
                                                an event <strong><?php echo $event_name;?></strong> is <strong><?php echo $status_value;?></strong> 
                                                because of reason <?php echo $status_reason;?></p>
                                                <p class="text-center" style="text-align: center; margin: 0px; padding: 0px;"><br></p><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;"><br>
                                            </p><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;">
                                                  You scheduled event on  :<strong><?php echo $event_date;?></strong></p></td></tr></tbody></table></div>
                                                    <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr>
                                                        <td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->
                                                            <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">
                                                                <table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody>
                                                                    <tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;">
                                                                        <p style="margin: 0px; padding: 0px;">-GACbooker</p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                                                    </td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;">
                                                                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->
                                                                            <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">
                                                                                <table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody>
                                                                                    <tr><td valign="top" class="emptycell" style="padding: 20px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                                                                </td></tr>
                                                                                <tr>
                                                                                    <td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;">
                                                                                        <!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]-->
                                                                                            <div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;">
                                                                                                <table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%">
                                                                                                    <tbody><tr><td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;">
                                                                                                        <p class="text-center" style="line-height: 1.75em; text-align: center; margin: 0px; padding: 0px;">
                                                                                                            <span style="font-size: 11px;">If you no longer wish to receive mail from us, you can <a href="{unsubscribe}" 
                                                                                                                style="background-color: initial; color: #5457ff; text-decoration: none;">unsubscribe</a></span><br>
                                                                                                                <span style="font-size: 11px;">{accountaddress}</span></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                                                                                            </td></tr></tbody></table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                                                                                            </td></tr></tbody></table></body></html>
     </p>
  </div>


  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    function sendEmail() {
      Email.send({
        SecureToken: "81b5fc89-513e-421c-ab1a-f690f117c594",
        To: '<?php echo $email;?>',
        From: "audibooking55@gmail.com",
        Subject: "Updates regarding to audibooking",
        Body: document.getElementById('emailContent').innerHTML,
      }).then(message => alert(message));
    }
  </script>
  <?php
function hideDivision($divisionId, $shouldHide) {
    if ($shouldHide) {
        echo "<script>document.getElementById('$divisionId').style.display = 'none';</script>";
    }
}
?>
    <?php
    // Call the function and pass the division ID and the condition
    hideDivision('emailContent', true);
    ?>


</body>
</html>