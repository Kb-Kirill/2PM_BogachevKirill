<?php
session_start();
echo "Laba #3 Task #2-a <br><br>";

if (!isset($_POST["text"]))
{
    echo "Error!";
    return;
}
$text = $_POST["text"];

echo "You entered : '$text'<br>";
echo "Word count: ", str_word_count($text) , "<br>";
echo "Symbol count: ", iconv_strlen($text) , "<br>";