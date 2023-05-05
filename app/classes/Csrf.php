<?php

namespace app\classes;

class Csrf{
    
    private $token;

    public function gerarToken(){

        if(!isset($_SESSION['token'])){
            $_SESSION['token'] = md5(uniqid());
        }else{
            unset( $_SESSION['token']);
            $_SESSION['token'] = md5(uniqid());
        }
        $this->token = $_SESSION['token'];

        if($this->token){
            return $this->token;
        }

        return false;
    }

    public function verificarToken($tokenForm){
        if(!isset($tokenForm)){
            return false;
        }else{
            if($tokenForm != $_SESSION['token']){
                return false;
            }
        }
        return true;
    }

}