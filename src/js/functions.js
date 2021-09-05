

function formSubmit (e) {
    //prevent
    e.preventDefault();

    let name = $('#name').val();
    let email = $('#email').val();
    let message = $('#message').val();
    let subject = $('#subject').val();
    let lang = $('#form').attr('data-lang'); //for language of response message
    
    let error = false;

    //contrôle via object and values
    const PARAM = {};
    PARAM['name'] = name;
    PARAM['email'] = email;
    PARAM['message'] = message;
    PARAM['subject'] = subject;
    PARAM['lang'] = lang;

    for(let key in PARAM) {
        if(PARAM[key] === "") {
            error= true;
            changeBorderColor(`#${key}`, "red");
            changeDisplay(`.box_${key} p`, 'block');            
        } else {
            changeBorderColor(`#${key}`, "green");
            changeDisplay(`.box_${key} p`, 'none');
            $(`.box_${key} i`).css('opacity', '1');
        }
    }
    
    //if error is false => request AJAX
    if(!error) {
        requestAjax(PARAM);
    }
}

// fonction qui contrôle si email est valide
function validateEmail(email) {
    const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
    return re.test(String(email).toLowerCase());
}

// affichage bordure coloré
function changeBorderColor (id, color) {
    const ELEMENT = $(id);
    ELEMENT.css('border-color', color);
}

// change display or error message
function changeDisplay (id, display) {
    $(id).css('display', display);
}

//reset every input and textarea by leaving them
function focusOutField () {
    const PARENT = $(this).parent();
    //if error message for input is existent => delete
    if(PARENT.children('p').length > 0) {
        $(PARENT).children().remove("p");
    }
    changeBorderColor($(this), "rgb(0, 122, 126)");       
}

//function display success message after sending
function messageMail (data) {
    const PARENT = $('.messageResultat');
    const CONTENT = $('.messageResultatContent');
    //RAZ content message box
    CONTENT.html("");

    const ERRORCODE = data["errorCode"];
    const MESSAGE = data["message"];
    let text = "";
    let icon = "";
    
    switch(ERRORCODE) {
        case "0":
            text = $(`<p>${MESSAGE}</p>`);
            icon = $('<i class="fas fa-check"></i>');
            $('.messageResultat').css({'border': '0.1rem solid green', 'color': 'green'});
            $(text).css ('color', 'green');
            break;
        case "1":
            text = $(`<p>${MESSAGE}</p>`);
            icon = $('<i class="fas fa-times"></i>');
            $('.messageResultat').css({'border': '0.1rem solid red', 'color': 'red'});
            $(text).css ('color', 'red');
            break;
    }   

    CONTENT.append(text, icon);

    PARENT.fadeIn("slow").delay(3000).fadeOut("slow");
}

//function te reset form after sending
function resetForm () {
    //event blur input and textarea form
    const INPUT_NAME = $('#name');
    const INPUT_EMAIL = $('#email');
    const INPUT_SUBJECT = $('#subject');
    const INPUT_MESSAGE = $('#message');

    [INPUT_NAME, INPUT_EMAIL, INPUT_SUBJECT, INPUT_MESSAGE].forEach((element) => {
        element.val("");
        changeBorderColor(element, "rgb(0, 122, 126)");        
    })
}