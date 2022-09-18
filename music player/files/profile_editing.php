<?php
include("header.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>My Profile Editing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href=".././css/profile.css">
    <script src=".././js/profile.js"></script>
  </head>
  <body>

<div class="form-area">
  <div class="left_profile">
    <div class="profile-photo">
      <div class="photo">
          <img src=".././img/7294809.jpg" alt="" class="mx-auto d-block">
      </div>
    </div>
    <div class="contact">
      <div for="name-lastname" class="name-lastname">Mahsum Tarhan</div>
      <div for="nick-name" class="nick-name">Nick Name</div>
      <div id="profile-settings">
          <i class="fa-sharp fa-solid fa-user" onclick="myProfileUpdate()"></i>
      </div>
      <div class="follow">
        <div class="my-followers">99 <br> Takipci</div>
        <div class="I-follow">100<br> Takip</div>
      </div>
      <div class="social-connection">
        <div class="facebook"><i class="fa-brands fa-facebook"></i></div>
        <div class="instagram"><i class="fa-brands fa-instagram"></i></div>
        <div class="tiktok"><i class="fa-brands fa-tiktok"></i></div> 
      </div>
      <div>
        <div class="music-total">
        <p>Toplam Muziklerim<br>
            <p class="total">100</p>
        </div>
      </div>
    </div>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>