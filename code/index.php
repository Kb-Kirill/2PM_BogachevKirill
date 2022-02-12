<?php
echo "............TASK 1: Access by link <br>";

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

$order = &$very_bad_unclear_name;
$order .= " with spicy-spicy sause";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "<br><br>............TASK 2: Numbers<br>";

$anyName = 839;
echo "$anyName<br>";
$newName = 704.58008;
echo "$newName <br>";
echo ($anyName - 827), "<br>";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month), "<br><br>";

echo "............TASK 11: Multiply and divide <br>";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "$days_per_language <br><br>";

echo "............Task 12: Exponent <br>";
echo (8 ** 2), "<br><br>";

echo "............TASK 13: Assigment operators <br>";

$my_num = 2208;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "$answer<br><br>";

echo "............TASK 14: Math function <br>";

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

$arr = [
    'floor' => floor(sqrt(587)),
    'ceil' => ceil(sqrt(587)),
];
echo $arr['floor'], "<br>";
echo $arr['ceil'], "<br>";

echo max(array(4, -2, 5, 19, -130, 0, 10)), "<br>";
echo min(array(4, -2, 5, 19, -130, 0, 10)), "<br>";

echo rand(0, 100), "<br>";
for ($i=0; $i<10; $i++)
{
    $arr[$i] = rand(-100, 100);
    echo "$arr[$i] ";
};
echo "<br>";

$a = 25; $b= 30;
echo abs($a - $b), "<br>";
$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as &$v)
{
    if ($v < 0) $v = abs($v);
    echo "$v ";
}
unset($v);
echo "<br>";

$div = 30;
for ($i=1; $i<sqrt($div); $i++)
    if ($div % $i === 0)
    {
        $divs[] = $i;
        $divs[] = $div / $i;
    }
foreach ($divs as $v)
    echo "$v ";
echo "<br>";

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0; $sum = 0;
foreach ($arr as $v)
    if ($sum <= 10)
    {
        $sum += $v;
        $count++;
    }
echo "$count <br><br>";

echo "............TASK 15: Function 1 <br>";

function printStringNumber()
{
    echo "Function is running... ";
    return rand(0,99);
}
$my_num = printStringNumber();
echo "$my_num<br><br>";

echo "............TASK 16: Function 2 <br>";

function increaseEnthusiasm(string $str)
{
    return $str .= "!";
}
echo increaseEnthusiasm("How long can I do this homework?"), "<br>";

function repeatThreetimes(string $str)
{
    return $str .= $str.$str;
}
echo repeatThreetimes("I doing this the whole day ");
echo increaseEnthusiasm(repeatThreetimes("YES ")), "<br>";

function cut(string $str, int $int=10)
{
    $result = "";
    for ($i=0; $i<$int; $i++)
        $result .= $str[$i];
    return $result;
}
echo cut("Good, if you see only this. Bad, if you see all", 28);
echo "<br>";

function echoArray(array $array, int $count)
{
    if ($count < sizeof($array))
    {
        echo $array[$count], " ";
        echoArray($array, $count+1);
    }
}
$arr = [1, 2, 3, 4, 5, 6];
echoArray($arr, 0);
echo "<br>";

function sumDigits(int $x)
{
    $sum = 0;
    while ($x > 0)
    {
        $sum += $x % 10;
        $x /= 10;
    }
    if ($sum >= 10) return sumDigits($sum);
    else return $sum;
}
echo sumDigits(444), "<br><br>";

echo "............TASK 17: Arrays <br>";

$arr=[];
for ($i = 0; $i < 10; $i++)
{
    $arr[$i]='';
    for ($j = 0; $j < $i+1; $j++)
        $arr[$i].='x';
}
foreach ($arr as $v)
    echo "$v ";
echo "<br>";

function arrayFill(string $str, int $size)
{
    $newArr = [];
    for ($i = 0; $i < $size; $i++)
        $newArr[$i] = $str;
    return $newArr;
}
$arr = arrayFill("x", 5);
foreach ($arr as $v)
    echo "$v ";
echo "<br>";

$arr = [[1,2,3],[4,5],[6]];
foreach ($arr as $v)
{
    foreach ($v as $v2)
        echo "$v2 ";
    echo "<br>";
}

$count = 1;
for($i = 0; $i < 3; $i++)
    for($j = 0; $j < 3; $j++)
        $arr[$i][$j] = $count++;
foreach ($arr as $v)
{
    foreach ($v as $v2)
        echo "$v2 ";
    echo "<br>";
}

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo "$result <br>";

$user = [
    'name' => "Peter",
    'surname' => "Parker",
    'patronymic' => "is Spider-Man"
];
foreach ($user as $v)
    echo "$v ";
echo "<br>";

$date = [
    'year' => 2022,
    'month' => 02,
    'day' => 12
];
echo $date['year'], "-", $date['month'], "-", $date['day'];

$arr = ['a', 'b', 'c', 'd', 'e'];
echo sizeof($arr), "<br>";

echo $arr[sizeof($arr)-1], " ", $arr[sizeof($arr)-2], "<br><br>";

echo "............TASK 18: IF and ELSE <br>";

function uselessFunction(int $int1, int $int2) : bool
{
    if ($int1 + $int2 > 10) return true;
    else return false;
}
echo uselessFunction(5,9), "<br>";

function uselessFunction2(int $int1, int $int2) : bool
{
    if ($int1 === $int2) return true;
    else return false;
}
echo uselessFunction2(1,1), "<br>";

$test = rand(0,1);
echo ($test == 0) ? 'true<br>' : 'false<br>';

$age = rand(0,150);
if ($age < 10 && $age > 99) echo "wrong age! $age";
else
{
    $sum = 0;
    while ($age > 0)
    {
        $sum += $age % 10;
        $age /= 10;
    }
    echo ($sum >= 9) ? 'Sum digits less 10<br>' : 'Sum digits less 100<br>';
}

$arr = [1, 2, 3];
if (sizeof($arr) === 3)
{
    $sum = 0;
    foreach ($arr as $v)
        $sum += $v;
    echo "$sum <br>";
}