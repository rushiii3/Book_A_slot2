document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#selectDate", {
      dateFormat: 'Y-m-d',
      minDate: new Date().fp_incr(3),
      disable: [
        '2023-05-20',
        '2023-05-25'
      ]
    });
  });
$(document).ready(function(){
   
    
    $('#submit').on('click',function(){
        
        $date = $('#selectDate').val();
        $Venue_name = $('#Venue_name').val();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 72563ee (doneviews)
        // format date into day 29-05-2023 to Tuesday
        const selectDated =  new Date($date);
        const day = selectDated.getDay();
        const dayNames = ["Sunday", "Monday", "Tuesday" /* , … */];
        // format date into day 29-05-2023 to 29 MAY 2023
        let d = new Date($date);
        let ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
        let mo = new Intl.DateTimeFormat('en', { month: 'long' }).format(d);
        let da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);

        console.log();
<<<<<<< HEAD
=======
>>>>>>> e755e8f (done)
=======
>>>>>>> 72563ee (doneviews)
        if($date!==""){
            if($Venue_name!=="Select Venue")
            {
                $.ajax({
                    type: 'POST',
                    url: 'ajax.php',
                    data: { selectdatee:$date,venue_name:$Venue_name },
                    success: function(data){
                        console.log(data);
<<<<<<< HEAD
<<<<<<< HEAD
                        $('#showDate').html(`${da} ${mo} ${ye}`);
                        $('#showDay').html(dayNames[day]);
=======
                        $('#showDate').html($date);
                        $('#showDay').html($date);
>>>>>>> e755e8f (done)
=======
                        $('#showDate').html(`${da} ${mo} ${ye}`);
                        $('#showDay').html(dayNames[day]);
>>>>>>> 72563ee (doneviews)
                        $('#dayList').html(" ");
                        $('#dayList').append(data);
                        
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }else{
                alert("Please select a venue first");
            }
            
        }else{
            alert("Please select a Date first");
        }
        
    })
})