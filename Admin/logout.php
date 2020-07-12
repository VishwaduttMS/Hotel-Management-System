<?php
session_start();
unset($_SESSION["a_name"]);
header("location:login.php");
?>