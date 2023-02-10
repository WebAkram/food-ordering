<?php
 require_once 'connection.php';
session_start();
 session_destroy();
header('location:login.php');
?>
