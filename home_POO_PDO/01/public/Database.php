<?php

namespace App;

use \PDO;

class Database {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;
    
    public function __construct($db_name, $db_user='test', $db_pass ='test01', $db_host='localhost'){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        $pdo = new PDO('mysql:dbname=dcl.dartagnan;host=localhost', 'test', 'test01');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo = $pdo;

        var_dump('getPDO called');
        
    }
    var_dump('getPDO called');
    return $pdo;

    public function query($statement){
        $req = $this-> getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }

}