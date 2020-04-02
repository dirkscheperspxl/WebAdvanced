<?php
require_once 'wiskunde.php';

$getal = $_POST['number'];

if ((int)$getal<0) {
    header("Location: ingave.html");
}
else {
    $faculteit((int)$getal);
}
?>
