<?php
namespace View;

class View{
    public static function render(string $path, array $vars=[]){
        extract($vars);
        unset($vars);
        ob_start();
        include __DIR__.'/../templates/header.php';
        include __DIR__.'/../templates/'.$path.'.php';
        include __DIR__.'/../templates/footer.php';
        $buffer = ob_get_contents(); 
        ob_end_clean();
        echo $buffer;

    }
}