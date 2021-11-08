<?php
session_start();

$_SESSION['name']='ann';

echo $_SESSION['name'];

$_SESSION['students']=['a','b','c'];
?>