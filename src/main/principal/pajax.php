<?php
require "../connection/connect.php";
if(!empty($_POST['accepteventid']))
{
    $event_id = $_POST['accepteventid'];
    $query_to_accept = "UPDATE `EVENT` SET `status_value` = 'Approved' WHERE `EVENT`.`event_id` = '$event_id'";
    if(mysqli_query($con,$query_to_accept))
    {
        echo("1");
    }else{
        echo("2");
    }
}
if(!empty($_POST['rejecteventid']) && !empty($_POST['reason']) )
{
    $reason =  mysqli_real_escape_string($con, $_POST['reason']);
    $id = mysqli_real_escape_string($con, $_POST['rejecteventid']);
    $query_to_reject = "UPDATE `EVENT` SET status_reason = '$reason', status_value = 'Not Approved' WHERE event_id ='$id' ";
    if(mysqli_query($con,$query_to_reject))
    {
        echo("1");
    }else{
        echo("2");
    }
}

if(!empty($_POST['accept_event_id_email']))
{
    $id = $_POST['accept_event_id_email'];
    $get_event_info = "SELECT * FROM `EVENT` WHERE event_id = '$id'";
    $result_event = mysqli_query($con,$get_event_info);
    if(mysqli_num_rows($result_event)>0)
    {
        while($row=mysqli_fetch_assoc($result_event))
        {
            $event_name = $row['event_name'];
            $event_date = $row['event_date'];
            $event_start_time = $row['event_start_time'];
            $event_end_time = $row['event_end_time'];
            $venue_name = $row['ar_name'];
        }
    }
    $get_user_info = "SELECT * FROM `OUTSIDER_INFO` WHERE event_id = '$id'";
    $result_user_info = mysqli_query($con,$get_user_info);
    if(mysqli_num_rows($result_user_info)>0)
    {
        while($row=mysqli_fetch_assoc($result_user_info))
        {
            $event_user_name = $row['outsider_name'];
            $event_user_email = $row['outsider_email'];
        }
    }
    ?>
    <div id="emailContent" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><style type="text/css">body, html { margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-size-adjust: none; width: 100% !important; }table td, table { }#outlook a { padding: 0px; }.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }.ExternalClass { width: 100%; }@media only screen and (max-width: 480px) {
   table tr td table.edsocialfollowcontainer {width: auto !important;} table, table tr td, table td { width: 100% !important; }
  img { width: inherit; }
  .layer_2 { max-width: 100% !important; }
  .edsocialfollowcontainer table { max-width: 25% !important; }
  .edsocialfollowcontainer table td { padding: 10px !important; }
  .edsocialfollowcontainer table { max-width: 25% !important; }
  .edsocialfollowcontainer table td { padding: 10px !important; }
}</style><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i &subset=cyrillic,latin-ext" data-name="open_sans" rel="stylesheet" type="text/css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css"></head><body style="padding:0; margin: 0;background: #f5f6f8" data-new-gr-c-s-check-loaded="14.1091.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1091.0"><table style="height: 100%; width: 100%; background-color: #f5f6f8;" align="center"><tbody><tr><td valign="top" id="dbody" data-version="2.31" style="width: 100%; height: 100%; padding-top: 15px; padding-bottom: 15px; background-color: #f5f6f8;"><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:640px" width="640" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><table class="layer_1" align="center" border="0" cellpadding="0" cellspacing="0" style="max-width: 600px; box-sizing: border-box; width: 100%; margin: 0px auto;"><tbody><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse; width: 100%; background-color: #f5f6f8;"><tbody><tr><td valign="top" class="edimg" style="padding: 5px; box-sizing: border-box; text-align: center;"><img src="https://api.smtprelay.co/userfile/fc9c45b8-8787-40a3-a935-23c33031daaa/logo11.jpeg" alt="Image" width="108" style="border-width: 0px; border-style: none; max-width: 108px; width: 100%;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 5px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><h2 class="text-center" style="text-align: center;"><strong></strong><strong>V.G. Vaze College of Arts, Science and Commerce (Autonomous)</strong></h2>
<p style="margin: 0px; padding: 0px;">
<b class="llfsGb KJY1Gc" jsname="gKZrRe" jsmodel="W2oOzd" jscontroller="PEXgde" data-clid="local-photo-browser" jsaction="rcuQ6b:npT2md;click:uMoMHf;" jsdata="QVhOy;_;AljjjE" data-ved="2ahUKEwjoiaKQkq__AhXU-zgGHQgdAO4Qy5oKKAB6BAgFEAQ">
</b></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="emptycell" style="padding: 16px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p style="margin: 0px; padding: 0px;">Hi&nbsp;<strong><?php echo($event_user_name) ?>!</strong></p><p style="margin: 0px; padding: 0px;"><br></p><p class="text-justify" style="text-align: justify; margin: 0px; padding: 0px;">We are delighted to inform you that your event venue request has been approved! On behalf of&nbsp;<strong>V.G. Vaze College of Arts, Science and Commerce (Autonomous)</strong><span style="text-align: left;">, we congratulate you on your upcoming event and look forward to working with you to make it a resounding success.</span></p><p class="text-justify" style="text-align: justify; margin: 0px; padding: 0px;"><span style="text-align: left;"><br></span></p><p style="margin: 0px; padding: 0px;">Event Details:<br><strong>Event Name:</strong> <?php echo($event_name); ?><br><strong>Date:</strong> <?php echo date("d F Y", strtotime($event_date)); ?><br><strong>Time:</strong> <?php echo date("g:i A", strtotime($event_start_time)); ?> to <?php echo date("g:i A", strtotime($event_end_time)); ?><br><strong>Venue: </strong><?php echo($venue_name); ?></p><p style="margin: 0px; padding: 0px;"><br></p><p style="margin: 0px; padding: 0px;">We believe that the <?php echo($venue_name); ?> is an excellent choice for your event and offers the ideal setting to accommodate your needs.</p><p style="margin: 0px; padding: 0px;"><br></p><p style="margin: 0px; padding: 0px;">Thank you for choosing our venue, and we look forward to working together.<br></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p style="margin: 0px; padding: 0px;">-GACbooker</p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="emptycell" style="padding: 20px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p class="text-center" style="line-height: 1.75em; text-align: center; margin: 0px; padding: 0px;"><span style="font-size: 11px;">If you no longer wish to receive mail from us, you can <a href="{unsubscribe}" style="background-color: initial; color: #5457ff; text-decoration: none;">unsubscribe</a></span><br><span style="font-size: 11px;">{accountaddress}</span></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></body></html>
</div>
<script> 
  function send()
  { 
    Email.send({ 
        SecureToken: '81b5fc89-513e-421c-ab1a-f690f117c594',
        To: 'hrushiop@gmail.com',
        From: 'audibooking55@gmail.com',
        Subject: 'Approval of Your Event Venue Request',
        Body: document.getElementById('emailContent').innerHTML,
        }).then(message => console.log(message));
    } 
    send()
        </script>
    <?php
}


if(!empty($_POST['email_reject_event_id']) && !empty($_POST['reason_to_reject_event']))
{
    $id = $_POST['email_reject_event_id'];
    $reason = $_POST['reason_to_reject_event'];
    $get_event_info = "SELECT * FROM `EVENT` WHERE event_id = '$id'";
    $result_event = mysqli_query($con,$get_event_info);
    if(mysqli_num_rows($result_event)>0)
    {
        while($row=mysqli_fetch_assoc($result_event))
        {
            $event_name = $row['event_name'];
            $event_date = $row['event_date'];
            $venue_name = $row['ar_name'];
        }
    }
    $get_user_info = "SELECT * FROM `OUTSIDER_INFO` WHERE event_id = '$id'";
    $result_user_info = mysqli_query($con,$get_user_info);
    if(mysqli_num_rows($result_user_info)>0)
    {
        while($row=mysqli_fetch_assoc($result_user_info))
        {
            $event_user_name = $row['outsider_name'];
            $event_user_email = $row['outsider_email'];
        }
    }
    ?>
        <div id="emailContent" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><style type="text/css">body, html { margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-size-adjust: none; width: 100% !important; }table td, table { }#outlook a { padding: 0px; }.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }.ExternalClass { width: 100%; }@media only screen and (max-width: 480px) {
   table tr td table.edsocialfollowcontainer {width: auto !important;} table, table tr td, table td { width: 100% !important; }
  img { width: inherit; }
  .layer_2 { max-width: 100% !important; }
  .edsocialfollowcontainer table { max-width: 25% !important; }
  .edsocialfollowcontainer table td { padding: 10px !important; }
  .edsocialfollowcontainer table { max-width: 25% !important; }
  .edsocialfollowcontainer table td { padding: 10px !important; }
}</style><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i &subset=cyrillic,latin-ext" data-name="open_sans" rel="stylesheet" type="text/css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css"></head><body style="padding:0; margin: 0;background: #f5f6f8" data-new-gr-c-s-check-loaded="14.1091.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1091.0"><table style="height: 100%; width: 100%; background-color: #f5f6f8;" align="center"><tbody><tr><td valign="top" id="dbody" data-version="2.31" style="width: 100%; height: 100%; padding-top: 15px; padding-bottom: 15px; background-color: #f5f6f8;"><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:640px" width="640" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><table class="layer_1" align="center" border="0" cellpadding="0" cellspacing="0" style="max-width: 600px; box-sizing: border-box; width: 100%; margin: 0px auto;"><tbody><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse; width: 100%; background-color: #f5f6f8;"><tbody><tr><td valign="top" class="edimg" style="padding: 5px; box-sizing: border-box; text-align: center;"><img src="https://api.smtprelay.co/userfile/fc9c45b8-8787-40a3-a935-23c33031daaa/logo11.jpeg" alt="Image" width="108" style="border-width: 0px; border-style: none; max-width: 108px; width: 100%;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 5px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><h2 class="text-center" style="text-align: center;"><strong></strong><strong>V.G. Vaze College of Arts, Science and Commerce (Autonomous)</strong></h2>
<p style="margin: 0px; padding: 0px;">
<b class="llfsGb KJY1Gc" jsname="gKZrRe" jsmodel="W2oOzd" jscontroller="PEXgde" data-clid="local-photo-browser" jsaction="rcuQ6b:npT2md;click:uMoMHf;" jsdata="QVhOy;_;AljjjE" data-ved="2ahUKEwjoiaKQkq__AhXU-zgGHQgdAO4Qy5oKKAB6BAgFEAQ">
</b></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="emptycell" style="padding: 16px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p style="margin: 0px; padding: 0px;">Hi&nbsp;<strong><?php echo($event_user_name) ?>!</strong></p>
<p style="margin: 0px; padding: 0px;"><br></p>
<p class="text-justify" style="text-align: justify; margin: 0px; padding: 0px;">We regret to inform you that we are unable to approve your event venue request for <?php echo($event_name) ?> of <?php echo($venue_name) ?> on <?php echo date("d F Y", strtotime($event_date)); ?>. Due to <strong> <?php echo($reason); ?> </strong><span style="text-align: justify;">, we cannot accommodate your request at this time.&nbsp;</span></p>
<p style="margin: 0px; padding: 0px;"><br></p>
<p style="margin: 0px; padding: 0px;">We apologize for any inconvenience caused and encourage you to explore alternative options</p>
<p style="margin: 0px; padding: 0px;"><br></p>
<p style="margin: 0px; padding: 0px;">Thank you for choosing our venue, and we look forward to working together.<br></p>
</td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p style="margin: 0px; padding: 0px;">-GACbooker</p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="emptycell" style="padding: 20px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p class="text-center" style="line-height: 1.75em; text-align: center; margin: 0px; padding: 0px;"><span style="font-size: 11px;">If you no longer wish to receive mail from us, you can <a href="{unsubscribe}" style="background-color: initial; color: #5457ff; text-decoration: none;">unsubscribe</a></span><br><span style="font-size: 11px;">{accountaddress}</span></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></body></html>
</div>
<script> 
  function send()
  { 
    Email.send({ 
        SecureToken: '81b5fc89-513e-421c-ab1a-f690f117c594',
        To: 'hrushiop@gmail.com',
        From: 'audibooking55@gmail.com',
        Subject: 'Rejection of Your Event Venue Request',
        Body: document.getElementById('emailContent').innerHTML,
        }).then(message => console.log(message));
    } 
    send()
        </script>
   <?php
}

?>