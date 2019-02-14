<meta charset="utf-8">

<?php  

$а = array (10, 20, 30); 
echo  $a; 
print_r($a);

?>	
<?php 

$day = 12;
$month = aug;
$year = 1990;
$hour = 18;
$min = 37;
$sec = 2;

echo "Все началось $day $month $year года, в $hour:$min:$sec"; 

?>
<br>
<br>
<?php  

$опе = 1;
$zero = 0; 
if ($one == "") echo 100; 
if ($zero == "") echo 120;
if ("" == $zero) echo 130; 
if ("$zero" == "") echo 140;  
if (strval($zero) == "") echo 150; 
if ($zero === "") echo 160; 

?>
<br>
<br>
<?php  

if (strval(strpos($str,"<?")) != "") 
echo "это PHP-программа"; 

if (strpos($str, "<?") !== false) 
echo "это не PHP-программа"; 

?>
<?php  

for ($i=0,$x=0; $х<8; $х++) { 
	for ($y=0; $у<7; $у++) { 
		$chars[$x][$у] = array($i, chr($i)); 
		$i++; 
	 } 
   } 
?>

<table border=l cellpadding=l cellspacing=0> 
<?foreach ($chars as $row) {?> 
 <tr> 
 <?foreach ($row as $cell) { ?> 
  <td> 
	<?=$cell[0]?>: 
    <bxttx?=$cell[l]?></tt></b> 
   </td> 
  <?}?> 
  </tr> 
<?}?> 
</table> 
<br>
<br>
<?php  

$tools = array(
	"a" => "Alpha", 
	"b" => "Bravo", 
	"c" => "Charly", 
	"d" => "Delta"
);

asort($tools);
print_r($tools);

?>
<br>
<br>
<?php  

$tools = array(
	"x" => "Charly", 
	"y" => "Alpha", 
	"d" => "Delta", 
	"b" => "Bravo",
);

ksort($tools);
print_r($tools);

?>
<br>
<br>
<?php  
// функция сравнения двух значений
function fCmp($f1, $f2) {
	if (is_dir($f1) && !is_dir($f2)) return -1;
	if (!is_dir($f1) && is_dir($f2)) return 0;
	if ($f1<$f2) return -1; elseif ($f1>$f2) return 1; else return 1;
}

$d = opendir (".");
while (false !== ($e=readdir($d)))
$files[$e] = filesize($e);

// сортирование
uksort ($files, "fCmp"); // передача
print_r ($files);

?>
<br>
<br>
<?php  

$tools = array(
	"a" => "Alpha", 
	"b" => "Bravo", 
	"c" => "Charly", 
	"d" => "Delta", 
);
asort($tools);
$tools = array_reverse($tools);
print_r($tools);

?>
<br>
<?php  

$files = array(
	"img18.gif",
	"img1.gif",
	"img88.gif",
	"img11.gif",
);

asort($files);
//natsort($files);
echo "<pre>"; print_r ($files); echo "</pre>";

?>
<br>
<?php  

$numbers = array("one", "two", "three", "four");
sort ($numbers);
print_r ($numbers);

?>
<br>
<?php  

$numbers = array(
	"a" => "Alpha",
	"b" => "Bravo",
	"c" => "Charly", 
	"d" => "Delta", 
);

sort ($numbers);
print_r ($numbers);

?>
<br>
<br>
<?php  

function fCmp2 ($a, $b) { return strcmp($a, $b); }
$tools = array("one", "two", "three", "four");
usort ($tools, "fCmp2");
print_r ($tools);

?>
<br>
<?php  

$concept = array("banana", "coffee", "jeam", "throat");
shuffle ($concept);
print_r ($concept);

?>
<br>
<br>
<?php 

$names = array(
	"Joel"  => "Silver",
	"Grant"  => "Hill",
	"Joel"  => "Mason",
); 

$names = array_flip($names); 
print_r($names); 

?>
<br>
<?php

natsort($files);
$files = array_values($files);
$gase = array(123, 456, 678);
$list = array(1, "hello", 1, "world", "hello");
$war = array_count_values($gase);
print_r($war);

?>
<br>
<?php 

$L1 = array(10, 20, 30); 
$L2 = array(100, 200, 300); 
$L = array_merge($L1, $L2); 
print_r($L)

?>
<br>
<br>
<?php  

$input = array ("a", "b", "d", "e");
$output3 = array_slice ($input, 2);
$output4 = array_slice ($input, 2, -1);
$output5 = array_slice ($input, -2, 1);
$output6 = array_slice ($input, 0, 3);

print_r($output3);
	echo "</br>";
print_r($output4);
	echo "</br>";
print_r($output5);
	echo "</br>";
print_r($output6);
	echo "</br>";

?>
<br>
<?php  

$a = "test string";
$b = "some text";
$A = compact ("a", "b");
print_r($A);

$a = "Test";
$b = "Text";
$c = "CCC";
$d = "DDD";
$list = array("b", array("c", "d"));
$A = compact ("a", $list);

?>
<?php  

$b = "mainfoot";
$c = "123456";
$d = "bigfoot";
$C = compact("");

?>
<table width = 100%>
<?php foreach ($book as $entry) { 
	extract ($entry, EXTR_OVERWRITE) ?>
	<tr>
	 <td> Имя: <?= $name ?></td> 
	 <td> Адрес: <?= $url ?></td>
  </tr>
 <tr><td colspan = 3><?=$text?></td></tr>
 <tr><td colspan = 3><hr></td></tr>

<?}?>
</table>

<br>
<table>

<?php foreach (range(10, 20) as $i) {?> 
  <tr>
    <td><?=$i?></td>
    <td> Это строка номер <?=$i?></td>
  </tr>
 <?}?>
</table> 

<br>
<table>
<?for ($i=1; $i <=20; $i++) {?>
  <tr>
     <td><?=$i?></td>
     <td> Это строка номер <?=$i?></td>
  </tr>
 <?}?>
</table> 

<br>
<?php  

$ourFile = fopen("newtextFile.txt", "r");
for ($i=0; $s=fgets($ourFile, 1000); $i++) {
	if (mt_rand(0, $i) == 0) $line = $s; }
	echo $line;

?>
<br>
<?php  
 
 mt_srand(345);
 for ($i=0; $i<5; $i++) echo mt_rand()." ";
 	echo "<br>";
	
 mt_srand(345);
  for ($i=0; $i<5; $i++) echo mt_rand()." ";

?>
<br>
<?php  

echo 1/pow(20, 13)

?>
<br>
<?php  

echo var_dump(1/2);

?>
<br>
<?php 

echo pi (3) *10;

?>
<br>
<?php

<<<<<<< HEAD
//$OpenFile_r = fopen ("enter/file.txt", "r") or die ("Ошибка");
// ($f = fopen("enter\file.txt", "rt")) or die ("Ошибка!");
// echo fclose ($OpenFile_r);
// echo fread ($OpenFile_r, 1000);

?>
=======
$OpenFile_r = fopen ("enter/file.txt", "r") or die ("Ошибка");
// ($f = fopen("enter\file.txt", "rt")) or die ("Ошибка!");
echo fclose ($OpenFile_r);
// echo fread ($OpenFile_r, 1000);

?>
<br>
>>>>>>> cb63182b44d7a8802e0183d63389ea5593b8fbf7
<?php  

function makeHex($st) {
  for ($i=0; I<strlen($st); $i++);
     $hex[] = sprintf("%02x", ord($st[$i]));
   	return join ("", $hex); }

// $f = fopen("file.txt", "rb");
  // echo makeHex(fgets($f, 100)), "<br>\n";

?>
<br>
<?php  

$path = "c:\Windows\System32\drivers\etc\hosts";
	echo $path. "<br>";
$path = "c:\OpenServer\domains\php\enter\file.txt";
	echo $path. "<br>"; 

?>
<br>
<<<<<<< HEAD
=======
<br>
>>>>>>> cb63182b44d7a8802e0183d63389ea5593b8fbf7
<?php  

$funcTime = time();
print_r($funcTime);
echo "<br>";

echo microtime($asFloat=true);
echo "<br";

?>
<br>
<br>
<?php

define("START_TIME", microtime(false));
printf("Время работы скрипта: %.5f с", microtime(true)-START_TIME);

?>
<br>
<?php  

echo date("j M Y H:i a", $timestamp);
echo "<br>";

echo strftime("%d:%c %H %M %A %B", $timestamp);
echo "</br>"

?>
<?php 

 echo mktime(222, 333, 111);
 echo "</br>";
 setlocale(LC_ALL, "");

?>
<?php 

echo strftime("%B %Y года, %d число. Был %A, часы показывали %H:%M.");
echo "<br>"

?>
<br>
<<<<<<< HEAD
<?php  

echo date("M-d-Y", mktime(0,0,0,1,2005));
echo "<br>";

echo date("M-d-Y", mktime (0,0,0,12,32,2004)); 
echo "<br>";

echo date("M-d-Y", mktime (0,0,0,13,1,2004)); 
echo "<br>";

?>
<br>
<?php  

$check = array(
	
	"now",
	"10 september 2000",
	"+1 day", 
	"+1 week",
	"+1 week 2 days 4 hours 2 seconds",
	"next Thursday", 
	"last Monday", 

);
?>
<table width="100%">
	<tr align="left">
		<th> Входная строка </th>
		<th> timestamp </th>
		<th> Получившаяся дата </th>
		<th> Сегодня </th>
	</tr>
<?foreach ($check as $str) {?>
	<tr>
		<td><?=$str?></td>
		<td><?=$stamp=strtotime($str)?></td>
		<td><?=date("Y-m-d H:i:s", $stamp)?></td>
		<td><?=date("Y-m-d H:i:s", time())?></td>
	</tr>
  <?}?>
</table>
<br>
<?php 

echo getdate($timestamp);
echo GregorianToJD (123, 5, 2001);
echo JDToGregorian($jul); 
$jd = GregorianToJD(10, 11, 1970); 
echo $jd."<br>"; 
$gregorian = JDToGregorian($jd); 
echo $gregorian."<br>"; 
echo explode($gregorian, "/"); 
echo JDDayOfWeek ($julianday); 

?>
<br>
<br>
<?php

$counter = isset($_COOKIE['counter'])? $_COOKIE['counter'] : 0; 
$counter++; 
// setcookie("counter", $counter, 0x7FFFFFFF) ; 
# Внимание! $_COOKIE['counter'] этот вызов не обновляет! 
# Новое значение будет доступно только при следующем посещении, 
echo "Вы запустили этот сценарий $counter раз(а)."; 

?>
<br>
<?php 

echo "Значение первого элемента cookie: {$_COOKIE['arr'][0]}<br>"; 
echo "{$_REQUEST['arr'][1][0]} - What did you just say?";

?>
<br>
<br>
<?php  

print_r(getimagesize("./image/interstate.png"));
echo "</br>";
=======
<?php  

echo date("M-d-Y", mktime(0,0,0,1,2005));
echo "<br>";

echo date("M-d-Y", mktime (0,0,0,12,32,2004)); 
echo "<br>";

echo date("M-d-Y", mktime (0,0,0,13,1,2004)); 
echo "<br>";
>>>>>>> cb63182b44d7a8802e0183d63389ea5593b8fbf7

?>
<br>
<?php  
<<<<<<< HEAD

var_dump(gd_info());
=======

$check = array(
	
	"now",
	"10 september 2000",
	"+1 day", 
	"+1 week",
	"+1 week 2 days 4 hours 2 seconds",
	"next Thursday", 
	"last Monday", 

);
?>
<table width="100%">
	<tr align="left">
		<th> Входная строка </th>
		<th> timestamp </th>
		<th> Получившаяся дата </th>
		<th> Сегодня </th>
	</tr>
<?foreach ($check as $str) {?>
	<tr>
		<td><?=$str?></td>
		<td><?=$stamp=strtotime($str)?></td>
		<td><?=date("Y-m-d H:i:s", $stamp)?></td>
		<td><?=date("Y-m-d H:i:s", time())?></td>
	</tr>
  <?}?>
</table>
<br>
<?php 

echo getdate($timestamp);
echo GregorianToJD (123, 5, 2001);
echo JDToGregorian($jul); 
$jd = GregorianToJD(10, 11, 1970); 
echo $jd."<br>"; 
$gregorian = JDToGregorian($jd); 
echo $gregorian."<br>"; 
echo explode($gregorian, "/"); 
echo JDDayOfWeek ($julianday); 

?>
<br>
<br>
<?php

$counter = isset($_COOKIE['counter'])? $_COOKIE['counter'] : 0; 
$counter++; 
// setcookie("counter", $counter, 0x7FFFFFFF) ; 
# Внимание! $_COOKIE['counter'] этот вызов не обновляет! 
# Новое значение будет доступно только при следующем посещении, 
echo "Вы запустили этот сценарий $counter раз(а)."; 

?>
<br>
<?php 

echo "Значение первого элемента cookie: {$_COOKIE['arr'][0]}<br>"; 
echo "{$_REQUEST['arr'][1][0]} - What did you just say?";

?>
<br>
<?php  
>>>>>>> cb63182b44d7a8802e0183d63389ea5593b8fbf7

?>
<br>
<?php  

?>

?>