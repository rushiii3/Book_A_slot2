<?php
require "../connection/connect.php";
  $event_info_query = "SELECT event_name,event_date FROM `EVENT` UNION SELECT `description`,`datee` FROM `disableDates` ";
  $result_of_event_info_query = mysqli_query($con, $event_info_query);
  echo(mysqli_num_rows($result_of_event_info_query));
  echo("<br>");
  if (mysqli_num_rows($result_of_event_info_query)>0) {
      while ($row_of_event_info = mysqli_fetch_assoc($result_of_event_info_query)) {
        echo($row_of_event_info['event_name']." = ".$row_of_event_info['event_date']);
        echo("<br>");

      }
    }

?>



