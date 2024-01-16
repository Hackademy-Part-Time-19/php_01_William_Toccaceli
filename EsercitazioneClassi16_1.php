<?php

class Company{

public $name;
public $location;
public $tot_employees;

static public $avg_wage=1500;
static public $totale_annuo= 0;


public function  __construct($_name, $_location, $_tot_employees){
    $this->name = $_name;
    $this->location = $_location;
    $this->tot_employees = $_tot_employees;
}



public function aulab_1(){
    if($this->tot_employees != 0){
    echo "L'ufficio" . $this->name . "con sede in" .  $this->location . "ha ben" . $this->tot_employees . "dipendenti\n";
    }
    else{
    echo "L'ufficio" . $this->name .  "con sede in" . $this->location . "non ha dipendenti\n";
    }
}

 public function spesa_annuale ($mesi){
   $spesa_annua = (self::$avg_wage *  $mesi) * $this->$tot_employees;
   return $spesa_annua;

}

public function get_spesa_annuale ($mesi = 12){
    echo ("L'azienda " . $this->name . " ha speso " . $this->$spesa_annua ($mesi) . "euro\n");
    echo("Il costo di tutte le aziende Ã¨ " . $this->spesa_annua_tot($months) . " euro \n");
}

public function spesa_annua_tot($mesi){
    return self::$totale_annuo += $this->spesa_annuale($mesi);

}

public function Spesa_finale (){
    return self::$totale_annuo;
}

public static function get_spesa_finale(){
    echo ("le spese finali di tutte le aziende sono di " . self::$totale_annuo . "euro \n");
}


}

$company= new Company ("Adidas", "Roma", 45);
$company1= new Company ("Nike", "Napoli", 30);
$company2= new Company ("Aulab", "Italia", 50);
$company3= new Company ("Apple", "Padova", 90);
$company4= new Company ("Samsung", "Pescara", 86);


$company2->aulab_1();

$company->get_spesa_annuale();
$company1->get_spesa_annuale();
$company2->get_spesa_annuale();
$company3->get_spesa_annuale();
$company4->get_spesa_annuale();

company::spesa_finale();



