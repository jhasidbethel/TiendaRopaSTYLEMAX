<?php

// Establece las variables para la conexión a la base de datos
$db_host = "localhost";
$db_name = "shop_db";
$username = "root";
$password = "";

// Crea una nueva instancia de la clase PDO y la asigna a la variable $conn
$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $username, $password);
//Esta variable se utiliza para interactuar con la base de datos utilizando los métodos de la clase PDO.
?>