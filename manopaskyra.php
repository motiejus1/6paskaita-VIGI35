<?php 
session_start(); //pradedame sesija
// nustateme sesijos kintamuosius, jie irasyti laikonojoje atmintyje, jie egzistuoja
echo $_SESSION["vardas"];
echo $_SESSION["skaicius"];
echo $_SESSION["skaiciuspokablelio"];

var_dump( $_SESSION["masyvas"]);
var_dump( $_SESSION["objektas"]);


//sunaikinam
//session_unset();//istrina visus sesijos kintamuosius
//session_destroy();
?>