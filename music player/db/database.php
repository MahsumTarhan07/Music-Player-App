<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=musicplayer;charset=utf8','root','');
}catch(PDOException $eror){
    echo "";
}

/*
function ServerSecurity($db){
    $trim = trim($db);
    $striptags = strip_tags($trim);
    $specialchars = htmlspecialchars($striptags, ENT_QUOTES);
    $result = $specialchars;  
    return $result;
}

*/


?>