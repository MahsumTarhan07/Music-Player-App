<!doctype html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src=".././js/home.js"></script>
</head>

<body>
  <?php include("header.php") ?>
  <?php
  
  $SESSİON_USER_ID =   $_SESSION["userID"];
  $SESSİON_USER_NAME =   $_SESSION["userName"];


  echo "<script>
      function welcomeMessage() { 
        alert('Welcome Home' + ' $SESSİON_USER_NAME ');
    }
    setTimeout(welcomeMessage,500);
  </script>";



if(isset($_SESSION["userName"]) || isset($_SESSION["phone"]))
      { 
        
      }else{
        header("location:logout.php");
      }
   
  ?>


<?php

$query = $db->query("SELECT register_users.ID, music_genre.MUSİC_NAME, music_genre.MUSİC_FİLE,music_genre.MUSİC_GENRE FROM register_users INNER JOIN music_genre WHERE register_users.ID =music_genre.USER_İD")->rowCount();


?>

  <div class="container-fluid">
    <div class="px-lg-5">

      <!-- For demo purpose -->
      <div class="row py-5">
        <div class="col-lg-12 mx-auto">
          <div class="text-white p-5 shadow-sm rounded banner">
            <h1 class="display-4">Bootstrap 4 photo gallery</h1>
            <p class="lead">Bootstrap photogallery snippet.</p>
            <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-reset">
                Bootstrapious</a>, Images by <a href="https://unsplash.com" class="text-reset">Unsplash</a>.
            </p>
          </div>
        </div>
      </div>
      <!-- End -->

      <div class="row">
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg"
              alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">
                  <?php echo $row[''] ?>
                </a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
                <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
              </div>
            </div>
          </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
          crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
          crossorigin="anonymous"></script>
</body>

</html>