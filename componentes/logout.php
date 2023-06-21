<?php
// esto es para cerrar la sesion
@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:login.php');

?>