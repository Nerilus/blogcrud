<?php

   $db_name = 'mysql:host=mariadb;dbname=blogphp';
   $user_name = 'root';
   $user_password = 'root';

   $conn = new PDO($db_name, $user_name, $user_password);

?>