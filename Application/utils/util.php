<?php

function redirect($url){
    header("Location: http://$_SERVER[HTTP_HOST]/php-mvc/$url");
    exit;
}

function redirectBlade($url){
    return "http://$_SERVER[HTTP_HOST]/php-mvc/$url";
}