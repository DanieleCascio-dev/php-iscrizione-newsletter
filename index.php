<?php

/* Se email esiste */
if(isset($_GET['email'])){
  /* Allora se contiene @ e . stmapa */
  if(str_contains($_GET['email'], '@') && str_contains($_GET['email'] , '.')){
    echo 'email valida';
  }
  
  /* Atrimenti mostra avviso di email non valida */
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

<form action="index.php" method="GET">
  <label for="email">Inserisci la email</label>
  <input name="email" type="email" placeholder="user@gmail.com">
  <button type="submit">Invia</button>
</form>
  
</body>
</html>