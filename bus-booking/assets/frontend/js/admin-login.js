$(document).on('click','#loginbutton',function(){
    let email = $('#email').val();
    let password = $('#password').val();
    if(email==''){
        alert("Please Enter Email");
    } else if(password==''){
        alert('Please Enter Password');
    }else{
        let obj = {
            email:email,
            password:password,
        };
        $.post(BASE_URL+"adminlogin/login",obj,function(resp){
            let fb = JSON.parse(resp);
            if(fb.status=='true'){
                window.location.href=BASE_URL+'/admin';
            }else{
                alert('Username and password not match');
            }
            console.log(resp);
        })
    }
});