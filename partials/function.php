<?php

function emailChecker($string) {
  

  /* Allora se contiene @ e . stmapa */
  if(str_contains($string, '@') && str_contains($string , '.')){
    echo 'email valida';
    
    /* Atrimenti mostra avviso di email non valida */
  } else {
    echo 'mail non valida!';
  }

}