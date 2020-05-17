function ValidateGenreForm(){
    var bool =false;
    if(validateGenreName()){
        bool = true;
    }
    return bool;


}

function validateGenreName() {
    var name = document.getElementById("GenreName").value;
    var bool = false;
    if(name.length== 0|| name.length>25)
    {
        producePrompt("Genre Name Requried","commentGenreName","red");
        return false;
    }

    if(name.match(/^([a-zA-Z ]+)$/))
    {
        producePrompt("Genre Name is Valid","commentGenreName","green");
        return true;
        bool=true;

    }
    else{
        producePrompt("Genre Name is not Valid","commentGenreName","red");
        return false;
        bool=false;
    }
    return bool;
}
function producePrompt(message,prompLocation , color) {

    document.getElementById(prompLocation).innerHTML=message;
    document.getElementById(prompLocation).style.color=color;
}