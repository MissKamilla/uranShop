<?php
namespace Services;

class Db{
    private $pdo;
    public function __construct(){
        extract((require __DIR__.'/../settins.php')['db']);
        $this->pdo = new \PDO("mysql:host=$host;dbname=$db_name;port=$port",$user,$password);
    }
    public function query(string $sql, array $params=[], string $className= 'stdClass'){ 
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);
        if($result==false){
            return null;
        }
        return $sth ->fetchAll(\PDO::FETCH_CLASS, $className);
    }
}
