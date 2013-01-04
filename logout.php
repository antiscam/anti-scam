<?php
session_start();
include("include/connect.php");

session_destroy();
header('Location: index.php');
?>