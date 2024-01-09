<?php

$a = 0;
$b = 0.1;
$c = "ciao";
$d = true;






$text = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = '$text2';
$text7 = "bevuto";
$text8 = "tutto";

echo "$text $text2 $text3 $text4 \n  $text5 $text2 $text7 $text8.";
echo $text . " " . $text2 . " " . $text3 . " " . " \n " . $text5 . " " . $text2 . " " . $text7 . " " . $text8;

//“Nel mezzo di cammin di nostra vita -mi ritrovai -per una selva oscura, che' la diritta via era smarrita“.

$words1 = [ 'una', 67, 'vita', 'colle', 'mi', 'rosso', [ 'oscura', 'era', 89,[' mezzo', [ 'cammin', 'nel', [' selva', 'la',  [ 'via', 'una', 'true', ] ], ] ], 'ritrovai', 'per',  ], 'diritta' ];
$words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'che', ] ];

echo $words1[6][3][1][1]." ".$words1[6][3][0]." di ".$words1[6][3][1][0]." di ".$words2['elemento2']." ".$words1[2]." ".$words1[4]." ".$words1[6][3]." ".$words1[6][4]." ".$words1[6][5]." ".$words1[0]." ".$words1[6][3][1][2][0]." ".$words1[6][0]." , ".$words2['elemento3'][2]." ".$words1[6][3][1][2][1]." ".$words1[6];

$x = 10;
$y = 20;
$z = "20";
$w =10;

var_dump($x<=$w);
var_dump($y==$z);
var_dump($y===$z);
var_dump($y!==$z);
var_dump($y!=$z);


$corsoHackademy= ["docenti" => ["antonio","Nicolas","Alessia"], "Studenti" => ["Giacomo", "Clara" , "Giorgio"], "argomenti" => ["Html", "Javascript", "Bootstrap"],];

echo $corsoHackademy["docenti"][2]." ha studiato con ".$corsoHackademy["Studenti"][1]." le funzioni di ".$corsoHackademy["argomenti"][1];