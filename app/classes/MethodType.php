<?php

namespace app\classes;

class MethodType{

    public static function get(){

        $method = $_SERVER["REQUEST_METHOD"];

        if($method){
            return $method;
        }

        return false;
    }
    
}