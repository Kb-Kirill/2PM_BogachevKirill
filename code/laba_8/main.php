<?php

require_once ("autoload.php");

$table = new TableController();
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	DataBaseFunc::addItem($_POST['email'], $_POST['category'], $_POST['title'], $_POST['desc']);
}
$table -> renderTable();