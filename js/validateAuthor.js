function ValidateAuthorForm(){
    var bool =false;
    if(validateAuthorName() && validateAuthorLastName() && validateAuthorDOB()){
        bool = true;
        }
    return bool;


}

function validateAuthorName() {
    var name = document.getElementById("AuthorName").value;
    var bool = false;
    if(name.length== 0|| name.length>25)
    {
        producePrompt("AuthorName Requried","commentAuthorName","red");
        return false;
    }

    if(name.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("AuthorName is Valid","commentAuthorName","green");
        return true;
        bool=true;

    }
    else{
        producePrompt("AuthorName is not Valid","commentAuthorName","red");
        return false;
        bool=false;
    }
    return bool;
}
/*
validimi i mbiemrit
kthen boolean
 */
function validateAuthorLastName() {
    var lastname = document.getElementById("AuthorLastName").value;
    var bool = false;
    if(lastname.length== 0|| lastname.length>25)
    {
        producePrompt("AuthorLastName Requried","commentAuthorLastName","red");
        return false;
    }

    if(lastname.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("AuthorLastName is Valid","commentAuthorLastName","green");
        return true;
        bool=true;

    }else {
        producePrompt("AuthorLastName is not Valid","commentAuthorLastName","red");
        return false;
        bool=false;
    }
    return bool;
}
/*
validimi i dates se lindjes
kthen boolean
 */


function validateAuthorDOB() {
    var dob = document.getElementById("DaB").value;
    var bool = false;
    if(dob.value=="")
    {
        producePrompt("Date of birth Requried","commentDOB","red");
        return false;
    }

    if(dob.match(/^\d{2}[./-]\d{2}[./-]\d{4}$/))
    {
        producePrompt("Date of birth is Valid","commentDOB","green");
        return true;
        bool=true;

    }else {
        producePrompt("Date of birth is not Valid","commentDOB","red");
        return false;
        bool=false;
    }
    return bool;
}


function producePrompt(message,prompLocation , color) {

    document.getElementById(prompLocation).innerHTML=message;
    document.getElementById(prompLocation).style.color=color;
}
