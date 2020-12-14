<?php
require_once 'config.php';
?>



<?php


define('DBHOST', 'localhost');
define('DBNAME', 'contact');
define('DBUSER', 'aroncasiano');
define('DBPASS', 'aroncasiano');
define('DBCONNSTRING', 'mysql:host=localhost;dbname=contact;charset=utf8mb4;');



try{

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    



}


catch (PDOException $e){

    echo "My Database connection has failed...";
    die($e->getmessage());


}

?>