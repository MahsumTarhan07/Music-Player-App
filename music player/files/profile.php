<?php
include("header.php");
?>

<!doctype html>
<html lang="en">
<head>
  <title>My Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src=".././js/profile.js"></script>
  <link rel="stylesheet" href=".././css/profile.css">

</head>

<body>

    <?php
    $userID =  $_SESSION["userID"];
    $profileGo = $db->prepare("SELECT * FROM register_users WHERE ID=?");
    $profileGo->execute([
        $userID
    ]);
    $row = $profileGo->fetch(PDO::FETCH_ASSOC);


    $music_genre = $db->prepare("SELECT * FROM music_genre WHERE USER_İD=?");
    $music_genre->execute([
        $userID
    ]);    

    $music_number = $music_genre->fetch(PDO::FETCH_ASSOC);
 
   ?>

   



  <div class="form-area">
    <div class="left_profile">
      <div class="profile-photo">
        <div class="photo">
          <img src=".././img/7294809.jpg" alt="" class="mx-auto d-block">
        </div>
      </div>
      <div class="contact">
        <div for="name-lastname" class="name-lastname"><?php echo $row['NAMES']." ". $row['LASTNAME']; ?></div>
        <div for="nick-name" class="nick-name"><?php echo $row['NİCK_NAME']; ?></div>
        <div id="profile-settings">
          <i class="fa-sharp fa-solid fa-user" onclick="myProfileUpdate()"></i>
        </div>
        <div class="follow">
          <div class="my-followers"> <span class="followers-number">99</span> <br> Takipci</div>
          <div class="I-follow"> <span class="follow-number">99</span> <br> Takip</div>
        </div>
        <div class="social-connection">
          <div class="facebook"><a href="<?php echo $row['FACEBOOK'];?>" target="blank"><i class="fa-brands fa-facebook"></i></a></div>
          <div class="instagram"><a href="<?php echo $row['FACEBOOK'];?>" target="blank"><i class="fa-brands fa-instagram"></i></a></div>
          <div class="tiktok"><a href="<?php echo $row['FACEBOOK'];?>" target="blank"><i class="fa-brands fa-tiktok"></i></i></a></div>
        </div>
        <div>

          <div class="music-total">
            <p>Toplam Muziklerim<br>
            <p class="total"><?php echo $music_number['ID'] + 1;?></p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="right-from">
      <div class="form-update">
        <div id="name">Profile Editing</div>

        <form action="" name="update-profile" method="post">
          <input type="text" name="name" placeholder="Name" value="<?php echo $row['NAMES'];?>" > <br>
          <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $row['LASTNAME'];?>" ><br>
          <input type="text" name="nicknames" placeholder="Nick Names" value="<?php echo $row['NİCK_NAME'];?>" ><br> 
          <input type="text" name="facebook" placeholder="Facbook" value="<?php echo $row['FACEBOOK'];?>" ><br>
          <input type="text" name="instagram" placeholder="İnstagram" value="<?php echo $row['INSTAGRAM'];?>" ><br>
          <input type="text" name="tiktok" placeholder="TikTok" value="<?php echo $row['TİKTOK'];?>" ><br>
          <button type="submit" name="updateBtn"  class="btn btn-primary mt-4 login-btn" onclick="updateBtn()">Güncele</button>
        </form>
        <div class="profile-help">
          <a href="#" class="help">Yardım İstermisiniz?</a>
        </div>
      </div>
    </div>
  </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>