$(document).ready(function(){
    $('.pass_open_eye').hide();
    $('.cpass_open_eye').hide();

    function testInput(event) {
        var value = String.fromCharCode(event.which);
        var pattern = new RegExp(/[a-zåäö ]/i);
        return pattern.test(value);
     }
     $('#full_name').bind('keypress', testInput);
    
    $('#email').on('input',function(){
        var regex = /^([A-Za-z0-9_\-\.])+\@(vazecollege.net)$/;
        var email = $('#email').val();
        if (!regex.test(email)) {
            $('#emailVerify').text("Invalid email!").css("color", "red");
            $('#email').css("border-color","red");
        }
        else {
            $('#emailVerify').text("Valid email!").css("color", "green");
            $('#email').css("border-color","green");
        }
    })
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
    $('.confirm_pass_icon').on('click',function(){
        if('password' == $('#confirm_password').attr('type')){
            $('#confirm_password').prop('type', 'text');
            $('.cpass_open_eye').show();
            $('.cpass_close_eye').hide();
    
       }else{
            $('#confirm_password').prop('type', 'password');
            $('.cpass_open_eye').hide();
            $('.cpass_close_eye').show();
       }
    })
    $('#password').on("input",function(){
        $password = $('#password').val();
        if($password.length >= 8){
            if(Boolean($password.match(/[A-Z]/))==true)
            {
                $('#pass_verify').text("Valid Password !").css("color", "green");
                $('#password').css("border-color","green");
            }
            else{
                $('#pass_verify').text("Password must contain a uppercase letter.").css("color", "red");
                $('#password').css("border-color","red");
            }
            
        }
        else{
            $('#pass_verify').text("Password must be more than 8 characters.").css("color", "red");
            $('#password').css("border-color","red");
        }
        
    })
    
    $('#confirm_password').on("input",function(){
        $password = $('#password').val();
        $confirm_password = $('#confirm_password').val();
        if($password==$confirm_password){
                $('#confirm_password_verify').text("Password matched with Password !").css("color", "green");
                $('#confirm_password').css("border-color","green");
        }
        else{
            $('#confirm_password_verify').text("Password not matched with Password !").css("color", "red");
                $('#confirm_password').css("border-color","red");
        }
    })
    
    $('#submit').on('click',function(e){
        $email_verify =  $('#emailVerify').text();
        $password_verify = $('#pass_verify').text();
        $confirm_password_verify = $('#confirm_password_verify').text();
        $department_namee = $('#department_namee').val();
        if( $email_verify=="Valid email!")
            {
                if($department_namee!="Select Department")
                {
                    if($password_verify=="Valid Password !")
                    {
                        if($confirm_password_verify=="Password matched with Password !")
                        {
                                $full_name = $('#full_name').val();
                                $email = $('#email').val();
                                $department_namee = $('#department_namee').val();
                                $password = $('#password').val();
                                console.log($department_namee);
                                $.ajax({
                                    type: 'POST',
                                    url: 'ajax.php',
                                    data: {fullname : $full_name, email: $email, department_namee : $department_namee, password : $password},
                                    success: function(data) {
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
                        else{
                            alert("Your Password has not matched with the Password")
                        }
                    }
                    else{
                        alert("Password must be more than 8 charaters and have a Upper case letter ");
                    }
                }
                else{
                    alert("Please select your Department!");
                }
                
            }
            else{
                alert("Please input a valid email!");
            }
          e.preventDefault();
    })
    })