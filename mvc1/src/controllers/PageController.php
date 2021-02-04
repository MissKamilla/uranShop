<?php
namespace Controllers ;

use \View\View;
use \Models\Page;
use \Services\Db;

class PageController{
    private $db;
    public function __construct(){
        $this->db = new Db();
    }
    public function index(){
        $pages = Page::all();
        View::render('page/index',compact('pages'));
    }
    public function show(){
         $id=$_GET['id'];
         $page = Page::getByID($id);
         if ($page==null) { 
             View::render('errors/404',[],404);
             return;  
         }
         View::render('page/show',compact('page'));
     }
}

    
