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

echo "............Task 14: Math function <br>";
$a = 10; $b = 3;
echo ($a % $b), "<br>";
if ($a % $b === 0) echo "Делится: a / b = ", ($a / $b);
else echo "Не делится";
echo "<br>";
$st = pow(2, 10);
echo "$st <br>";
echo sqrt(245), "<br>";
$arr = [4, 2, 5, 19, 13, 0, 10]; $sum = 0;
foreach ($arr as $v)
    $sum += $v ** 2;
echo sqrt($sum), "<br>";
echo round(sqrt(379)), "<br>";
echo round(sqrt(379), 1), "<br>";
echo round(sqrt(379), 2), "<br>";
$arr2 = [
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)),
];
echo "$arr2[floor] <br>";
echo "$arr2[ceil] <br>";
echo max(array(4, -2, 5, 19, -130, 0, 10)), "<br>";
echo min(array(4, -2, 5, 19, -130, 0, 10)), "<br>";
echo rand(0, 100), "<br>";
for ($i=0; $i<10; $i++) {
    $arr3[$i] = rand(-100, 100);
    echo "$arr3[$i] ";
};
echo "<br>";
$a = 25; $b= 30;
echo abs($a - $b), "<br>";
$arr4 = [1, 2, -1, -2, 3, -3];
foreach ($arr4 as &$v) {
    if ($v < 0) $v = abs($v);
    echo "$v ";
}
unset($v);
echo "<br>";
$div = 30;
for ($i=1; $i<sqrt($div); $i++)
    if ($div % $i === 0) {
        $divs[] = $i;
        $divs[] = $div / $i;
    }
foreach ($divs as $v)
    echo "$v ";
echo "<br>";
$arr6 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0; $sum = 0;
foreach ($arr6 as $v)
    if ($sum <= 10) {
        $sum += $v;
        $count++;
    }
echo "$count <br><br>";

echo "............Task 15: Function 1 <br>";
function printStringNumber() {
    echo "Function is running... ";
    return rand(0,99);
}
$my_num = printStringNumber();
echo "$my_num<br>";


