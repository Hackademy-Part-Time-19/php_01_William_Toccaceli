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

for($i=0; $i<101; $i++){

if($i !== 0 && $i % 3 == 0){
    echo "PHP";
}

elseif($i !== 0 && $i % 5 == 0){
    echo "Javascript";
}

else ($i !== 0 && $i % 5 == 0 && $i % 3 == 0){
    echo "HACKADEMY";
}
}