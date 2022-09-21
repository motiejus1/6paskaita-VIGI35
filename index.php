<?php session_start(); ?>
<?php //session_destroy(); ?>
<?php
//$_SESSION superglobalus kintamasis

//$_SESSION - yra laikina atminties vieta serveryje, kurioje kaip ir sausainio atveju galime pasideti informacija iki
// 1. serveryje nustatyto laiko
// 2. kol sesija sunaikinama(cookie istrynimas)
// 3. *iki narsykles isjungimo(automatini sesijos atkurima)

//Sesijos duomenys yra serveryje!!!Kazkur atsidare Inspekta mes duomenu nepamatysim. Joje galime laikyti konfidencialius duomenis
//vartotojo vardas, vartojo teise ir t.t.

//Kad sukurtume sesija reikia sukurti sesijos sausainiuka
//session_start() - sukuriame sesija


//sesija automatiskai start()
$_SESSION["vardas"] = "Destytojas";
$_SESSION["skaicius"] = 1;
$_SESSION["skaiciuspokablelio"] = 2.2;

$_SESSION["masyvas"] = [0,1,2,3,4,5,7,8,9,10];


class MazasObjektas {
    public $x = 10;
    public $y = 20;

    public function suma() {
        return $this->x + $this->y;
    }
}


$objektas = new MazasObjektas();
$_SESSION["objektas"] = $objektas;

// echo $_SESSION["vardas"];

$vardas = "Destytojas"; //taip nepavyks, nes cia lokalus kintamasis
echo $vardas; //taip nepavyks, nes cia lokalus kintamasis

// session_unset(); //istrina visus sesijos kintamuosius
// session_destroy(); ////istrina visus sesijos kintamuosius ir sunaikina sesija
?>