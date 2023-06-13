$('#FinalSubmit').on('click',function(e)
{
    $user_email = $('#user_email').val();
    $event_name = $('#eventName').val();
    $event_Descr = $('#eventDescription').val();
    $num_of_students = $('#no_of_stu_attending').val();
    $department_namee = $('#department_namee').val();
    $Institute_OrgName = $('#Institute_OrgName').val();
    $Institute_OrgName_email = $('#Institute_OrgName_email').val();
    $Institute_OrgName_phone_no = $('#Institute_OrgName_phone_no').val();
    $Institute_OrgName_transaction_id = $('#Institute_OrgName_transaction_id').val();
    $Venue_name = $('#Venue_name').val();
    $event_date = $('#selectDate').val();
    $event_start_time = $('#selectStartTime').val();
    $event_end_time = $('#selectEndTime').val();
    $no_of_rp = $('#no_of_rp').val();
    
    if($("input[name='checkArr']").is(':checked') )
    {
        $requriment = $("input[name='checkArr']:checked").map(function() {
            return this.value;
        }).get().join(', ');
    }else{
        $requriment = "None";
    }
    console.log($requriment);
    
    var rp_names = [];
    var company_names = [];
    var designations = [];
    var experience = [];
    if($no_of_rp==="No")
    {
        rp_names.push($('#rp_name').val());
        company_names.push($('#companyName').val());
        designations.push($('#designation').val());
        experience.push($('#experience').val());
    }else{
        for(i=0;i<$no_of_rp;i++)
      {
        rp_names.push($('#rp_name'+i+'').val());
        company_names.push($('#companyName'+i+'').val());
        designations.push($('#designation'+i+'').val());
        experience.push($('#experience'+i+'').val());
      }
    }
    if($department_namee=="Others")
    {
        var others = "others";
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: {user_email:$user_email, event_name:$event_name, event_Descr:$event_Descr, num_of_students:$num_of_students , department_namee:$department_namee, Venue_name:$Venue_name, event_date:$event_date, event_start_time:$event_start_time, event_end_time:$event_end_time, requriment:$requriment, rp_names:rp_names, company_names:company_names, designations:designations, experience:experience, Institute_OrgName:$Institute_OrgName, Institute_OrgName_email:$Institute_OrgName_email, Institute_OrgName_phone_no:$Institute_OrgName_phone_no, Institute_OrgName_transaction_id:$Institute_OrgName_transaction_id, others:others  },
            success: function(data){
                console.log(data);
                if(data==1)
                {
                    $.ajax({
                        type: 'POST',
                        url: 'emailajax.php',
                        data: {event_name:$event_name, event_Descr:$event_Descr, num_of_students:$num_of_students ,  Venue_name:$Venue_name, event_date:$event_date, event_start_time:$event_start_time, event_end_time:$event_end_time, Institute_OrgName:$Institute_OrgName, Institute_OrgName_email:$Institute_OrgName_email, Institute_OrgName_phone_no:$Institute_OrgName_phone_no, Institute_OrgName_transaction_id:$Institute_OrgName_transaction_id,},
                        success: function(data){
                            console.log(data);
                            $('#emailtemp').append(data);
                            $('#success').modal('show');
                        },
                        error: function() {
                            console.log(response.status);
                        },
                    })

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
        
    }else{
        var insider = "insider";
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: {user_email:$user_email, event_name:$event_name, event_Descr:$event_Descr, num_of_students:$num_of_students , department_namee:$department_namee, Venue_name:$Venue_name, event_date:$event_date, event_start_time:$event_start_time, event_end_time:$event_end_time, requriment:$requriment, rp_names:rp_names, company_names:company_names, designations:designations, experience:experience, insider:insider},

            data: {user_email:$user_email, event_name:$event_name, event_Descr:$event_Descr, num_of_students:$num_of_students , department_namee:$department_namee, Venue_name:$Venue_name, event_date:$event_date, event_start_time:$event_start_time, event_end_time:$event_end_time, requriment:$requriment, rp_names:rp_names, company_names:company_names, designations:designations, experience:experience, insider:insider  },

            data: {user_email:$user_email, event_name:$event_name, event_Descr:$event_Descr, num_of_students:$num_of_students , department_namee:$department_namee, Venue_name:$Venue_name, event_date:$event_date, event_start_time:$event_start_time, event_end_time:$event_end_time, requriment:$requriment, rp_names:rp_names, company_names:company_names, designations:designations, experience:experience, insider:insider},

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

    e.preventDefault();
<<<<<<< HEAD
})
=======
$('.section2').hide();
$('.section3').hide();
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
$('#nextFirst').on('click',function()
{
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
            if($event_start_time!=="Select the start time")
            {
              if($event_end_time!=="Select the end time")
              {
                $step.eq(0).removeClass("active");
                $step.eq(0).addClass("completed");
                $('.section1').hide();
                $('.section2').show();
                $step.eq(1).addClass("active");
                
              }else{
                alert("Please input the event end time");
              }
            }
            else{
              alert("Please input the event start time");
            }
            
          }else{
            alert("Please input a date");
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
    $department_namee = $('#department_namee').val();
    $Institute_OrgName = $('#Institute_OrgName').val();
    $Venue_name = $('#Venue_name').val();
    if($department_namee!=="Select Department")
    {
        if($Institute_OrgName!==""){
            if($Venue_name!=="Select Venue"){
                $step.eq(1).removeClass("active");
                $step.eq(1).addClass("completed");
                $('.section1').hide();
                $('.section2').hide();
                $('.section3').show();
                $step.eq(2).addClass("active");
            }else{
                alert("Please select your venue");
            }
        }
        else{
            alert("Please Input your Institute/Organisation Name");
        }
    }else{
        alert("Please select department first");
    }

})

$('#nextThird').on('click',function(){
    $rp_name = $('#rp_name').val();
    $companyName = $('#companyName').val();
    $designation = $('#designation').val();
    $experience = $('#experience').val();
    if($rp_name !== ""){
        if($companyName!==""){
            if($designation!==""){
                if($experience!==""){


                }else{
                    alert("Please input the resource person experience");
                }
            }else{
                alert("Please input the resource person designation");
            }
        }else{
            alert("Please input the resource person company name");
        }
    }else{
        alert("Please input the resource person name");
    }
})


