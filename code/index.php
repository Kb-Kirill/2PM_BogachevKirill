<?php
echo "............Task 1: Access by link <br>";
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

$order = &$very_bad_unclear_name;
$order .= " with spicy-spicy sause";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "<br><br>............Task 2: Numbers<br>";
$anyName = 839;
echo "$anyName<br>";
$newName = 704.58008;
echo "$newName <br>";
echo ($anyName - 827), "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month), "<br><br>";

echo "............Task 11: Multiply and divide <br>";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "$days_per_language <br><br>";

echo "............Task 12: Exponent <br>";
echo (8 ** 2), "<br><br>";

echo "............Task 13: Assigment operators <br>";
$my_num = 2208;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "$answer<br><br>";



