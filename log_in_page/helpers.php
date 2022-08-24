<?php
function get($input_name){
    return $_GET[$input_name];
}
function post($input_name){
    return $_POST[$input_name];
}