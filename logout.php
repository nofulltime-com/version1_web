<?php
session_start();
unset($_SESSION['id']);

header("Location: ./Register/studentLogin.php");
