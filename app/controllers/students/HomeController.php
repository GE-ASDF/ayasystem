<?php

namespace app\controllers\students;

use app\core\Controller;
use app\models\QueryBase;
use app\classes\NotLogged;
use app\classes\Validacao;
use app\classes\BlockNotAdmin;
use app\classes\BlockNotLogged;
use app\classes\ExtractPermissions;

class HomeController extends Controller{

    // public function __construct(){   
        
    //     NotLogged::notLogged();
    //     BlockNotLogged::block($this, ExtractPermissions::extract("home"));
        
    // }

   public function index(){

    $tipoPedidos = (new QueryBase)->fetchAll("tipo_pedido");
    $clientes = (new QueryBase)->fetchAll("clientes");
    $funcionarios = (new QueryBase)->fetchAll("funcionarios");
    $pedidos = (new QueryBase)->fetchAll("pedidos", critery:" WHERE Finalizado = 1 AND PedidoPronto != 1 ORDER BY HoraPedido DESC");
    $dadosPedido = array();

    foreach($pedidos as $pedido){
        $detalhes = (new QueryBase)->fetchAll("produtos AS P, detalhes_pedido AS DP, categorias_produto AS CP", ["CodigoPedido" => $pedido->CodigoPedido], critery:" WHERE P.CodigoCategoria = CP.CodigoCategoria AND CP.NomeCategoria LIKE 'pizzas' AND DP.CodigoPedido = :CodigoPedido AND P.CodigoProduto = DP.CodigoProduto");
        $dadosPedido[] = [
            "CodigoPedido" => $pedido->CodigoPedido,
            "PedidoPronto" => $pedido->PedidoPronto,
            "Detalhes" => $detalhes
        ];
    }
    $dados =[
        "title" => "Página inicial",
        "view" => "pages/students/index",
        "tipoPedidos" => $tipoPedidos, 
        "clientes" => $clientes,
        "funcionarios" => $funcionarios,
        "pedidos" => $dadosPedido,
        "titleViewName" => "index",
    ];
        $this->load("pages/students/template", $dados); 
   } 

}
