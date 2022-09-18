<?php

include('../db/database.php');

function registerForms(){
    header('Refresh:1;../register.html'); 
    exit();
}


function loginForm(){
    header('Refresh:1;../login.html'); 
    exit();
}

function StudentTrue(){
    echo "Kayıtlı kullanıcı var <br>";
    header('Refresh:1;../register.html'); 
    exit();
}

    if(isset($_POST["register_btn"])){

        $name = $_POST["name"] . mt_rand();
        $lastname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $password_repeat = md5($_POST["repeat_password"]);
        $cryptopassword = hash('sha256', $password);

        if(empty($name) || empty($lastname) || empty($phone) || empty($email) || empty($password) || empty($password_repeat)){
            echo "Lütfen Bilgilerniz Eksik Girmeyiniz";
            registerForms();
            die();
        }else{
        //Veritabanında Kayıtlı Kullanıcı Varmı yokmu diye sorgulama yapmamız gerek
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
			$nameError = 'Ad yalnızca harf, sayı ve boşluk içerebilir';
            echo $nameError;
        }elseif($password != $password_repeat){
            echo "Şifreniz Birbirle Uyuşmuyor <br>";
            registerForms();
            die();
        }elseif($password == 6 && $password_repeat == 6){
            echo "Şifreniz 6 Karkterden fazla olmalıdır";
            registerForms();
            die();
        }

        if(true) {
            $user_Record_Search = $db->prepare("SELECT * FROM register_users WHERE NAMES=:names or PHONE=:phone or EMAİL=:email");
            $user_Record_Search->execute([
                'names' => $name,
                'phone'=> $phone,
                'email' => $email
            ]);
            $user_true = $user_Record_Search->rowCount();
            
            if($user_true==1){
                StudentTrue();
                die();
            }
        }

        if(true){
            if($password == $password_repeat){
                $user_register = $db->prepare("INSERT INTO register_users SET NAMES = ?, LASTNAME = ?,  EMAİL = ?, PHONE = ?, 	PASSWORDS= ?");
                if($password == $password_repeat){
                    $insert = $user_register->execute(
                        [
                            $name,
                            $lastname,
                            $email,
                            $phone,
                            $cryptopassword
                        ] 
                    );
    
                    if($insert == 1){
                        echo "
                        <div class='alert alert-success'>Kaydınız Başarılı Bir Sekilde Oluştu!
                        <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Kapat</span></button>
                        </div>";                        
                        loginForm();
                    }
                }else{
                echo "Şifeniz Birbiyle Uyuşmuyor Tekrar Deneyiniz <br>";       
                registerForms();
                die();
            }
        }
      }
      
    }
}


?>