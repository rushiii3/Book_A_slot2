<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

  <button id="submitBtn">Submit</button>

  <?php
$event_name = "Rushi's event 5.25";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://alumniandroidapp.000webhostapp.com/EventInsertFromAudiBookingApi.php?apikey=12345',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>'{
    "event_name":"'.$event_name.'",
    "event_description":"event_description",
    "event_date":"2023-06-20",
    "event_time":"10:00:00",
    "event_image":"event_image",
    "event_registration_link":"https://www.google.com"

}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>

</body>
</html>
