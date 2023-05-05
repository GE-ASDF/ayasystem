<?php
namespace app\classes;
use app\classes\MethodType;

class NotLogged{
    public static function notLogged(){
        MethodType::get();
        if(!isset($_SESSION[SESSION_LOGIN])){
            if(strtolower(MethodType::get()) == 'get' OR strtolower(MethodType::get()) == 'post'){
                redirect(URL_BASE . "login");
                die();
            }else{
                redirect(URL_BASE . "login");
                return;
            }
        }
    }
}