<?php
namespace Services;

use Exceptions\DbException;

class Db{
    private $pdo;
    public function __construct(){
        extract((require __DIR__.'/../settins.php')['db']);
        try{
            $this->pdo = new \PDO("mysql:host=$host;dbname=$db_name;post=$post",$user,$password);
        }catch(\PDOException $e){
           throw new DbException('DB connection error: '. $e->getMessage());
        }
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
