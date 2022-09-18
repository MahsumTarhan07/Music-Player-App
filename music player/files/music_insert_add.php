<?php
session_start();
ob_start();
include('../db/database.php');


if(isset($_POST["musicAddBtn"])){

    $user_id = $_SESSION["userID"];

    echo $user_id;

    $music_name = $_POST["musicNameAdd"];
    $music_file_add = $_POST["musicFile"];
    $music_genre = $_POST["musicGenres"];

    echo $music_name;

    if($password == $password_repeat){
        $music_insert = $db->prepare("INSERT INTO music_genre SET MUSİC_NAME = ?, MUSİC_FİLE = ?,  MUSİC_GENRE = ? WHERE USER_İD=?");
        $insert = $music_insert->execute(
            [
                $music_name,
                $music_file_add,
                $music_genre,
                $user_id
            ] 
        );
        $music_number = $music_insert->rowCount();
        if($music_number==true){
            echo "Şarkınız Başarılı Bir Sekilde Kayıt Edildi <br>";
        }else{
            echo "Bilinmeyen Bir Nedenden Dolayı Eklenemedi";
        }
    } 
}

?>