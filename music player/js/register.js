
function formRegister(){
    var form = document.forms["registerForm"];
    var name = forms.name;
    var lastname = forms.lastname;
    var phone = forms.phone;
    var email = forms.email;
    var passwordOne = password;
    var passwordRepeat = repeatPassword;


    if(name.value != "" || lastname.value != "" || phone.value != "" || email.value != "" || passwordOne.value != "" || passwordRepeat != "" ){

    }else{
        var text = "Lütfen  Bilgilerinizi Eksik Girmeyiniz";
        document.getElementById("information").innerHTML = text;

    }

}