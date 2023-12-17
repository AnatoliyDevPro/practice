

<?php
date_default_timezone_set("Europe/Moscow");
 $hour = date("H");
 $helloMessage = "";
 if($hour >= 17 && $hour < 23) {$helloMessage = "Добрый Вечер!";} 
 	elseif($hour >= 23 && $hour < 5) {$helloMessage = "Доброй Ночи!";} 
 		elseif($hour >= 5 && $hour < 12) {$helloMessage = "Доброе Утро!";} 
 			elseif($hour >= 12 && $hour < 17) {$helloMessage = "Добрый День!";};
 $p = $helloMessage . ' ' . 'Приветствую Вас на моей страничке!';
?> 

<?php 
 $name = 'Анатолий';
 $surname = 'Карпычев';
 $city = 'Санкт-Петербург';
 $year = 1991;
 $age = date("Y") - $year;
?>


<?php
include 'main.php';
?>

