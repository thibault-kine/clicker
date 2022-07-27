<?php
require_once '../includes/header.php';

session_destroy();
session_unset();
unset($_SESSION);

header('location: ../index.php');
?>