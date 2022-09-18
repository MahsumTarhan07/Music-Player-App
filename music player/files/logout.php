<?php
$_SESSION = array();

session_destroy();
session_unset();
echo "Oturum sonlandırıldı.<br>";
header("location:.././login.html");

?>