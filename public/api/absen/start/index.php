<?php

require_once('../../db.php');
include '../../controller/absen.php';

$absen = new Absen();


respond ($absen->start($_GET['nip']));

?>

