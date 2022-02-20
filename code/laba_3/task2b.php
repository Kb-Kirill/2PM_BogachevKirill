<?php
session_start();
echo "Laba #3 Task #2-b <br><br>";

if (!isset($_POST['Surname']) || !isset($_POST['Name']) || !isset($_POST['Age']))
{
    echo "Error!";
    return;
}
$_SESSION['Name'] = $_POST['Name'];
$_SESSION['Surname'] = $_POST['Surname'];
$_SESSION['Age'] = $_POST['Age'];
echo "Hi, {$_SESSION['Surname']} {$_SESSION['Name']} !<br>";
echo "If you {$_SESSION['Age']} years old, that means, you were born in ", 2022-$_SESSION['Age'], " or ", 2022-$_SESSION['Age'] - 1 ;
echo "<br> You are awesome, dude";
