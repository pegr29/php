<?php 

($f = fopen("enter\file.txt", "rt")) or die ("Ошибка!");

?>
<br>
<?php  

function makeHex($st) {
	for ($i=0; I<strlen($st); $i++);
     $hex[] = sprintf("%02X", ord($st[$i]));
   return join ("", $hex); }

$f = fopen("file.txt", "rb");
   echo makeHex(fgets($f, 100)), "<br>\n";

// конец функции

?>