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
  $user_id = $_SESSION["userID"];

  $slidersor=$db->prepare("SELECT * FROM music_genre where USER_İD = ?");
  $slidersor->execute(
    [
      $user_id
    ]
  );
  
?>
<table class="container mt-4 table table-stripedtable table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">MUSİC_NAME</th>
      <th scope="col">MUSİC_FİLE</th>
      <th scope="col">MUSİC_GENRE</th>
      <th scope="col">Play</th>
      <th scope="col">Pause</th>

    </tr>
  </thead>
  
  <tbody>
  <?php 
    while($row = $slidersor->fetch(PDO::FETCH_ASSOC)) {

  
?>
    <tr>
    <th scope="row"><?php  echo $row["ID"] ?></th>
      <th scope="row"><?php  echo $row["MUSİC_NAME"] ?></th>
      <th scope="row"><?php  echo $row["MUSİC_FİLE"] ?></th>
      <th scope="row"><?php  echo $row["MUSİC_GENRE"]?></th>
      <th scope="row"><i class="fa-regular fa-circle-play"></i></th>
      <th scope="row"><i class="fa-solid fa-pause"></i></th>

    </tr>
    <?php
  }
?>

  </tbody>
  </table>



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