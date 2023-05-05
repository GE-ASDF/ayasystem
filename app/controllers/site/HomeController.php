<?php

namespace app\controllers\site;

use app\classes\BlockNotAdmin;
use app\core\Controller;
use app\models\QueryBase;
use app\classes\NotLogged;
use app\classes\Validacao;
use app\classes\BlockNotLogged;

class HomeController extends Controller{

   public function index(){

        $dados =[
            "title" => "Página inicial",
            "view" => "pages/site/index",
        ];

        $this->load("template", $dados); 
   } 

}
