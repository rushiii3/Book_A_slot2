<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <p>hi</p>
    <button type="button" id="click">click</button>
    <script>
$('#click').on('click',function()
{
    console.log("yes");
    var sendInfo = 
        {
    "event_name":"App launch by rushi",
    "event_description":"event_description jaude ree",
    "event_date":"2023-06-20",
    "event_time":"10:00:00",
    "event_image":"event_image tuza saathi kay pn",
    "event_registration_link":"https://www.google.com"


};
    $.ajax({
        type: "GET",
        url: "https://alumniandroidapp.000webhostapp.com/EventInsertFromAudiBookingApi.php?apikey=12345",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: JSON.stringify(sendInfo),
        success: function (msg) {
            console.log(msg);
        }
        
    });
})
        </script>
</body>
</html>