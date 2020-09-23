<?php // este é um try catch para o acesso do utilisador

define('HOST','localhost');
define('DB_NAME','projetoconecta');
define('PASS','');

try{
    $db = new PDO("mysql:host=" . "HOST"; "dbname=" . DB_NAME, USER, PASS);
    $db-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"connect> OK !";
} catch(PDOexception $e){
    echo$e;
}