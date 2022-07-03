function validPassForce() {
    var senha = document.getElementById('passForce').value;
    var strength = 0;

    if((senha.length >= 5) && (senha.length <= 7)){
        strength += 12;
    } else if (senha.length > 8){
        strength += 25;
    }

    if ((senha.length >= 6) && (senha.match(/[a-z]+/))){
        strength += 12;
    }

    if ((senha.length >= 7) && (senha.match(/[A-Z]+/))){
        strength += 17;
    }

    if ((senha.length > 8) && (senha.match(/[@#$%&*]/))){
        strength += 25;
    }

    showForce(strength)
}

function showForce(strength){

    if ((strength < 12)){
        document.getElementById("errorPassForce").innerHTML = '<span>Digite uma senha forte, <br> incluindo letras maiúsculas e carateres <br> especiais como: <strong>"@#$%&*"<strong></span>';
    }else if(strength < 38){
        document.getElementById("errorPassForce").innerHTML = "<span style='color: #ff0000'>Senha Fraca</span>";

    } else if ((strength >= 46) && (strength < 70)){
        document.getElementById("errorPassForce").innerHTML = "<span style='color: #ffd700'>Senha Média</span>";

    } else if ((strength >= 46) && (strength < 96)){
        document.getElementById("errorPassForce").innerHTML = "<span style='color: #7fff00'>Senha Forte</span>";
    }

}

function verifyPass(){
    var pass = formuser.pass.value;
    var confirm_pass = formuser.confirm_pass.value;

            if(pass == '' || pass.length <= 7){
                document.getElementById('congrats').innerHTML = "<span style='color: #ffffff'>Confirme aqui a senha acima</span>"
                formuser.pass.focus();
                return false;
            }
            if(confirm_pass == '' || confirm_pass.length <= 7){
                document.getElementById('congrats').innerHTML = "<span style='color: #ff0000'>É necessário ter no mínimo 8 caracteres </span>"
                form1.confirm_pass.focus();
                return false;
            }
            if(pass != confirm_pass){
                document.getElementById('congrats').innerHTML = "<span style='color: #ffffff'>Senhas não coincidem</span>"
                formuser.confirm_pass.focus();
                return false;
            }
            if(pass == confirm_pass){
                document.getElementById('congrats').innerHTML = "<span style='color: #7fff00'>Senhas corretas</span>"
                return false;
            }
}

function verifyEmail(){
    var email = formuser.Email.value
    var confirmEmail = formuser.confirmEmail.value

    if(email.length != confirmEmail.length){
        document.getElementById ('correctMail').innerHTML = "<span style='color: #ffffff'>E-mail incorreto</span>"
        formuser.confirmEmail.focus();
        return false;
    }
    if(email = confirmEmail && (confirmEmail.length > 0)){
        document.getElementById('correctMail').innerHTML = "<span style='color: #7fff00'>E-mails estão corretos</span>"
        return false;
    }
    if(confirmEmail.length == 0){
        document.getElementById ('correctMail').innerHTML = "<span style='color: #ffffff'>Confirme seu e-mail</span>"
        formuser.confirmEmail.focus();
        return false;
    }
}