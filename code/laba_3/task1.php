<?php
echo "TASK #1-a <br>";
$str = ' ahb accb auth bas sab aeeb adsb ab ajnb';
$myR = '#a.{2}b#';
$result = preg_match_all($myR, $str, $matches);
echo "Count: $result <br>";
print_r($matches);
echo "<br>";

echo "<br>TASK #1-b <br>";
$str = 'a1b2c3d10';
$myR = '#[0-9]+#';
$result = preg_replace_callback(
    $myR,
    function ($matches)
    {
        foreach ($matches as $v)
        {
            $v = $v * $v * $v ;
            return $v;
        }
    },
    $str
);
echo $result, "<br>";
