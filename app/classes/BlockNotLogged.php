<?php
namespace app\classes;

class BlockNotLogged{
    public static function block($controller, array $blockMethods, string $goTo = '', string $optional = ''){

        $methodToBlock = Block::getMethodsTolock($controller, $blockMethods);
        $sess = $optional ? $_SESSION[SESSION_LOGIN][$optional]:$_SESSION[SESSION_LOGIN];
        if(!isset($sess) && $methodToBlock){
            if(BlockRequestPostGet::block("Você não tem permissão para realizar esta ação.", "login")){
                die();
            }
            redirect(URL_BASE . $goTo);
        }
        if(!isset($sess)){
            if(BlockRequestPostGet::block("Você não tem permissão para realizar esta ação.", "login")){
                die();
            }
        }
    }
}