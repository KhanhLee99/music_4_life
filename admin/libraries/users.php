<?php

function is_login(){
    if(isset($_SESSION['is_login'])){
        return true;
    }
    return false;
}

function user_login(){
    if(is_login()){
        return $_SESSION['username'];
    }
    else{
        return 'User';
    }
    
}

function is_admin(){
    if(is_login()){
        if($_SESSION['is_admin'] == true){
            return true;
        }
        return false;
    }
}

function is_big_admin(){
    if(is_login()){
        if($_SESSION['is_big_admin'] == true){
            return true;
        }
        return false;
    }
}

