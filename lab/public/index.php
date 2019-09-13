<?php
//часть 1 задача 1
echo ("Часть 1");
echo "<br>";
echo ("Задача 1");
echo "<br>";
$a=3;
$b=$a;
echo $b;
echo "<br>";
//2
echo ("Задача 2");
echo "<br>";
$a=10;
$b=2;
echo ($a+$b)/(($a+$b)/2);
echo "<br>";
echo ($a-$b)/(($a+$b)/2);
echo "<br>";
echo ($a*$b)/(($a+$b)/2);
echo "<br>";
echo ($a/$b)/(($a+$b)/2);
echo "<br>";
//3
echo ("Задача 3");
echo "<br>";
$c=15;
$d=2;
$result=$c+$d;
echo $result;
echo "<br>";
//4
echo ("Задача 4");
echo "<br>";
$a=10;
$b=2;
$c=5;
echo ($a+$b+$c)/(($a+$b+$c)/3);
echo "<br>";
//5
echo ("Задача 5");
echo "<br>";
$a=17;
$b=10;
$c=$a-$b;
$d=17;
$result=$c+$d;
echo $result;
echo "<br>";
//часть 2 задача 1
echo ("Часть 2");
echo "<br>";
echo ("Задача 1");
echo "<br>";
$text="Привет мир!";
echo $text.' Моя первая программа!';
echo "<br>";
//2
echo ("Задача 2");
echo "<br>";
$text1="Привет, ";
$text2="Мир!";
echo $text1.$text2;
echo "<br>";
//3
echo ("Задача 3");
echo "<br>";
$name="Рустем";
echo $text="Привет, ".$name;
echo "<br>";
//4
echo ("Задача 4");
echo "<br>";
$age="19";
$height="183";
echo "Мой возраст: ".$age." | "."Мой рост: ".$height;
echo "<br>";
//5
echo ("Задача 5");
echo "<br>";
$var = 'abcde';
echo $var[0];
echo $var[2];
echo $var[4];
echo "<br>";
//часть 3 задача 1
echo ("Часть 3");
echo "<br>";
echo ("Задача 1");
echo "<br>";
$arr=['a', 'b', 'c'];
var_dump($arr);echo "<br>";
var_dump($arr[0]);echo "<br>";
var_dump($arr[1]);echo "<br>";
var_dump($arr[2]);
echo "<br>";
//2
echo ("Задача 2");
echo "<br>";
echo $arr[0].$arr[1].$arr[2];
echo "<br>";
//3
echo ("Задача 3");
echo "<br>";
$arr=['a', 'b', 'c','d'];
echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3].', '.$arr[0].'-'.$arr[3].', '.$arr[0].'/'.$arr[3];
echo "<br>";
//4
echo ("Задача 4");
echo "<br>";
$arr=[2, 5, 3, 9];
$result=($arr[0]*$arr[1])+($arr[2]*$arr[3]);
echo $result;
echo "<br>";
//5
echo ("Задача 5");
echo "<br>";
$arr[1]=1;
$arr[2]=2;
$arr[3]=3;
$arr[4]=4;
$arr[5]=5;
echo $arr[1];
echo "<br>";
//часть 4 задача 1
echo ("Часть 4");
echo "<br>";
echo ("Задача 1");
echo "<br>";
$arr=['a'=>11, 'b'=>20, 'c'=>30];
echo $arr[c];
echo "<br>";
echo $arr[a]+$arr[b]+$arr[c];
echo "<br>";
//2
echo ("Задача 2");
echo "<br>";
$arr=['q3'=>12, 'r3'=>23, 'f3'=>34];
echo array_sum($arr);
echo "<br>";
//3
echo ("Задача 3");
echo "<br>";
$arr=['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr['Коля'];
echo "<br>";
echo $arr['Петя'];
echo "<br>";
//4
echo ("Задача 4");
echo "<br>";
$arr=['1'=>'янв', '2'=>'фев', '3'=>'март','4'=>'апр', '5'=>'май', '6'=>'июнь','7'=>'июль', '8'=>'авг', '9'=>'сент','10'=>'окт', '11'=>'нояб', '12'=>'дек'];
echo $arr[9];
echo "<br>";
echo $arr[6];
echo "<br>";
//5
echo ("Задача 5");
echo "<br>";
$day=['1'=>'пн', '2'=>'вт', '3'=>'ср','4'=>'чт', '5'=>'пт', '6'=>'сб','7'=>'вс'];
echo $day[3];
echo "<br>";