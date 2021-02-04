<?php 
namespace Models;
use \Services\Db;
class Page {
    protected $id;
    protected $friendly;
    protected $title;
    protected $description;
    public function getId(){
        return $this->id;
    }
    public function getFriendly(){
        return $this->friendly;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public static function all(){
        $db= new Db();
        return $db->query('SELECT * FROM '.self::getTableName(),[],self::class);
    }
    public static function getTableName(){
        return 'pages';
    }
    public static function getByID($id){
        $db= new Db();
        $result = $db->query('SELECT * FROM '.static::getTableName().' WHERE id=? ',[$id], static::class);
        return $result ? $result[0] : null;
    }
   
}












