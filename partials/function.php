<?php

function emailChecker($string) {
  ?>

<div class="alert alert-<?php echo (str_contains($string, '@') && str_contains($string , '.')) ? 'success' : 'danger' ?>" role="alert">
<?php echo (str_contains($string, '@') && str_contains($string , '.')) ? 'Email Valida!' : 'Email non valida!' ?>
</div>

<?php


  }

function redirection($string) {
  (str_contains($string, '@') && str_contains($string , '.')) ? header('location: ./thankyou.php') : $_SESSION['userEmail'] = $string;
}