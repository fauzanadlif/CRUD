<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=tugas_crud","root","");
} catch (PDOException $e) {
    echo $e-> getMessage();
}

?>