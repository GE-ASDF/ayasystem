<?php

namespace app\core;

class Databases{

    public function prepara(){
        return [
            "host" => "servidorescola",
            "dbname" => "preparaadm",
            'user' => "prepcurso",
            "password" => "ke7@ch%",
            "port" => "3307"
        ];
    }
    public function ouro(){
        return [
            "host" => "servidorouro",
            "dbname" => "ouromoderno",
            'user' => "prepara2",
            "password" => "prepara",
            "port" => "3306"
        ];
    }
    public function presencas(){
        return [
            "host" => "servidorouro",
            "dbname" => "bd_presencas",
            'user' => "prepara2",
            "password" => "prepara",
            "port" => "3306"
        ];
    }
}
