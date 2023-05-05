<?php

namespace app\middlewares;

use app\models\QueryBase;
use Databases;

class Queue{
    
    protected $middlewares = [
        'auth' => 'auth',
    ];

    public function middleware($dados, string $functions)
    {
        $result = [];
        if(str_contains($functions, '|')){
            $functionsExplode = explode("|", $functions);
            foreach($functionsExplode as $functionExplode){
                if(method_exists($this, $functionExplode)){
                    $result[$functionExplode] = self::$functionExplode($dados);
                    if($result[$functionExplode] === false || $result[$functionExplode] === null){
                        break;
                    }
                }else{
                    return false;
                }
            }
            return $result[$functionExplode];
        }else{
            $result[$functions] = self::$functions($dados);
            return $result[$functions];
        }
    }

    private static function auth($dados){
        $queryBase = new QueryBase('prepara');
        $fetch = $queryBase->fetch($dados['table'], $dados['dados'], critery:'WHERE Login = :login AND Senha = :senha');
        if($fetch){
            return $fetch;
        }else{
            return false;
        }
    }

    private static function session($fetch){
        
        $dadosUsuario = array();
        if($fetch){
            $queryBase = new QueryBase('prepara');
            $usuario = $queryBase->fetch("usuarios_sistema AS US, funcionarios as F, cargos AS C", 
            ["login" => $fetch->Login], critery:"
            WHERE US.login = :login AND F.CodigoFuncionario = US.CodigoFuncionario AND 
            C.CodigoCargo = F.CodigoCargo");
           
            unset($usuario->Senha);
            echo "<pre>";  
            $queryBase = new QueryBase('prepara');
            $controles = $queryBase->fetchAll("controles AS C, usuarios_permissoes AS UP", ["CodigoUsuario" => $usuario->CodigoUsuario], fields:"DISTINCT C.NomeControle, C.CodigoControle, C.Descricao", critery: "WHERE UP.CodigoUsuario = :CodigoUsuario AND C.CodigoControle = UP.CodigoControle");
            $bloqueios = array();
            
            foreach($controles as $controle){
                $queryBase = new QueryBase('prepara');
                $usuarios_permissoes = $queryBase->fetchAll("usuarios_permissoes AS UP, metodos_controle AS MC", ["CodigoControle" => $controle->CodigoControle, "CodigoUsuario" => $usuario->CodigoUsuario], critery:"
                 where UP.CodigoControle = :CodigoControle AND UP.CodigoUsuario = :CodigoUsuario AND MC.CodigoControle = :CodigoControle AND MC.CodigoMetodo = UP.CodigoMetodo");
                $bloqueios[] = [
                    "NomeControle" => $controle->NomeControle,
                    "Descricao" => $controle->Descricao,
                    "Metodos" => $usuarios_permissoes,
                ];
            }
          
            $dadosUsuario = [
                    "CodigoFuncionario" => $usuario->CodigoFuncionario,
                    "NomeFuncionario" => $usuario->NomeFuncionario,
                    "CodigoUsuario" => $usuario->CodigoUsuario,
                    "Cargo" => $usuario->NomeCargo,
                    "Bloqueios" => $bloqueios,
                ];
            
            $_SESSION[SESSION_LOGIN] = $dadosUsuario;
            if(isset($_SESSION[SESSION_LOGIN])){
                return true;
            }else{
                return false;
            }
    }else{
        return false;
    }

}
    private static function redirect($redirect){
        header("Location:".URL_BASE.$redirect);
    }
}