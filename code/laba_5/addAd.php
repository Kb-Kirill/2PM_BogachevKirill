<?php

$link = mysqli_connect('db', 'root', 'rickroll', 'web');
$query = "INSERT INTO ad (email, title, description, category) VALUES ('{$_POST['email']}', '{$_POST['heading']}', '{$_POST['advert']}', '{$_POST['adCategory']}')";
$link = mysqli_query($link, $query);
header("Location: Laba_5.php");