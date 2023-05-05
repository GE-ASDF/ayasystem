<?php

class Core{
    private $controller;
    private $metodo;
    private $parametros = array();
    
    public function __construct() {
        $this->verificaUri();
    }
    
    public function run(){
       $controllerCorrente = $this->getController();        
       $c = new $controllerCorrente;
       call_user_func_array(array($c, $this->getMetodo()), $this->getParametros());      
        
    }
    public function verificaUri(){
        
        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        $url = end($url);
        if($url!=""){
            $url = explode('/', $url);
            array_shift($url);
            
            //Pega o Controller
            if(is_dir(PASTA_PADRAO.$url[0])){
                
                if(isset($url[1]) && $url[1]){
                    $this->controller = $url[0]."\\".ucfirst($url[1]) ."Controller";
                    array_shift($url);
                }else{
                    $this->controller = $url[0]."\\".ucfirst(CONTROLLER_PADRAO) ."Controller";
                }
                
            }else{ 
                
                $this->controller = ucfirst($url[0]) ."Controller";
            }
            
            array_shift($url);
            //Pega o Método
         
            if(isset($url[0])){
                $this->metodo = $url[0];
                array_shift($url);
            }
           
            //Pegar os parâmetros
            
            if(isset($url[0])){
                $this->parametros= array_filter($url);
            }

        }else{
            $this->controller = "site\\".ucfirst(CONTROLLER_PADRAO) ."Controller";
        }       
       
    }    
    public function getController() {
        $url = explode("\\",$this->controller);
        if(class_exists(NAMESPACE_CONTROLLER .$this->controller)){
            return NAMESPACE_CONTROLLER .$this->controller;
        } 
        
        if(isset($url[0]) && $url[0]){
            if(is_dir(PASTA_PADRAO.$url[0])){
                return NAMESPACE_CONTROLLER . $url[0]."\\" .ucfirst(CONTROLLER_PADRAO) ."Controller";
            }
        }
        return NAMESPACE_CONTROLLER ."site\\".ucfirst(CONTROLLER_PADRAO) ."Controller";
    }

    public function getMetodo() {
       
        if(method_exists(NAMESPACE_CONTROLLER .$this->controller, $this->metodo)){
            return $this->metodo;            
        }
        
        return METODO_PADRAO;      
    }

    public function getParametros() {
        return $this->parametros;
    }


}
