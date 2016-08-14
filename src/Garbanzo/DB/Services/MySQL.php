<?php
namespace Garbanzo\DB\Services;

use Garbanzo\Kernel\Traits\ServiceCreation;

class Mysql {
    const OBJECT_RESULT = PDO::FETCH_OBJ;
    const ARRAY_RESULT = PDO::FETCH_ASSOC;

    use ServiceCreation;

    protected $connexion;

    public function connect($dbName, $host, $username, $password, $port = 3306) {
        $this->connexion = new PDO('mysql:dbname=' . $dbName . ';host=' . $host . ';port=' . $port, $username, $password);
    }

    public function sendQuery($sql, $parameters) {
        $this->connexion->prepare($sql)
            ->execute($parameters);
    }

    public function get($sql, $parameters, $resultFormat = self::ARRAY_RESULT) {
        return $this->connexion->prepare($sql)
            ->execute($parameters)
            ->fetch($resultFormat);
    }

    public function getAll($sql, $parameters, $resultFormat = self::ARRAY_RESULT) {
        return $this->connexion->prepare($sql)
            ->execute($parameters)
            ->fetchAll($resultFormat);
    }

}
