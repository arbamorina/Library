function ValidateRegistreForm(){
    var bool =false;
    if(validateUserName() && validatePassword() && validateEmail()){
        bool = true;
    }
    return bool;


}

function validateUserName() {
    var name = document.getElementById("Username").value;
    var bool = false;
    if(name.length== 0|| name.length>25)
    {
        producePrompt("Username Requried","commentUsername","red");
        return false;
    }

    if(name.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("Username is Valid","commentUsername","green");
        return true;
        bool=true;

    }
    else{
        producePrompt("Username is not Valid","commentUsername","red");
        return false;
        bool=false;
    }
    return bool;
}
/*
validimi i mbiemrit
kthen boolean
 */
function validatePassword() {
    var pass = document.getElementById("Password").value;
    var bool = false;
    if(pass.length== 0|| pass.length>25)
    {
        producePrompt("Password Requried","commentPassword","red");
        return false;
    }

    if(pass.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("Password is Valid","commentPassword","green");
        return true;
        bool=true;

    }else {
        producePrompt("Password is not Valid","commentPassword","red");
        return false;
        bool=false;
    }
    return bool;
}
/*
validimi i dates se lindjes
kthen boolean
 */


function validateEmail() {
    var email = document.getElementById("Email").value;
    var bool = false;
    if(email.value=="")
    {
        producePrompt("Email Requried","commentEmail","red");
        return false;
    }

    if(email.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("Email is Valid","commentEmail","green");
        return true;
        bool=true;

    }else {
        producePrompt("Email is not Valid","commentEmail","red");
        return false;
        bool=false;
    }
    return bool;
}
function validateType() {
    var type = document.getElementById("Type").value;
    var bool = false;
    if(type.value=="" || type.length>25)
    {
        producePrompt("Type Requried","commentType","red");
        return false;
    }

    if(type.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("Type is Valid","commentType","green");
        return true;
        bool=true;

    }else {
        producePrompt("Type is not Valid","commentType","red");
        return false;
        bool=false;
    }
    return bool;
}


function producePrompt(message,prompLocation , color) {

    document.getElementById(prompLocation).innerHTML=message;
    document.getElementById(prompLocation).style.color=color;
}
