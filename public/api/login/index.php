<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

require_once('../db.php');
include '../controller/login.php';

$login = new Login();

respond ($login->tryLogin($_GET['uname'],$_GET['pass']));

?>