function check_required_input(elementName) {
    var input = $("#" + elementName);
    var is_filled = input.val();
    var error_element = $("span", input.parent());
    if (is_filled) {
        error_element.removeClass("error_show").addClass("error");
        input.removeClass("invalid").addClass("valid");
    }
    else {
        error_element.removeClass("error").addClass("error_show");
        input.removeClass("valid").addClass("invalid");
    }
}

function check_required_email(elementName) {
    var input = $("#" + elementName);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var is_email = re.test(input.val());
    var error_element = $("span", input.parent());
    if (is_email) {
        error_element.removeClass("error_show").addClass("error");
        input.removeClass("invalid").addClass("valid");
    }
    else {
        error_element.removeClass("error").addClass("error_show");
        input.removeClass("valid").addClass("invalid");
    }
}

function check_required_telephone(elementName) {
    var input = $("#" + elementName);
    var re = /\d{4}-?\d{4}/;
    var is_telephone = re.test(input.val());
    var ssn = input.val().replace(/-/g, '');
    var error_element = $("span", input.parent());
    if ((is_telephone) && (ssn.length === 8)) {
        error_element.removeClass("error_show").addClass("error");
        input.removeClass("invalid").addClass("valid");
    }
    else {
        error_element.removeClass("error").addClass("error_show");
        input.removeClass("valid").addClass("invalid");
    }
}

function check_required_input_form(formName, action_if_valid, event) {
    var form_data = $("#" + formName).serializeArray();
    var error_free = true;
    for (var input in form_data) {
        var element = $("#" + form_data[input]['name']);
        if (element.attr("required") === "required") {
            if (element.attr("type") === "text") {
                check_required_input(form_data[input]['name']);
            }
            else if (element.attr("type") === "email") {
                check_required_email(form_data[input]['name']);
            }
            else if (element.attr("type") === "telephone") {
                check_required_telephone(form_data[input]['name']);
            }
            var valid = element.hasClass("valid");
            if (!valid) {
                error_free = false;
            }
        }
    }
    if (!error_free) {
        event.preventDefault();
    }
    else {
        if (action_if_valid === "landing_page") {
            alert("Guarda datos para Landing Page");
        }
        else if (action_if_valid === "contactenos") {
            alert('Guarda datos para Contactenos');
        }
    }
}


