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
}) 


$('.section2').hide();
$('.section3').hide();
$('.section4').hide();
$step = $('.stepper-item');
$step.eq(0).addClass("active");
$('#prevBtnSecond').on('click',function(){
    $('.section2').fadeOut();
    $('.section2').hide();
    $('.section1').fadeIn();
    $('.section1').show();
    $step.eq(0).addClass("active");
    $step.eq(1).removeClass("active");
})
$('#prevBtnThird').on('click',function(){
    $('.section3').fadeOut();
    $('.section3').hide();
    $('.section2').fadeIn();
    $('.section2').show();
    $step.eq(1).addClass("active");
    $step.eq(2).removeClass("active");
})
$('#prevBtnFourth').on('click',function(){
    $('.section4').fadeOut();
    $('.section4').hide();
    $('.section3').fadeIn();
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
                        $step.eq(0).removeClass("active");
                        $step.eq(0).addClass("completed");
                        $('.section1').fadeOut();
                        $('.section1').hide();
                        $('.section2').fadeIn();
                        $('.section2').show();
                        $step.eq(1).addClass("active");
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
                $('.section2').fadeOut();
                $('.section2').hide();
                $('.section3').show();
                $('.section3').fadeIn();
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
                $('.section3').fadeOut();
                $('.section3').hide();
                $('.section4').fadeIn();
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