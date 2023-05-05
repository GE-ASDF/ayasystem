<?php

namespace app\controllers\admin;

use app\classes\BlockNotAdmin;
use app\core\Controller;
use app\models\QueryBase;
use app\classes\NotLogged;
use app\classes\Validacao;
use app\classes\BlockNotLogged;
use app\classes\ExtractPermissions;

class HomeController extends Controller{

    public function __construct(){   
        
        NotLogged::notLogged();
        // BlockNotLogged::block($this, ExtractPermissions::extract("home"));
        // BlockNotAdmin::block($this, ExtractPermissions::extract("home"), "Você não tem permissão para realizar esta ação", 'client');

    }

   public function index(){

        $dados =[
            "title" => "Página inicial",
            "view" => "pages/admin/index",
        ];

        $this->load("pages/admin/template", $dados); 
   } 

}
