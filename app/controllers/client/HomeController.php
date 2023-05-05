<?php

namespace app\controllers\client;

use app\core\Controller;
use app\models\QueryBase;
use app\classes\NotLogged;
use app\classes\Validacao;
use app\classes\BlockNotAdmin;
use app\classes\BlockNotLogged;
use app\classes\ExtractPermissions;

class HomeController extends Controller{

    public function __construct(){   
        
        NotLogged::notLogged();
        // BlockNotLogged::block($this, ExtractPermissions::extract("home"));
        
    }

   public function index(){

    $dados =[
        "title" => "Página inicial",
        "view" => "pages/client/index",
        "titleViewName" => "index",
    ];
        $this->load("pages/client/template", $dados); 
   } 

}
