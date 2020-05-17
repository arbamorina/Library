function ValidatePublisherForm(){
    var bool =false;
    if(validatePublisherName() && validatePublisherCity()){
        bool = true;
    }
    return bool;


}

function validatePublisherName() {
    var name = document.getElementById("PublisherName").value;
    var bool = false;
    if(name.length== 0|| name.length>25)
    {
        producePrompt("Publisher Name Requried","commentPublisherName","red");
        return false;
    }

    if(name.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("Publisher Name is Valid","commentPublisherName","green");
        return true;
        bool=true;

    }
    else{
        producePrompt("Publisher Name is not Valid","commentPublisherName","red");
        return false;
        bool=false;
    }
    return bool;
}

function validatePublisherCity() {
    var name = document.getElementById("PublisherCity").value;
    var bool = false;
    if(name.length== 0|| name.length>25)
    {
        producePrompt("City Name Requried","commentPublisherCity","red");
        return false;
    }

    if(name.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("City Name is Valid","commentPublisherCity","green");
        return true;
        bool=true;

    }
    else{
        producePrompt("City Name is not Valid","commentPublisherCity","red");
        return false;
        bool=false;
    }
    return bool;
}

function producePrompt(message,prompLocation , color) {

    document.getElementById(prompLocation).innerHTML=message;
    document.getElementById(prompLocation).style.color=color;
}