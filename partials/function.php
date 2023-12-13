<?php

function emailChecker($string) {
  ?>

<div class="alert alert-<?php echo (str_contains($string, '@') && str_contains($string , '.')) ? 'success' : 'danger' ?>" role="alert">
  Email valida!
</div>

<?php


  }

