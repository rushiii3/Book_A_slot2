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