<?php
session_start();

if (!isset($_POST['Name'],$_POST['Age'],$_POST['Salary'], $_POST['Wish']))
{
    echo "Error!";
    return;
}
$_SESSION['userInfo']=$_POST;

echo "<ul>";
foreach ($_SESSION['userInfo'] as $v)
{
    echo "<li> $v </li>";
}
echo "</ul>";
