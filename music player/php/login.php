<?php
session_start();
ob_start();

include('../db/database.php');

function loginTrue(){
    header("location:Home.php?durum=basariligiris=true");
    header("location:./../files/home.php");
    die();
}


function loginFalse(){
    header("location:login.html?durum=başarısız=false");
    header("location:../login.php");
    die(); 
}


if(isset($_POST["loginbtn"])){
    $emailPhone = $_POST["email-vs-phone-number"];
    $passwords = md5($_POST["password"]);
    $cryptPassword = hash("sha256",$passwords);

    if(empty($emailPhone)){
        $nameError = "Email veya Numaranız Boş Bırakmayınız";
    }elseif(empty($password)){
        $passwordError = "Şifreniz Boş Bırakmayınız";
    }


    if(empty($passwords) || empty($cryptPassword)){
        echo "Lütfen Bilgileriniz Kontrol Ediniz";
    }else{
        include('../db/database.php');
        $userLogin = $db->prepare("SELECT * FROM register_users WHERE EMAİL=:email || PHONE=:phone && PASSWORDS=:passwords");
        $loginSearch = $userLogin->execute([
            'email'=> $emailPhone,
            'phone'=> $emailPhone,
            'passwords'=> $cryptPassword
        ]);

        $user = $userLogin->rowCount();
        $userSession = $userLogin->fetch(); 

        if($user == 1){
            $_SESSION["userID"] = $userSession["ID"];
            $_SESSION['userName'] = $userSession['NAMES'];
            $_SESSION['phone'] = $userSession['PHONE'];
            $_SESSION['email'] = $userSession['EMAİL'];

            loginTrue();
            exit();
        
            }else {
                loginFalse();
                die();
            }

        }

    }

?>
