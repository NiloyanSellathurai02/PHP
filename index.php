<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Demo</title>
  </head>
  <style>
    body{
      display: grid;
      place-items: center;
      height: 100vh;
      margin:  0;
    }
  </style>
  <body>
    <?php
    $name = "Harry Potter";
    $read = false;

    if($read === true){
       $message = "You read the $name book";
    }else{
       $message = "You NOT read the $name book ";
    }
   ?>

   <h1><?=$message; ?></h1>
  </body>
</html>
