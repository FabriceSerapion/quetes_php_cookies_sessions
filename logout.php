<?php

require 'inc/head.php';

$_SESSION['productsCart'] = [];
session_destroy();
unset($_SESSION);
header("Location: login.php");
