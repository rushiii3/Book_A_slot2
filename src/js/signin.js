<<<<<<< HEAD
<<<<<<< HEAD
$(document).ready(function(){
    $('.pass_open_eye').hide();
    $('.alert-danger').hide();
    $('.pass_icon').on('click',function(){
        if('password' == $('#password').attr('type')){
            $('#password').prop('type', 'text');
            $('.pass_open_eye').show();
            $('.pass_close_eye').hide();
    
       }else{
            $('#password').prop('type', 'password');
            $('.pass_open_eye').hide();
            $('.pass_close_eye').show();
       }
<<<<<<< HEAD
    })
    
    $('#submit').on('click',function(e){
        $email = $('#email').val();
        $password = $('#password').val();
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: {email_login: $email, password_login : $password},
            success: function(data) {
                console.log(data);
                if(data==1)
                {
                    window.location.href = 'home.php';
                }
                else if(data==2)
                {
                    window.location.href = '../admin/admin_home.php';
                }
                else if(data==3)
                {
                    window.location.href = '../principal/home.php';
                }
                else if(data==4)
                {
                    window.location.href = '..//home.php';
                }
                else{
                    $('#failed').modal('show');
                    
                }
            },
            error: function() {
                console.log(response.status);
            },
        })
        e.preventDefault();
    })
    
    
    function disableBack() {
                    window.history.forward()
                }
                window.onload = disableBack();
                window.onpageshow = function(e) {
                    if (e.persisted)
                        disableBack();
                }
                
                
    })
=======
=======
$(document).ready(function(){
>>>>>>> 6f4753b (donee)
$('.pass_open_eye').hide();
$('.alert-danger').hide();
$('.pass_icon').on('click',function(){
    if('password' == $('#password').attr('type')){
        $('#password').prop('type', 'text');
        $('.pass_open_eye').show();
        $('.pass_close_eye').hide();

   }else{
        $('#password').prop('type', 'password');
        $('.pass_open_eye').hide();
        $('.pass_close_eye').show();
   }
})

<<<<<<< HEAD


function showWarning(){
    $('.alert-danger').show();
  }
  

//index page javascript change image every 5s 
function displayNextImage() {
     x = (x === images.length - 1) ? 0 : x + 1;
     document.getElementById("img").src = images[x];
 }
 function changeImage() {
     setInterval(displayNextImage, 5000);
 }

 var images = [], x = -1;
 images[0] = "https://img.freepik.com/free-vector/theatre-background-with-musical-performance-symbols-isometric-vector-illustration_1284-76317.jpg?w=1060&t=st=1683733040~exp=1683733640~hmac=0ebfe49597177dea04ae526998c19039bc25059829612e79dc581515edc97a4c";
 images[1] = "https://img.freepik.com/free-vector/lecture-isometric-illustration_1284-21183.jpg?w=1060&t=st=1683742670~exp=1683743270~hmac=aa948430f7445635f4c03b82837ed47ae31382cf6c8b50e54745afb6b288d814";
 images[2] = "https://img.freepik.com/free-vector/business-conference-seminar-auditorium-hall-speaker-podium-giving-presentation-audience-seats-event-forum-convention-modern-center_575670-2280.jpg?w=1800&t=st=1683742334~exp=1683742934~hmac=c5e131c4b9b58ac2e3b76a3d7686b73d917d2e4147fb7d864dd028eb456d9628";
 images[3] = "https://img.freepik.com/free-vector/business-conference-illustration-with-speaker-stage-audience-cartoon-characters-scientific-presentation-academic-symposium-professional-briefing_575670-644.jpg?w=1800&t=st=1683742373~exp=1683742973~hmac=0a716b2e0f446ed82cfd44a63aae6bc4c811d90ab816b1b47b05a7a4de0a5349";
 images[4] = "https://img.freepik.com/free-vector/medical-conference-illustration_23-2148904006.jpg?w=1480&t=st=1683742441~exp=1683743041~hmac=0f20c42e3f28c013ad01da0d491699ed84e4517146f18d94a48bfe6dff92cae6" 
 images[5] = "https://img.freepik.com/free-vector/doctor-speaking-from-podium-stage-conference_74855-20541.jpg?w=1380&t=st=1683742557~exp=1683743157~hmac=8638616f0ec457f779a80480b2dfb0f89b716daa5cb8113219043655bcb4d30a"
 changeImage();
>>>>>>> bc17322 (index_sign_in&up_done)
=======
$('#submit').on('click',function(e){
    $email = $('#email').val();
    $password = $('#password').val();
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: {email_login: $email, password_login : $password},
        success: function(data) {
            console.log(data);
            if(data==='o')
            {
                window.location.href = 'home.php';
            }
            else if(data==='a')
            {
                window.location.href = 'https://www.youtube.com/';
            }
            else{
                $('#failed').modal('show');
                
            }
        },
        error: function() {
            console.log(response.status);
        },
    })
    e.preventDefault();
})
<<<<<<< HEAD
  
>>>>>>> ad316e1 (donee)
=======
})
>>>>>>> 6f4753b (donee)
=======
    })
    
    $('#submit').on('click',function(e){
        $email = $('#email').val();
        $password = $('#password').val();
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: {email_login: $email, password_login : $password},
            success: function(data) {
                console.log(data);
                if(data==1)
                {
                    window.location.href = 'home.php';
                }
                else if(data==2)
                {
                    window.location.href = '../admin/admin_home.php';
                }
                else{
                    $('#failed').modal('show');
                    
                }
            },
            error: function() {
                console.log(response.status);
            },
        })
        e.preventDefault();
    })
    
    
    function disableBack() {
                    window.history.forward()
                }
                window.onload = disableBack();
                window.onpageshow = function(e) {
                    if (e.persisted)
                        disableBack();
                }
                
                
    })
>>>>>>> 1b9c412 (donefor ot)
