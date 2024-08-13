<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $metodo = $_SERVER['REQUEST_METHOD'];
        
        if($_SERVER['REQUEST_URI']){
            $url = explode('/', $_SERVER['REQUEST_URI']);
        }
        
        var_dump($url[3]);
           
        ?>
    </body>
</html>
