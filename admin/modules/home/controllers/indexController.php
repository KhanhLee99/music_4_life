<?php

function construct() {
    load('helper', 'url');
    load_model('index');
}

function indexAction(){
    load_view('index');
}