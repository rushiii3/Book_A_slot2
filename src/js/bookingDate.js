$('#selectDate').on('focus',function(){
  $date = $('#selectDate').val();
  $Venue_name = $('#Venue_name').val();
  if($Venue_name!="Select Venue")
  {
    $.ajax({
      type: 'POST',
      url: 'ajax.php',
      data: {datee:$date,Venue_name:$Venue_name},
      success: function(data){
        console.log(data);
        $('#timeBlock').html(" ");
        $('#timeBlock').append(data);
          
      },
      error: function() {
          console.log(response.status);
      },
  })
  }
})
$('#Venue_name').on('change',function(){
  $date = $('#selectDate').val();
  $Venue_name = $('#Venue_name').val();
  if($date!="")
  {
    $.ajax({
      type: 'POST',
      url: 'ajax.php',
      data: {datee:$date,Venue_name:$Venue_name},
      success: function(data){
        console.log(data);
        $('#timeBlock').html(" ");
        $('#timeBlock').append(data);
          
      },
      error: function() {
          console.log(response.status);
      },
  })
  }
})

$('#no_of_rp').on('change',function(){
  $no_of_rp = $('#no_of_rp').val();
  if($no_of_rp=="No"){
    $('#rps_names').html(" ");
    $none_person = '<div style="display: inline-block;width:100%;"> <div class="col-12 mb-3"> <label for="rp_name" class="form-label">Resourse Person Full Name</label> <input type="text" value="'+"NA"+'" class="form-control" id="rp_name" placeholder="e.g. ....... " readonly></div><div class="col-12 mb-3"><label for="companyName" class="form-label">Company Name</label><input type="text" class="form-control" value="'+"NA"+'" readonly id="companyName" placeholder="e.g. ....... "></div><div class="col-12 mb-3"><label for="designation" class="form-label">Designation</label><input type="text" value="'+"NA"+'" readonly class="form-control" id="designation" name="designation" placeholder="e.g. ....... "></div><div class="col-12 mb-3"><label for="experience" class="form-label">Experience</label><input type="number" value="'+"0"+'" readonly class="form-control" id="experience" name="experience" placeholder="e.g. ....... "></div></div>';
    $('#rps_names').append($none_person);

  }else{
    $('#rps_names').html("");
    var mssg,i;
    var vars = [];
    for(i=0;i<$no_of_rp;i++)
    {
      vars['hello' + i] = '<div style="display: inline-block;width:100%;"> <div class="col-12 mb-3"> <label for="rp_name'+i+'" class="form-label">Resourse Person '+(i+1)+' Full Name </label> <input type="text" class="form-control" id="rp_name'+i+'" name="rp_name'+i+'" placeholder="e.g. ....... " ></div><div class="col-12 mb-3"><label for="companyName'+i+'" class="form-label">Company Name</label><input type="text" class="form-control" id="companyName'+i+'" name="companyName'+i+'" placeholder="e.g. ....... "></div><div class="col-12 mb-3"><label for="designation'+i+'" class="form-label">Designation</label><input type="text" class="form-control" id="designation'+i+'" name="designation'+i+'" placeholder="e.g. ....... "></div><div class="col-12 mb-3"><label for="experience'+i+'" class="form-label">Experience</label><input type="number" class="form-control" id="experience'+i+'" name="experience'+i+'" placeholder="e.g. ....... "></div>';
      $('#rps_names').append(vars['hello' + i]);

    }
  }
  
})






