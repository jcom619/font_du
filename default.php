<?php
    if (isset($_POST['submit'])) {
      $user = $_POST['user'];
      $gen = $_POST['gen'];
​
      echo 'User: '. $user. ' - gender: '. $gen;
    }
?>