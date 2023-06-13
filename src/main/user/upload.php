<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DriveSubmIt App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../js/upload.js"></script>
</head>
<body>
<?php
        session_start();
        echo($_SESSION['name']);
    ?>
    <div>
    <input type="text" value="<?php echo($_SESSION['name']); ?>" id="event_id">
        <input type="file" id="files1" name="files[]">
        <input type="file" id="files2" name="files[]">
        <input type="file" id="files3" name="files[]">
        <input type="file" id="files4" name="files[]">

        <button id="upload">
            Upload 
        </button>
        <div id="progress-wrp">
            <div class="progress-bar">

            </div>
            <div class="status">
                0%
            </div>
        </div>
        <div id="result">
            
        </div>
    </div> 
</body>
</html>