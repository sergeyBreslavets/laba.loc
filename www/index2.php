<?php   
  $age1 = 40;
$age2 = 30;
unset($age1);
$age2 = $age2 + $age1;
echo $age2;
echo '**';
$a = true;
echo $a;
echo '**';
$a = false;
echo $a;

$a = null;

echo '**';

$str = 'Dear Customer,\nThanks for your query. We will reply very soon.\n Regards.';
print $str;
echo '**';
$a = 500 + "2.1E3";
$a = $a + "01a02b03";
$a = $a + "100 рублей";
$a = $a + "-.2E3";
echo $a;

echo '**';
$a = 3;
$b = 2;
echo (int)$a / (int)$b;

echo '**';
$a = 160;
$d = 13;
$b = 2;
$c = $a >> ($b + 2);
if (($c < $d) && ($b > ($d % $b)))
  echo $c;
else 
  echo $d * $b;

echo '**';
  $a = 9;
$b = 99;
$c = 8;
$c = $b++ / $a++ + --$c;
echo ($b -= ($a * 5)).'0'.$c;

echo '**';
$a = 10;
$b = 16;
if ($b = 10)
{
  $b = $a >> 1;
}
elseif ($b > (10 + ($a % 6)))
{
  $b = $a << 2;
}
else
{
  $b = $a * 2;
}
echo $b;

echo '**';

switch(true) { 
  case $x === "a": 
    echo "a"; 
  case $x === "b": 
  { echo "b"; 
    break; } 
  default: 
    echo "default";
  case $x === "c": 
  { break; 
    echo "с"; } 
} 

echo '**';
switch(2) { 
  case 1: 
    echo "1"; 
    break; 
  case 2: 
    default: 
    echo "2"; 
  case 3; 
    echo "3"; 
    break; 
  case 4; 
    echo "4"; 
    break; 
} 
echo '**';
$arr = array("orange", "banana", "apple", "raspberry");
$i = 0;
while ($a = $arr[1 * $i++]) 
{
  if ($i == 1) continue;
  echo $a ."\n";
}
echo '**';
$number = 4;
$factorial = 2;
do
{
  $factorial *= $number + 1;
  $number = $number - 1;
} 
while ($number > 0);
echo $factorial;

echo '**';

for($i = $x = $z = 1; $i <= 3; $i++)
{
  $x+=2; $z=$p;
  $p = $i + $x + 1;
  echo $i . $x . $z;
}
echo '**';

$one = array("10", "20", "30");
$two = array("b", "a", "r");
$i=0;
while($i < 2) 
{
  foreach($two as $a) 
    echo $a.$one[2-$i]; 
  $i++;
}

$a = 1;
$b = 2;
$c = 3;
$d = 5;
function func()
{
  global $a, $b, $c;
  $c += $d;
  $b = $a << $c;
  $a = $b % $c;
} 
func();
echo '**';
echo ($a+$b).($d-$a).$c;

echo '**';
$a = 5;
function funcr(&$a, $b = 4, $c = 3)
{
  $a *= $b + $c;
}
funcr($a, 10);
echo $a;

echo '**';
function test() 
{
  static $a = 0;
  $a += 3;
  echo $a++;
}
test();
test(); 
echo '**';
function incr(&$int) 
{
  return $int++;
}
function return_scalar() 
{
  static $v;
  if (!$v) 
    $v = 1;
  return($v); 
} 
echo incr(return_scalar()).incr(return_scalar()); 
echo '**';
print_r("Hello World", true);

$a=abs(3*sqrt(tan(pi()/6)));

function get_string_between($string, $start, $end)
{
  $string = " ".$string;
  $ini = strpos($string,$start);
  if ($ini == 0) return("");
    $ini += strlen($start); 
  $len = strpos($string,$end,$ini) - $ini;
  return substr($string,$ini,$len);
}
$string = "this [custom] function is useless!!";
echo get_string_between($string,"[","]");
echo '**';
echo date('d.m.Y H:i',time() + 24*60*60*7)

?>