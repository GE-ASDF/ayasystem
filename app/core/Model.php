<?php

namespace app\core;

use app\core\Databases as CoreDatabases;
use PDO;


class Model extends CoreDatabases{
    
    protected $db = null;
    private $banco = null;

    public function __construct($banco) {
        $this->banco = parent::$banco();
		 $opcoes = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND =>"Set NAMES utf8",
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        );
        return $this->db = new PDO("mysql:dbname=".$this->banco['dbname'].";host=".$this->banco['host'].";port=".$this->banco['port'],$this->banco['user'],$this->banco['password'], $opcoes);
    }
}

