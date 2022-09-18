<?php
include("header.php");

?>
<!doctype html>
<html lang="en">

<head>
  <title>Music Add Vs Dowloands</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src=".././js/music_add.js"></script>

</head>

<body>
  <form action="music_insert_add.php" name="musicForm" method="post" class="container mt-4">
    <div class="form-group">
      <label for="music-name">Music Name</label>
      <input type="text" class="form-control" name="musicNameAdd" id="musicname" aria-describedby="" placeholder="Music Name">
      <small id="emailHelp" class="form-text text-muted">Music Names</small>
    </div>

    <div class="form-group">
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" name="musicFile" class="musicFile" id="inputGroupFile02">
        <label class="custom-file-label" for="inputGroupFile02">Music Add file</label>
      </div>
    </div>
    
    <label class="my-1 mr-2" for="musicgenre">Music genre</label>
    <select class="custom-select my-1 mr-sm-2" name="musicGenres" id="inlineFormCustomSelectPref">
      <option selected>Genres Choose...</option>
      <option value="music-genres">Music Genres</option>
      <option value="blues">BLUES</option>
      <option value="classic-music">CLASSİC_MUSİC</option>
      <option value="Electronic-music">ELECTRONİC_MUSİC</option>
    </select>
    <button type="submit" name="musicAddBtn" class="btn btn-primary mt-5" onclick="musicAddFormControl()">Music Add</button>
    
  </form>


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