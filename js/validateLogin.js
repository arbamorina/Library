function ValidateLoginForm(){
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