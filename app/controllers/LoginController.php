<?php

namespace app\controllers;

use app\classes\Csrf;
use app\core\Controller;
use app\classes\Validacao;
use app\middlewares\Queue;
use app\classes\MethodType;
use app\models\QueryBase;

class LoginController extends Controller{


   public function index(){
        $token = (new Csrf)->gerarToken();
        $dados =[
            "title" => "Acesso restrito",
            'token' => $token,
            "view" => "login",
        ];

        $this->load("template", $dados); 
   } 

   public function logar(){

        $dados = [
            "login" => "required",
            "senha" => "required",
            'token' => 'required',
        ];
        
        if(MethodType::get() === "POST"){
            // $middleObj = new Queue;
            $validar = (new Validacao)->validacao($dados);
            if($validar){
                if(!(new Csrf)->verificarToken($validar['token'])){
                    setFlash("fail", "O funcionário não foi cadastrado!");
                    redirect(URL_BASE . "login");
                    return;  
                }
                $senha = $validar['senha'];
                unset($validar['token']);
                unset($validar['senha']);
                $queryBase = new QueryBase('ouro');
                $usuario = $queryBase->fetch("usuarios", $validar, "*", " WHERE LOGIN = :login");
                if($usuario->SENHA == "UHJlcC0xMjM="){
                    $password_decode = base64_decode($usuario->SENHA) == $senha ? true:false;
                }else{
                    $password_decode = $usuario->SENHA == $senha ? true:false;
                }
                
            }else{
                setFlash("fail", "Não foi possível validar os dados.");
                redirect(URL_BASE."login");
            }
        }else{
            setFlash("fail", "Não foi possível validar os dados.");
            redirect(URL_BASE."login");
        }

   }

   public function destroy(){

        if(isset($_SESSION[SESSION_LOGIN])){
            unset($_SESSION[SESSION_LOGIN]);
            redirect(URL_BASE."login");
        }else{
            redirect(URL_BASE."login");
        }
   }

}
