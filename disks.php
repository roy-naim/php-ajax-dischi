<?php
 include './_partials/dati.php';

 foreach ($database as $value) {
   echo $value['title'];
   echo $value['author'];
   echo $value['year'];
   echo $value['genre'];
 }
 // var_dump($database);
 ?>
