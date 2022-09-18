<?php
session_start();
ob_start();
include('../db/database.php');


function updateTrue(){
    header('Refresh:3;profile.php'); 
    echo "<script>
    alert('Başarılı Bir Şekilde Güncelendi ');
          </script>";
    die();
}


function UpdateFalse(){
    header('Refresh:3;profile.php'); 
    echo "<script>
    alert('Profil Güncelenmedi');
          </script>";
    die();
}

function user(){
    echo "Kayıtlı kullanıcı var <br>";
    header('Refresh:3;profile.php'); 
    exit();
}

if(isset($_POST["updateBtn"])){
        $userID =  $_SESSION["userID"];
        $name = ServerSecurity($_POST["name"]);
        $surname = ServerSecurity($_POST["lastname"]);
        $nickNames = ServerSecurity($_POST["nicknames"]);
        $facebook = ServerSecurity($_POST["facebook"]);
        $instagram = ServerSecurity($_POST["instagram"]);
        $tiktok = ServerSecurity($_POST["tiktok"]);

       /*
            if(true){
                try{
                    $control = $db->prepare("SELECT * FROM register_users WHERE NAMES=? or LASTNAME=? or NİCK_NAME=? WHERE ID = $userID}'");
                    $user = $control->execute([
                        $name,
                        $nickNames,
                        $surname,
                        $userID
                    ]);
                    $user_update_control = $control->rowCount();
    
                    if($user_update_control==1){
                        echo "Ayını Kullanıcı Adı Kullanılmakta Farklı Bir Değer Giriniz <br>";
                        user();
                        die();
                    }
                }catch(PDOException $e){
                    print $e->getMessage();
                    die();
                }
            }
*/
           
            if(true){
                $sql = $db->prepare("UPDATE register_users SET NAMES=?, LASTNAME=?, NİCK_NAME=? , FACEBOOK=? , INSTAGRAM=?, TİKTOK=?  WHERE ID=?");
                $sql->execute([
                    $name,
                    $surname,
                    $nickNames,
                    $facebook,
                    $instagram,
                    $tiktok,
                    $userID
                ]);
    
                if($sql){
                    updateTrue();
                }else {
                    loginFalse();
                    die();
                    }
            }
        }




/*
if(isset($_POST["guncele_btn"])){

    $user_id = $_SESSION["user_id"];

    $name = $_POST["update_user"];
    $lastname =$_POST["update_lastname"];
    $email =$_POST["update_email"];
    $password =$_POST["update_sifre"];
    $repeat_password =$_POST["update_sifre_repeat"];

    try{
        $update = "UPDATE uyeler SET  adi=:adi , soyadi=:soyadi , kullaniciadi=:kullaniciadi, sifre=:sifre, sifretekrar=:sifretekrar WHERE id=:id LIMIT 1 ";
        $veritabanıkontrol = $db->prepare($update);

        $veri = [
            'adi' =>$name,
            'soyadi' => $lastname,
            'kullaniciadi' => $email,
            'sifre'=> $password,
            'sifretekrar'=> $repeat_password,
            'id'=> $user_id

        ];

        $update_execute = $veritabanıkontrol->execute($veri);

        if($update_execute){
            header("location:profilim.php?gunceleme-basarili=true");
            echo " <script>
                    uyarı();
            </script>";
            exit();
           
        }else{
            header("location:profilim.php?guncelem-başarisiz=false");
            exit();
        }


    }catch(PDOException $error){
        echo "Hata Mesajı :" .  $error->getMessage();
    }

}




<?php
include('../db/database.php');

function UpdateFalse(){
    header("location:profile.php?update==False");
    header('Refresh:2;profile.php'); 
    die();
}

function updateTrue(){
    header("location:profile.php?update==True");
    header('Refresh:2;profile.php'); 
    echo "<script>
    alert('Başarılı Bir Şekilde Güncelendi ');
          </scrip>";
    die();
}

if(isset($_POST["updateBtn"])){
        $userID =  $_SESSION["userID"];
        $name = ServerSecurity($_POST["name"]);
        $lastname = ServerSecurity($_POST["lastname"]);
        $nickNames = ServerSecurity($_POST["nicknames"]);
        $facebook = ServerSecurity($_POST["facebook"]);
        $instagram = ServerSecurity($_POST["instagram"]);
        $tiktok = ServerSecurity($_POST["tiktok"]);


    if(empty($name) || empty($lastname)){
        echo "Lütfen Adınız ve Soyadınızı Boş Bırakmayınız <br>";
        header('Refresh:3;profile.php'); 
    }elseif(empty($name)){
        echo "Lütfen Adınız Boş Bırakmayınız <br>";
        header('Refresh:3;profile.php'); 
    }elseif($lastname){
        echo "Lütfen Soyadınız Boş Bırakmayınız <br>";
        header('Refresh:3;profile.php'); 
    }else{
        $user_name_lastname_control = $db->prepare("SELECT * FROM register_users WHERE NAMES=:names AND LASTNAME=:lastname WHERE ID=id");
        $user_data->execute([
            'names' => $name,
            'lastname'=> $phone,
            'id' => $userID
        ]);
        $user = $user_data->rowCount();
        if($user){
            echo "Ayını Kullanıcı Adı Kullanılmakta Farklı Bir Değer Giriniz <br>";
        }else{

        }

    }
}


?>
*/

?>