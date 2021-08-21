
function showInvalidFeedback(fieldname, message){
        $(`.invalid-feedback.${fieldname}`).html(message);
        $(`#${fieldname}`).addClass('is-invalid');
}

function hideInvalidFeedback(fieldname, message){
    $(`.invalid-feedback.${fieldname}`).html('');
    $(`#${fieldname}`).removeClass('is-invalid');
}

function require(value){
    if (value){
        return null;
    }
    return "trường này là bắt buộc";
}

function isEmail(value){
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(String(value).toLowerCase())) {
        return null;
    }
    return "Email khong dung dinh dang"
}

function validPhone(value){
    const re = /^[0-9\-\+]{9,15}$/
    if (re.test(string(value).toLowerCase())){
        return null;
    }
    return 'số điện thoại phải có ít nhất 9 số và tối đa 15 số'
}

function validPassword(value) {
    const re = /^(?=.*\d)(?=.*[a-zA-Z])[0-9a-zA-Z]{8,}$/
    if (re.test(String(value).toLowerCase())) {
        return null;
    }
    return 'Mật khẩu phải có ít nhất 1 số, 1 chữ cái và tối thiểu 8 ký tự';
}

function confirmEqual(value, password) {
    if (value === password) {
        return null;
    }
    return 'Mật khẩu xác nhận không chính xác';
}

function confirmEqual(value, password){
    if(value=== password){
        return null;
    }
    return "mật khẩu không chính xác";
}

function greaterThan18Age(value){
    console.log('day', value);
    let day = moment(value, "YYYY/MM/DD");
    console.log(moment().year(), day.year());
    let age = moment().year() - day.year();
    if (age >= 18) {
        return null;
    }
    return 'Bạn phải trên 18 tuổi để được mua trà sữa tại khaihub';
}



var allowSubmit= true;
function validation(){
    console.log('validating');
        allowSubmit =true;
        let error;

        //validate email
        let email = $('#email').val();
        console.log(email);
        error = require(email);
        if (error != null ) {
            allowSubmit = false;
            showInvalidFeedback('email', error);
        } else {
            hideInvalidFeedback('email');
            error = isEmail(email);
            if (error != null ) {
                allowSubmit = false;
                showInvalidFeedback('email', error);
            } else {
                hideInvalidFeedback('email');
            }
        }

        //validate phone
        let phone= $('#phone').val();
        error= require(phone);
        if(error != null){
            allowSubmit = false;
            showInvalidFeedback('phone', error);
        }else{ 
            hideInvalidFeedback('phone');
        }

        //validate fullname
        let fullname = $('#fullname').val();
        error = require(fullname);
        if(error != null){
            allowSubmit = false;
            showInvalidFeedback('fullname', error);
        }else{ 
            hideInvalidFeedback('fullname');
        }

         //validate birthday
        let day = $('#birthday').val();
        error = require(day);
        if (error != null ) {
            allowSubmit = false;
            showInvalidFeedback('birthday', error);
        } else {
            hideInvalidFeedback('birthday');
            error = greaterThan18Age(day);
            if (error != null ) {
                allowSubmit = false;
                showInvalidFeedback('birthday', error);
            } else {
                hideInvalidFeedback('birthday');
            }
        }
        
         //validate password
    let password = $('#password').val();
    error = require(password);
    if (error != null ) {
        allowSubmit = false;
        showInvalidFeedback('password', error);
    } else {
        hideInvalidFeedback('password');
        error = validPassword(password);
        if (error != null ) {
            allowSubmit = false;
            showInvalidFeedback('password', error);
        } else {
            hideInvalidFeedback('password');
        }
    }

        //validate confirmPassword
        let confirmPassword = $('#confirmPassword').val();
        error = require(confirmPassword);
        if (error != null ) {
            allowSubmit = false;
            showInvalidFeedback('confirmPassword', error);
        } else {
            hideInvalidFeedback('confirmPassword');
            error = confirmEqual(confirmPassword, password);
            if (error != null ) {
                allowSubmit = false;
                showInvalidFeedback('confirmPassword', error);
            } else {
                hideInvalidFeedback('confirmPassword');
            }
        }

    return allowSubmit;
}

function useValidation() {
    $('form input').keyup(function() {
        validation();
    })
    $('#birthday').change(function() {
        validation();
    })
}

$(function() {
    useValidation();
});