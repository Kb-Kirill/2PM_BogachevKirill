<?php
session_start();

echo "<br>TASK #2-a <br>";

if (!isset($_POST["text"])) {
    http_response_code(400);
    echo "Bad request";
    return;
}
$text = $_POST["text"];
echo $text;