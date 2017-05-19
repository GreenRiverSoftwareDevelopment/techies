$('document').ready(function() {

    "use strict";
    var preventDefaultEvent = function (e) {
        e.preventDefault();
    };

    $('.fname').blur(function() {

        var value = $('.fname').val();

        if (value === "" || value === " ") {
            addError('.valid-first-name', 'First name is required.');
        }
        else {
            removeError('.valid-first-name', 'First name: ');
        }
        
        if (value.length > 50) {
            addError('.first-name-character-length', 'Character length must'
                     . ' be less than 50 characters');
        }
        else {
            removeError('.first-name-character-length', 'Character length must'
                     . ' be less than 50 characters');
        }
    });

    $('.lname').blur(function() {

        var value = $('.lname').val();

        if (value === "" || value === " ") {
            addError('.valid-last-name', 'Last name is required.');
        }
        else {
            removeError('.valid-last-name', 'Last name: ');
        }
        
        if (value.length > 50) {
            addError('.last-name-character-length', 'Character length must'
                     . ' be less than 50 characters');
        }
        else {
            removeError('.last-name-character-length', 'Character length must'
                     . ' be less than 50 characters');
        }
    });

    $('.school_email').blur(function() {

        var value = $('.school_email').val();

        if (value === "" || value === " ") {
            addError('.valid-school-email', 'School email is required.');
        }
        else {
            removeError('.valid-school email', 'School email: ');
        }
        
        if (value.length > 100) {
            addError('.school-email-character-length', 'Character length must'
                     . ' be less than 100 characters');
        }
        else {
            removeError('.school-email-character-length', 'Character length must'
                     . ' be less than 100 characters');
        }
    });


    $('.prime_email').blur(function() {

        var value = $('.prime_email').val();

        if (value === "" || value === " ") {
            addError('.valid-prime-email', 'Prime email is required.');
        }
        else {
            removeError('.valid-prime-email', 'Prime email: ');
        }
        
        if (value.length > 100) {
            addError('.prime-email-character-length', 'Character length must'
                     . ' be less than 100 characters');
        }
        else {
            removeError('.prime-email-character-length', 'Character length must'
                     . ' be less than 100 characters');
        }
    });


    function addError(div_id_name, error_message) {

        var input_class = div_id_name + ' input';

        $('form').bind('submit', preventDefaultEvent);
        $(div_id_name).addClass("has-error has-feedback");
        $(input_class).addClass("form-control danger red");
        $(div_id_name + " > span").addClass("glyphicon glyphicon-remove form-control-feedback");
        $(div_id_name + " > label").html(error_message);
    };

    function removeError(div_id_name, ok_message) {

        var input_class = div_id_name + ' input';

        $('form').unbind('submit', preventDefaultEvent);
        $(div_id_name).removeClass("has-error").addClass("has-success");
        $(input_class).removeClass("danger red");
        $(div_id_name + " > span").removeClass("glyphicon-remove").addClass("glyphicon-ok");
        $(div_id_name + " > label").html(ok_message);
    };
});