<?php
session_start();
ob_start();
include('../db/database.php');


function musicAdd(){
    header('Refresh:2;music_add.php'); 
    die();
}

function musicInsertError(){
    header('Refresh:2;music_add.php'); 
    die();
}

if(isset($_POST["musicAddBtn"])){

    $user_id = $_SESSION["userID"];
    $name = $_POST["musicNameAdd"];
    $file = $_POST["musicFile"];
    $genres = $_POST["musicGenres"];
    
    try {
        if(empty($name) || empty($file) || empty($genres)){
            echo "<b style='red: green;'>Do Not Enter Missing Information</b>";
            musicInsertError();
        }else{
        $user_register = $db->prepare("INSERT INTO music_genre SET MUSİC_NAME = ?, MUSİC_FİLE = ?, MUSİC_GENRE = ?, USER_İD = ?");
        if(true){
            $insert = $user_register->execute(
                [
                    $name,
                    $file,
                    $genres,
                    $user_id
                ] 
            );
            
    
            if($insert == 1){
                echo " <b style='color: green;'>Music Added</b>";  
                musicAdd();                      
            }else{
                echo "<b style='red: green;'>Do Not Enter Missing Information</b>";
                musicInsertError();
            }
        }
      }   

    } catch (PDOException $e) {
        echo "Error";
        die();
  }
  
}

?>