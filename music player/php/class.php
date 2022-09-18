<?php

class LoginTrue{
    function loginTrueGo(){
        header("location:home.php?durum=basariligiris=true");
        header('Refresh:1;../files/home.php'); 
    }
    
}



?>