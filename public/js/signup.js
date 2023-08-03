$(document).ready(function (){
    // var alert = document.getElementById('alert');
    // setTimeout(function (){
    //     alert.classList.add('d-none');
    // },4000);

})
function submitSignup(){
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let token = $('meta[name="csrf-token"]').attr("content");
    let data = {
        _token : token,
        fullname : fullname,
        email : email,
        password : password,
    }
    $.ajax({
        url : "/submitSignUp",
        method :"POST",
        data:data,
        success : function (response){
            if(response =="1"){
                let error = document.getElementById("error");
                error.classList.remove("d-none");
            }else{
                localStorage.setItem("user",fullname);
                window.location.href ="/";
            }
        }

        }
    )
}


