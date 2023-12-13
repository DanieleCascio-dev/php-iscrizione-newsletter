<?php

session_start();

// var_dump($_SESSION['userEmail']);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container mt-5 text-center">
  <div class="alert alert-success" role="alert"><h2>la Email <?php echo $_SESSION['userEmail'] ?> è valida!</h2></div>
  <a class="btn btn-primary" href="./index.php">Torna alla email</a>
    
  </div>
  
</body>
</html>

<?php
  session_unset();
  session_destroy();
?>