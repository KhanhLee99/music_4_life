<?php
function is_username($username)
{
    $patern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($patern, $username)) {
        return false;
    }
    return true;
}

function is_password($password)
{
    $patern = "/^([A-Z]){1}([\w.\_!@#$%^&*()]+){5,31}$/";
    if (!preg_match($patern, $password)) {
        return false;
    }
    return true;
}

function is_email($email)
{
    $patern = "/^[A-Za-z0-9_.]{2,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (!preg_match($patern, $email)) {
        return false;
    }
    return true;
}

function is_phone($phone)
{
    $patern = "/^(09|08|01[2|6|8|9])+([0-9]{8})$/";
    if (!preg_match($patern, $phone)) {
        return false;
    }
    return true;
}

function get_value($field)
{
    global $$field;
    if (!empty($$field)) {
        return $$field;
    }
    return false;
}

function form_error($field)
{
    global $error;
    if (!empty($error[$field])) {
        if($field == "success") return "<p style='color: green;'>{$error[$field]}</p>";
        return "<p style='color: red;'>{$error[$field]}</p>";
    }
    return false;
}

function form_error2($field)
{
    global $error2;
    if (!empty($error2[$field])) {
        return "<p style='color: red;'>{$error2[$field]}</p>";
    }
    return false;
}