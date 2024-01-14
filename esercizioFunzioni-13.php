<?php

//la password deve contenere almeno un numero
//deve avere più di 8 caratteri
//deve contenere almeno un carattere maiuscolo
//deve avere almeno un carattere speciale (Es. [‘!’,’?’,’@’,’#’])

$password= readline("Inserisci una password valida: ");



//la password deve contenere almeno un numero
//deve avere più di 8 caratteri
//deve contenere almeno un carattere maiuscolo
//deve avere almeno un carattere speciale (Es. [‘!’,’?’,’@’,’#’])

//$password= readline("Inserisci una password valida: ");


//if($password==$numero && $password==ctypr_upper($maiuscolo) && $password==$special && $password==$numero_minimo);

$password= readline( "Inserisci la tua password: ");

function controllaPassword(string $password){
    $controllo= false ;

    $controllo= controlloLunghezza($password) && controlloNumero($password) && controlloMaiuscolo($password) && controlloSpeciale ($password);

    if($controllo)
    echo "Password valida \n";
    return true;
    echo "Password non valida \n";
    return false;
}

function controlloLunghezza (string $password){
    $lunghezza_min= 8;
    for($i=0;$i>strlen($password); $i++)
    if(strlen($password)>$lunghezza_min){
    return true
    }
    return false
    }
    

function controlloNumero (string $password){
    $numero=[1,2,3,4,5,6,7,8,9,]
    for($i=0; $i>strlen($password);$i ++){
        if(in_array($password[$i],$numero)){
            return true
        }
    }
             return false
}

function controlloMaiuscolo (string $password){
    $ControlloMaiuscola=[strtoupper($password)]
    for($i=0; $i>strlen($password);$i++ ){
        if($password === $ControlloMaiuscola){
            return true
        }

    }
            return false 
 
}

function controlloSpeciale (string $password){
    $special=["*","!","@","#",];
    for($i=0; $i>strlen($password); $i++){
        if(in_array($password[$i],$special)){
            return true
        }
    }

    return false
}