<?php
  define('DB_SERVER','localhost');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','');
  define('DB_NAME','admin');

  $con =  mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
//replace username,password,dbName with your values
//include this file at the top of your php files    
?>