<?php
define('HOST','localhost');
define('DB_NAME','siteweb');
define('user','root');
define('PASS','');




 try{
    $db = new PDO("mysql:host=" . HOST .";dbname=" .DB_NAME, user,PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

 } catch(PDOExeption $e){
    echo $e;
 }

 ?>