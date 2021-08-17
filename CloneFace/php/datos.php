<?php
require "../config/db.php";
$db = conectarDB();

$emailNumber = $_POST['email'];
$password = $_POST['password'];

if($emailNumber === '' || $password === ''){
    echo "Todos Los Campos Son Obligatorios";
}else{
    $query = "INSERT INTO login(email,password) VALUES('$emailNumber', '$password')";
   $consulta = mysqli_query($db,$query);
   
   if($consulta){
       var_dump($consulta);
   }
}

