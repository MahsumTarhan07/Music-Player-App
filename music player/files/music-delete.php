<?php
session_start();
ob_start();
include('../db/database.php');

try {

    $delete = "DELETE FROM music_genre WHERE ID ='". $_GET['musicid'] . "'";
    $db->exec($delete);
    echo "Record deleted successfully";
    
} catch (PDOException $e) {
    
    {
        echo $delete . "" . $e->getMessage();
    }
}

$db = null;
?>