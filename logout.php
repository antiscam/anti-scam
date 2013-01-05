<?php

include('include/connect.php');

//Unset cookies
setcookie("id", "", time()-172800, '/anti-scam/');
setcookie("firstname", "", time()-172800, '/anti-scam/');
setcookie("email", "", time()-172800, '/anti-scam/');

//go back to index.php
header('Location: index.php');
?>