
$('#org_institue_name').hide();
$('#org_institue_email').hide();
$('#org_institue_phone').hide();
$('#org_institue_transaction_id').hide();

<<<<<<< HEAD

$(window).on('load', function(){
    setTimeout(addBackdrop, 2000); //wait for page load PLUS two seconds.
 });
 function addBackdrop(){
   $('#terms_and_condition').modal('show');
   $('#tnc_footer').hide();
 }
$('#tandcondlink').on('click',function(){
  $('#terms_and_condition').modal('show');
  $('#tnc_footer').show();
})
$('#iagree').on('click',function(){
  $('#check_box_terms_and_condition').prop('checked', true);
})
$('#check_box_terms_and_condition').on('click',function(){
  if($('#check_box_terms_and_condition').is(':checked')){
    
    $('#terms_and_condition').modal('show');
    $('#tnc_footer').show();
  }else{
    $('#terms_and_condition').modal('hide');
    $('#tnc_footer').show();
  }
  
})
=======
=======

>>>>>>> 7c6c46c (senddd)
=======
$('#org_institue_name').hide();
>>>>>>> d9efa5f (dd)
=======

//$('#org_institue_name').hide();
>>>>>>> 0b52915 (dd)
=======
>>>>>>> d9e0c02 (comit bro)
$('.tab').hide();
var currentTab = 0;
showTab(currentTab)
function showTab(n)
{
    $x = $('.tab');
    $x.eq(n).show();
    if (n === 0) {
    $('#nextBtn').addClass('first_page');
    $("#prevBtn").hide();
  } else {
    $('#nextBtn').removeClass('first_page');
    $('#nextBtn').removeClass('second_page');
    $("#prevBtn").show();
  }

  if(n === 1){
    $('#nextBtn').addClass('second_page');
    $('#nextBtn').removeClass('first_page');
  }

  if (n === 2) {
    $("#nextBtn").html("Submit");
    //$('#nextBtn').attr('onclick', 'submitValue()');
    //$('#nextBtn').attr('type', 'submit');
  } else {
    $("#nextBtn").html("Next");
    //$('#nextBtn').attr('onclick', 'nextPrev(1)');
    //$('#nextBtn').attr('type', 'button');
    //$("#nextBtn").removeClass("submit")
  }
  CurrentStep(n);
}
function nextPrev(n)
{
=======
$('#org_institue_name').hide();
$('#org_institue_email').hide();
$('#org_institue_phone').hide();
$('#org_institue_transaction_id').hide();


$(window).on('load', function(){
    setTimeout(addBackdrop, 2000); //wait for page load PLUS two seconds.
 });
 function addBackdrop(){
   $('#terms_and_condition').modal('show');
   $('#tnc_footer').hide();
 }
$('#tandcondlink').on('click',function(){
  $('#terms_and_condition').modal('show');
  $('#tnc_footer').show();
})
$('#iagree').on('click',function(){
  $('#check_box_terms_and_condition').prop('checked', true);
})
$('#check_box_terms_and_condition').on('click',function(){
  if($('#check_box_terms_and_condition').is(':checked')){
    
    $('#terms_and_condition').modal('show');
    $('#tnc_footer').show();
  }else{
    $('#terms_and_condition').modal('hide');
    $('#tnc_footer').show();
  }
  
})
$('#department_namee').on('change',function(){
<<<<<<< HEAD
>>>>>>> 3cf029e (commit)
    
=======
>>>>>>> 4c514c7 (donee)
    $department_namee = $('#department_namee').val();
    if($department_namee==="Others")
    {
        $('#org_institue_name').show();
        $('#org_institue_email').show();
        $('#org_institue_phone').show();
        $('#org_institue_transaction_id').show();
    }
    else{
      $('#org_institue_name').hide();
      $('#org_institue_email').hide();
      $('#org_institue_phone').hide();
      $('#org_institue_transaction_id').hide();
    }
<<<<<<< HEAD
    
<<<<<<< HEAD
}
function CurrentStep(n)
{
    var i, x = document.getElementsByClassName("stepper-item");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace("active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
/*
function Completed(n,currentTab)
{
    var i, x = document.getElementsByClassName("stepper-item");
    console.log(currentTab);
    if(n==1){
        if(currentTab<2)
    {
        console.log("inside 1");
        for(i=0;i<=currentTab;i++)
        {
            $step = $('.stepper-item');
            $step.eq(i).addClass("completed");
        } 
    }
        
    }
    else{
        console.log("inside -1");
        console.log(currentTab);
            $step = $('.stepper-item');
            $step.eq(currentTab-1).removeClass("completed");
        }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bc83ca0 (done)
$('#department_namee').on('change',function(){
    $department_namee = $('#department_namee').val();
    if($department_namee==="Others")
    {
<<<<<<< HEAD
        $('#org_institue_name').show();
        $('#org_institue_email').show();
        $('#org_institue_phone').show();
        $('#org_institue_transaction_id').show();
    }
    else{
      $('#org_institue_name').hide();
      $('#org_institue_email').hide();
      $('#org_institue_phone').hide();
      $('#org_institue_transaction_id').hide();
    }
}) 

=======
*/
<<<<<<< HEAD
>>>>>>> 4254869 (done)
 function validate1page()
 {
    var valid = true;
    $event_name = $('#eventName').val();
    $event_Descr = $('#eventDescription').val();
    $num_of_students = $('#no_of_stu_attending').val();
    $event_date = $('#selectDate').val();
    $event_start_time = $('#selectStartTime').val();
    $event_end_time = $('#selectEndTime').val();
    if($event_name!="")
    {
      if($event_Descr!=="")
      {
        if($num_of_students!=="")
        {
          if($event_date!=="")
          {
            valid = true;
          }else{
            $('.alert').show();
            $("#alert_inbox").text("Please eneter a date");
            hideAlert();
            valid = false;
          }
          
        }else{
          $('.alert').show();
          $("#alert_inbox").text("Please eneter Number of students attending the event");
          hideAlert();
          valid = false;
        }
        
      }
      else{
        showError("Please eneter Event Description");
        valid = false;
      }
      
    }
    else{
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
$('.section2').hide();
$('.section3').hide();
$('.section4').hide();
=======
=======
>>>>>>> 4c514c7 (donee)
}) 


$('.section2').hide();
$('.section3').hide();
<<<<<<< HEAD
>>>>>>> 3cf029e (commit)
=======
$('.section4').hide();
>>>>>>> 4c514c7 (donee)
$step = $('.stepper-item');
$step.eq(0).addClass("active");
$('#prevBtnSecond').on('click',function(){
    $('.section2').hide();
    $('.section1').show();
    $step.eq(0).addClass("active");
    $step.eq(1).removeClass("active");
})
$('#prevBtnThird').on('click',function(){
    $('.section3').hide();
    $('.section2').show();
    $step.eq(1).addClass("active");
    $step.eq(2).removeClass("active");
})
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4c514c7 (donee)
$('#prevBtnFourth').on('click',function(){
    $('.section4').hide();
    $('.section3').show();
    $step.eq(2).addClass("active");
    $step.eq(3).removeClass("active");
})
$('#nextFirst').on('click',function()
{
    $event_name = $('#eventName').val();
    $event_Descr = $('#eventDescription').val();
    $num_of_students = $('#no_of_stu_attending').val();
    $department_namee = $('#department_namee').val();
    $Institute_OrgName = $('#Institute_OrgName').val();
<<<<<<< HEAD
<<<<<<< HEAD
    $Institute_OrgName_email = $('#Institute_OrgName_email').val();
    $Institute_OrgName_phone_no = $('#Institute_OrgName_phone_no').val();
    $Institute_OrgName_transaction_id = $('#Institute_OrgName_transaction_id').val();
    if($event_name!="")
    {
      if($event_Descr!=="")
      {
        if($num_of_students!=="")
        {
          if($department_namee!=="Select Department")
          {
            if($department_namee=="Others"){
              if($Institute_OrgName!=="")
              {
                if($Institute_OrgName_email!=="" )
                {
                  if(validMail($Institute_OrgName_email ))
                  {
                    if($Institute_OrgName_phone_no.length===10)
                    {
                      if($Institute_OrgName_transaction_id!=="")
                      {
                        $step.eq(0).removeClass("active");
                        $step.eq(0).addClass("completed");
                        $('.section1').hide();
                        $('.section2').show();
                        $step.eq(1).addClass("active");
                      }else{
                        alert("Please Input the Transaction Id");
                      }
                    }else{
                      alert("Please Input the valid Institute/Organisation Phone Number");
                    }
                  }else{
                    alert("Please Input the valid Institute/Organisation Email");
                  }
                }else{
                  alert("Please Input the Institute/Organisation Email");
                }
              }else{
                alert("Please Input the Institute/Organisation Name");
              }
            }else{
              $step.eq(0).removeClass("active");
              $step.eq(0).addClass("completed");
              $('.section1').hide();
              $('.section2').show();
              $step.eq(1).addClass("active");
            }
          }else{
            alert("Please select department first");
          }
        }else{
          alert("Please input number of students attending for event");
        }
      }
      else{
        alert("Please input your Event Description");
      } 
    }
    else{
      alert("Please input your Event Name");
    }
})


$('#nextSecond').on('click',function()
{
    $Venue_name = $('#Venue_name').val();
    $event_date = $('#selectDate').val();
    $event_start_time = $('#selectStartTime').val();
    $event_end_time = $('#selectEndTime').val();
    if($Venue_name!="Select Venue")
    {
      if($event_date!="")
      {
        if($event_start_time!="Select the start time")
        {
          if($event_end_time!="Select the end time")
          {
            if($event_start_time===$event_end_time)
            {
              alert("Event start time and end time cannot be same");
            }else{
              if($Venue_name=="Audi 1" || $Venue_name=="Audi 2")
                {
                  $('#pointer').show();
                  $('#laptop').show();

                }else{
                  $('#pointer').hide();
                  $('#laptop').hide();
                }
                $step.eq(1).removeClass("active");
                $step.eq(1).addClass("completed");
                $('.section1').hide();
                $('.section2').hide();
                $('.section3').show();
                $step.eq(2).addClass("active");
            }
          }else{
            alert("Please select the event end time");
          }
        }else{
          alert("Please select the event starting time");
        }
      }else{
        alert("Please select Date");
      }
    }else{
      alert("Please select venue");
    }
})
$('#nextThird').on('click',function(){
              $step.eq(2).removeClass("active");
                $step.eq(2).addClass("completed");
                $('.section1').hide();
                $('.section2').hide();
                $('.section3').hide();
                $('.section4').show();
                $step.eq(3).addClass("active");
})

$('#nextForth').on('click',function(e){
  $no_of_rp = $('#no_of_rp').val();
  if($no_of_rp!=="Please Select the Number of Resourse Person")
  {
    if($no_of_rp=="No")
    {
      if($('#check_box_terms_and_condition').is(':checked'))
                {
                  $('#FinalSubmit').click();
                }else{
                  alert("Please agree our terms and condition");
                }

    }else{
      var rp_name = [];
      var company_name = [];
      var rp_designation = [];
      var rp_experience = [];
      var count = 0;
      for(i=0;i<$no_of_rp;i++)
      {
        rp_name[i] = $('#rp_name'+i+'').val();  
        company_name[i] = $('#companyName'+i+'').val();  
        rp_designation[i] = $('#designation'+i+'').val();
        rp_experience[i] = $('#experience'+i+'').val();
        if(rp_name[i]!=="")
        {
          if(company_name[i]!=="")
          {
            if(rp_designation[i]!=="")
            {
              if(rp_experience[i]!=="")
              {
                count=count+1;
              
              }else{
                alert("Please input the "+i+" Resource person experience");
              }
            }else{
              alert("Please input the "+i+" Resource person Designation");
            }
          }else{
            alert("Please input the "+i+" Resource person company name");
          }
        }else{
          alert("Please input the "+i+" Resource person name");
        }  
  
      }
      console.log(count);
      if(count==$no_of_rp)
      {
        if($('#check_box_terms_and_condition').is(':checked'))
        {   
          $('#FinalSubmit').click();
        }else{
          alert("Please agree our terms and condition");
        }
      }
    }
  }else{
    alert("Please select the Number of Resourse Person");
  }
    
})

$('#bookAgain').on('click',function(){
  window.location='booking.php';
})









function validMail(mail)
{
    return /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(mail);
}
=======
        console.log("others selected");
        $('#org_institue_name').show();
    }
    else{
        $('#org_institue_name').hide();
    }
    
<<<<<<< HEAD
})
>>>>>>> bc83ca0 (done)
=======
})  
=======

>>>>>>> 7c6c46c (senddd)

>>>>>>> 438b4be (commit)
=======
        $('#org_institue_name').hide();
    }
    
})  
>>>>>>> d9efa5f (dd)
=======
      alert("please input event name");
    }
 }
>>>>>>> 0b52915 (dd)
=======
      showError("Please Input your event name!");
      valid = false;
    }
    return valid
 }
=======
>>>>>>> d9e0c02 (comit bro)
 
 
$('.first_page').on('click',function()
=======
$('#nextFirst').on('click',function()
>>>>>>> 3cf029e (commit)
{
    $event_name = $('#eventName').val();
    $event_Descr = $('#eventDescription').val();
    $num_of_students = $('#no_of_stu_attending').val();
    $event_date = $('#selectDate').val();
    $event_start_time = $('#selectStartTime').val();
    $event_end_time = $('#selectEndTime').val();
=======
>>>>>>> 86879d7 (half blocking donee)
=======
    $Institute_OrgName_email = $('#Institute_OrgName_email').val();
    $Institute_OrgName_phone_no = $('#Institute_OrgName_phone_no').val();
    $Institute_OrgName_transaction_id = $('#Institute_OrgName_transaction_id').val();
>>>>>>> 4c514c7 (donee)
    if($event_name!="")
    {
      if($event_Descr!=="")
      {
        if($num_of_students!=="")
        {
          if($department_namee!=="Select Department")
          {
            if($department_namee=="Others"){
              if($Institute_OrgName!=="")
              {
                if($Institute_OrgName_email!=="" )
                {
                  if(validMail($Institute_OrgName_email ))
                  {
                    if($Institute_OrgName_phone_no.length===10)
                    {
                      if($Institute_OrgName_transaction_id!=="")
                      {
                        $step.eq(0).removeClass("active");
                        $step.eq(0).addClass("completed");
                        $('.section1').hide();
                        $('.section2').show();
                        $step.eq(1).addClass("active");
                      }else{
                        alert("Please Input the Transaction Id");
                      }
                    }else{
                      alert("Please Input the valid Institute/Organisation Phone Number");
                    }
                  }else{
                    alert("Please Input the valid Institute/Organisation Email");
                  }
                }else{
                  alert("Please Input the Institute/Organisation Email");
                }
              }else{
                alert("Please Input the Institute/Organisation Name");
              }
            }else{
              $step.eq(0).removeClass("active");
              $step.eq(0).addClass("completed");
              $('.section1').hide();
              $('.section2').show();
              $step.eq(1).addClass("active");
            }
          }else{
            alert("Please select department first");
          }
        }else{
          alert("Please input number of students attending for event");
        }
      }
      else{
        alert("Please input your Event Description");
      } 
    }
    else{
      alert("Please input your Event Name");
    }
})
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4254869 (done)
=======
$('.second_page').on('click',function()
{
=======
>>>>>>> 3cf029e (commit)


$('#nextSecond').on('click',function()
{
    $Venue_name = $('#Venue_name').val();
    $event_date = $('#selectDate').val();
    $event_start_time = $('#selectStartTime').val();
    $event_end_time = $('#selectEndTime').val();
    if($Venue_name!="Select Venue")
    {
      if($event_date!="")
      {
        if($event_start_time!="Select the start time")
        {
          if($event_end_time!="Select the end time")
          {
            if($event_start_time===$event_end_time)
            {
              alert("Event start time and end time cannot be same");
            }else{
              if($Venue_name=="Audi 1" || $Venue_name=="Audi 2")
                {
                  $('#pointer').show();
                  $('#laptop').show();

                }else{
                  $('#pointer').hide();
                  $('#laptop').hide();
                }
                $step.eq(1).removeClass("active");
                $step.eq(1).addClass("completed");
                $('.section1').hide();
                $('.section2').hide();
                $('.section3').show();
                $step.eq(2).addClass("active");
            }
          }else{
            alert("Please select the event end time");
          }
        }else{
          alert("Please select the event starting time");
        }
      }else{
        alert("Please select Date");
      }
    }else{
      alert("Please select venue");
    }
})
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d9e0c02 (comit bro)
=======

=======
$('.section3').show();
$('.section4').hide();
>>>>>>> 531ad26 (email)
$('#nextThird').on('click',function(e){
    $rp_name = $('#rp_name').val();
    $companyName = $('#companyName').val();
    $designation = $('#designation').val();
    $experience = $('#experience').val();
    if($rp_name !== ""){
        if($companyName!==""){
            if($designation!==""){
                if($experience!==""){
                  if($('#check_box_terms_and_condition').is(':checked'))
                  {
                    $event_name = $('#eventName').val();
                  $event_Descr = $('#eventDescription').val();
                  $num_of_students = $('#no_of_stu_attending').val();
                  $event_date = $('#selectDate').val();
                  $event_start_time = $('#selectStartTime').val();
                  $event_end_time = $('#selectEndTime').val();
                  $Institute_OrgName = $('#Institute_OrgName').val();
                  $Venue_name = $('#Venue_name').val();
                  $rp_name = $('#rp_name').val();
                  $companyName = $('#companyName').val();
                  $designation = $('#designation').val();
                  $experience = $('#experience').val();
                  $user_email = $('#user_email').val();
                  if(
                    $user_email!==""
                        &&
                    $event_name!==""
                        &&
                    $event_Descr!==""
                        && 
                    $num_of_students!==""
                        &&
                    $event_date!==""
                        &&
                    $event_start_time!=="Select the start time"
                        &&
                    $event_end_time!=="Select the end time"
                        &&
                    $Institute_OrgName!==""
                        &&
                    $Venue_name!=="Select Venue"
                        &&
                    $rp_name!==""
                        &&
                    $companyName!==""
                        &&
                    $designation!==""
                        &&
                    $experience!==""
              
                  ){
                    $.ajax({
                      type: 'POST',
                      url: 'ajax.php',
                      data: {user_email:$user_email,eventname : $event_name, event_desc: $event_Descr, no_of_students : $num_of_students, event_date : $event_date, event_start_time:$event_start_time, event_end_time:$event_end_time, Institute_OrgName:$Institute_OrgName, Venue_name:$Venue_name, rp_name:$rp_name, companyName:$companyName, designation:$designation, experience:$experience  },
                      success: function(data){
                          console.log(data);
                          if(data==1)
                          {
                            $('#success').modal('show');
                          }
                          else
                          {
                            $('#failed').modal('show');
                          }
                      },
                      error: function() {
                          console.log(response.status);
                      },
                  })
                  }
=======
$('#nextThird').on('click',function(){
              $step.eq(2).removeClass("active");
                $step.eq(2).addClass("completed");
                $('.section1').hide();
                $('.section2').hide();
                $('.section3').hide();
                $('.section4').show();
                $step.eq(3).addClass("active");
})

$('#nextForth').on('click',function(e){
  $no_of_rp = $('#no_of_rp').val();
  if($no_of_rp!=="Please Select the Number of Resourse Person")
  {
    if($no_of_rp=="No")
    {
      if($('#check_box_terms_and_condition').is(':checked'))
                {
                  $('#FinalSubmit').click();
                }else{
                  alert("Please agree our terms and condition");
                }
>>>>>>> 4c514c7 (donee)

    }else{
      var rp_name = [];
      var company_name = [];
      var rp_designation = [];
      var rp_experience = [];
      var count = 0;
      for(i=0;i<$no_of_rp;i++)
      {
        rp_name[i] = $('#rp_name'+i+'').val();  
        company_name[i] = $('#companyName'+i+'').val();  
        rp_designation[i] = $('#designation'+i+'').val();
        rp_experience[i] = $('#experience'+i+'').val();
        if(rp_name[i]!=="")
        {
          if(company_name[i]!=="")
          {
            if(rp_designation[i]!=="")
            {
              if(rp_experience[i]!=="")
              {
                count=count+1;
              
              }else{
                alert("Please input the "+i+" Resource person experience");
              }
            }else{
              alert("Please input the "+i+" Resource person Designation");
            }
          }else{
            alert("Please input the "+i+" Resource person company name");
          }
        }else{
          alert("Please input the "+i+" Resource person name");
        }  
  
      }
      console.log(count);
      if(count==$no_of_rp)
      {
        if($('#check_box_terms_and_condition').is(':checked'))
        {   
          $('#FinalSubmit').click();
        }else{
          alert("Please agree our terms and condition");
        }
      }
    }
  }else{
    alert("Please select the Number of Resourse Person");
  }
    
})

$('#bookAgain').on('click',function(){
  window.location='booking.php';
})

<<<<<<< HEAD
>>>>>>> 3cf029e (commit)
=======




<<<<<<< HEAD
>>>>>>> 5ee6f79 (done)
=======

<<<<<<< HEAD
>>>>>>> 33591c5 (donee)
=======


<<<<<<< HEAD
>>>>>>> 531ad26 (email)
=======


function validMail(mail)
{
    return /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(mail);
}
>>>>>>> 4c514c7 (donee)
