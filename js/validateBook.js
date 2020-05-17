function ValidateBookForm(){
    var bool =false;
    if(validateBookName() && validateBookPages()&& validateBookPublisher() && validateBookGenre() ){
        bool = true;
    }
    return bool;


}

function validateBookName() {
    var name = document.getElementById("BookName").value;
    var bool = false;
    if(name.length== 0|| name.length>25)
    {
        producePrompt("Book Name Requried","commentBookName","red");
        return false;
    }

    if(name.match(/^([a-zA-Z0-9]+)$/))
    {
        producePrompt("Book Name is Valid","commentBookName","green");
        return true;
        bool=true;

    }
    else{
        producePrompt("Book Name is not Valid","commentBookName","red");
        return false;
        bool=false;
    }
    return bool;
}



function validateBookPages() {
    var pages = document.getElementById("BookPages").value;
    var bool = false;
    if(pages.value == "")
    {
        producePrompt("Book Pages Requried","commentBookPages","red");
        return false;
    }

    if(pages.match(/^\d+$/))
    {
        producePrompt("Book Pages is Valid","commentBookPages","green");
        return true;
        bool=true;

    }else {
        producePrompt("Book Pages is not Valid","commentBookPages","red");
        return false;
        bool=false;
    }
    return bool;
}

function validateBookPublisher() {
    var pages = document.getElementById("first1").value;
    var bool = false;
    if(pages.value == "")
    {
        producePrompt("Book Publisher Requried","commentBookPublisher","red");
        return false;
    }

    if(pages.value !== "first")
    {
        producePrompt("Book Publisher is Valid","commentBookPublisher","green");
        return true;
        bool=true;

    }else {
        producePrompt("Book Publisher is not Valid","commentBookPublisher","red");
        return false;
        bool=false;
    }
    return bool;
}

function validateBookGenre() {
    var pages = document.getElementById("BookGenre").value;
    var bool = false;
    if(pages.value == "")
    {
        producePrompt("Book Genre Requried","commentBookGenre","red");
        return false;
    }

    if(pages.value !== "first")
    {
        producePrompt("Book Genre is Valid","commentBookGenre","green");
        return true;
        bool=true;

    }else {
        producePrompt("Book Genre is not Valid","commentBookGenre","red");
        return false;
        bool=false;
    }
    return bool;
}

function producePrompt(message,prompLocation , color) {

    document.getElementById(prompLocation).innerHTML=message;
    document.getElementById(prompLocation).style.color=color;
}