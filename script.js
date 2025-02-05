function test(){
    let email = document.querySelector("input#email").value;
    let pass = document.querySelector("input#pass").value;

    //Sacamos el formulario en si
    let form = document.querySelector("form");

    let output = document.querySelector("p.output");

    if(testEmail(email) && testPass(pass)){
        form.submit();
    }else if(!testEmail(email)){
        output.innerHTML = "Error, el usuario del email está mal formado. Pruebe con otro"
    }else if(!testPass(pass)){
        output.innerHTML = "Error, la contraseña no cumple con los requisitos de seguridad"
    }else{
        output.innerHTML = "Chico, no das una";
    }
}

function testEmail(email){
    //RegEx para comprobar que un email es válido
    const userRegex = /^\w*\.?-?\w*\.?-?\w*@\w*-?\w*((.com)|(.com.es)|(.site))?$/;

    if(userRegex.test(email)){
        return true;
    }else{
        return false;
    }
}

function testPass(pass){
    //RexEx para comprobar que la contraseña cumple con los requisitos
    const passRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#$@!%&?])(?!.*? ).{8,16}$/;

    if(passRegex.test(pass)){
        return true;
    }else{
        return false;
    }
}