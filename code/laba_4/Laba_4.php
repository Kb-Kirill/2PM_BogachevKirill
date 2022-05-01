<?php
require_once __DIR__ . '/vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1iwAnExwZU3gjzgPZ7B7DuWHqwMfir7WAr8p2GJNP4DY";  //https://docs.google.com/spreadsheets/d/1iwAnExwZU3gjzgPZ7B7DuWHqwMfir7WAr8p2GJNP4DY/edit#gid=0
$range = "sheeeeeeeeesh!";
$values = $service->spreadsheets_values->get($spreadsheetId, $range);

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title> Board </title>
    <meta charset="UTF-8">
</head>

<body>
<form action="adAd.php" method="POST">
    EMAIL<input type = email name = "email" required placeholder="Batman@NotBruce.com">
    <p>HEADING<input type = text name = "heading" required placeholder="NoRickRoll please"></p>
    <p><textarea name = "advert" required cols="40" rows="5"></textarea></p>
    <select name="adCategory">
        <option>ДЗ весом 20 Гб</option>
        <option>нереально интересная категория</option>
        <option>Новая папка</option>
    </select><br><br>
    <button type="submit">add</button>
</form>
<p>Список объявлений:</p>
<table border="1">
    <?php
    foreach ($values as $row)
    {
        foreach ($row as $column)
        {
            echo "<td>" , $column , "</td>";
        }
        echo "<tr>";
    }
    ?>
</table>
</body>
</html>