<?php


$users = [ [ "name" => "Davide", "Surname" => "Cariola", "Gender" => "M"], [ "name" => "Giorgia", "Surname" => "Bianchi", "Gender" => "F"],  [ "name" => "Optimus", "Surname" => "Prime", "Gender" => "NB"] ];


foreach($users as $elemento){
    if ($elemento["Gender"]=="M"){
        echo "Buongiorno Sig.".$elemento["name"].$elemento["Surname"]."\n";
        }
        elseif ($elemento["Gender"]=="F"){
        echo "Buongiorno Sig.ra".$elemento["name"].$elemento["Surname"]."\n";
        }
        
        else{
             echo  "Buongiorno".$elemento["name"].$elemento["Surname"]."\n";
        }
}


foreach($users as $elemento){

switch ($elemento) {

    case ["Gendere"]=="M";
    echo "Buongiorno Sig.".$elemento["name"].$elemento["Surname"]."\n";
     break;

     case ["Gendere"]=="F";
     echo "Buongiorno Sig.ra".$elemento["name"].$elemento["Surname"]."\n";
    
     default:
    echo  "Buongiorno".$elemento["name"].$elemento["Surname"]."\n";
        break;
}
}

//3
for($i=0; $i<101; $i++){
   
 if ($i !== 0 && $i % 3 == 0 && $i % 5 == 0){
    echo "HACKADEMY";
 }

elseif($i !== 0 && $i % 3 == 0){
    echo "PHP";
}

elseif($i !== 0 && $i % 5 == 0){
    echo "Javascript";
}
}
//3.1

for($i=0; $i<101; $i++){
    echo $i;
}

//3.2 Numero Pari

$array = [1,4,8,27,96,45];

foreach($array as $pari){
    if($pari % 2 == 0){
        echo "Il numero è pari";
    }
    else 
    echo "Il numero è dispari";
}

//4

$temperatura=27;

if($temperatura>=15 && $temperatura<25){
    echo "Fa caldo";
}

elseif($temperatura<15){
   echo "Fa freddo";
}

elseif($temperatura>25){
    echo "Fa molto caldo";
 }

 //5



$arrayte = ["Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

//$nomi =  array_keys($arrayte);
//print_r($nomi);
//$gradi= array_values($arrayte);
//print_r($gradi);

foreach($arrayte as $luogo => $gradi){
    echo  "a $luogo fa";


if ($gradi < 15){
    echo "freddo con $gradi"." \n";

}elseif ($gradi >= 15 && $gradi <= 25){
    echo "caldo con $gradi"." \n";
}else {
    echo "molto caldo con $gradi"." \n";
};
}

//echo "A"." ".$nomi[0]." fa ".$gradi[0];
 





