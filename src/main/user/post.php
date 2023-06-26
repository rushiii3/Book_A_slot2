<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php
    require "../connection/connect.php";
    ?>
     <select class="form-control" >
        <optgroup label="SFC">
          <option value="Information Technology">Information Technology</option>
          <option value="Biotechnology">Biotechnology</option>
          <option value="Banking and Insurance">Banking and Insurance</option>
          <option value="Accounting and Finance">Accounting and Finance</option>
          <option value="BMS">BMS</option>
          <option value="BAMMC">BAMMC</option>
          <option value="BVoc">BVoc</option>
        </optgroup>
        <optgroup label="Arts">
          <option value="English">English</option>
          <option value="Economics">Economics</option>
          <option value="Hindi">Hindi</option>
          <option value="History">History</option>
          <option value="Marathi">Marathi</option>
          <option value="Psychology">Psychology</option>
          <option value="Sociology">Sociology</option>
          <option value="Political Science">Political Science</option>
        </optgroup>
        <optgroup label="Science">
          <option value="Botany">Botany</option>
          <option value="Chemistry">Chemistry</option>
          <option value="Mathematics">Mathematics</option>
          <option value="Physics">Physics</option>
          <option value="Zoology">Zoology</option>
        </optgroup>
        <optgroup label="Commerce">
          <option value="Accountancy">Accountancy</option>
          <option value="Commerce">Commerce</option>
          <option value="EVS">EVS</option>
          <option value="Business Economics">Business Economics</option>
          <option value="Business Law">Business Law</option>
        </optgroup>
       
      </select>


      <select class="form-control" id="dep_id">
        <option selected>Select a Department / Committee</option>
        <?php
        $get_dep = "SELECT * FROM dep GROUP BY acadamics";
        $result = mysqli_query($con,$get_dep);
        if(mysqli_num_rows($result)>0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            ?>
            <option value="<?php echo($row['acadamics']); ?>"><?php echo($row['acadamics']); ?></option>
            <?php
            ?>
          </optgroup>
            <?php
          }
        }
        ?>
      </select>

 <select id="dep_com_names">
  <option>Select your department/committee first</option>
</select>
 <script>
  $('#dep_id').on('change',function()
  {
    $dep_name =  $('#dep_id').val();
    $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: {dep_name: $dep_name },
            success: function(data){
                $('#dep_com_names').html("");
                $('#dep_com_names').html(data);
            },
            error: function() {
                console.log(response.status);
            },
        })
  })
  $('#dep_com_names').on('change',function()
  {
    $dep_name_id = $('#dep_com_names :selected').text();
  })
  </script>
</body>
</html>
