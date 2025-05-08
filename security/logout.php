<?php
require_once '../controller/Sesion.php';
$sesion = new Sesion();
$sesion->logout();
header('Location: ../pages/marketplace.php');
exit();
?>