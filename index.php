<?php
include "./partials/function.php"

// /* Se email esiste */
// if(isset($_GET['email'])){

//   /* Allora se contiene @ e . stmapa */
//   if(str_contains($_GET['email'], '@') && str_contains($_GET['email'] , '.')){
//     echo 'email valida';

//     /* Atrimenti mostra avviso di email non valida */
//   } else {
//     echo 'mail non valida!';
//   }
  
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title></title>
</head>
<body>
<div class="container mt-5 text-center">
<form action="index.php" method="GET" class="mb-2">
  <label for="email">Inserisci la email</label>
  <input name="email" type="text" placeholder="user@gmail.com">
  <button type="submit">Invia</button>
</form>

<?php 
/* Se email esiste */
if(isset($_GET['email'])){

  /* Inzio la sessione */
  session_start();
  /* Salvo il valore inserito dall'utente nell'array $_SESSION */
  $_SESSION['userEmail'] = $_GET['email'];

  redirection($_GET['email']);

  
  // emailChecker($_GET['email']);
}
?>
</div>

  
</body>
</html>