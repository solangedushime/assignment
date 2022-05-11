<?php
$dsn= 'mysql:host=localhost;dbname=company';
$username='root';
$pass='';
try
{
    $connection= new PDO($dsn, $username, $pass);
}
catch(PDOException $e){
    throw new PDOException($e->getMessage(). (int)$e->getCode());
}
?>