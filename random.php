<meta charset="UTF-8">

<?php
include "data.php";
function randomarme() {
    global $Objetdégats, $ObjetDefense, $ObjetAnnexe, $Dégats, $CA, $Bonus;

    $objet = ""; 
        $objet .= $Dégats[rand(0, count($Dégats) - 1)];
        $objet .= $Bonus[rand(0, count($Bonus) - 1)];
        $objet .= " ";
        $objet .= $Objetdégats[rand(0, count($Objetdégats) - 1)];
        $objet .= randomAdj() . " a comme effet: " . randomEffetarme();
    return $objet;
} 

function randomarmure() {
    global $ObjetDegats, $Objetdedéfense, $ObjetAnnexe, $Degats, $CA, $Bonus;
    $objet = "";
    
    $objet .= $CA[rand(0, count($CA) - 1)];

    $objet .= $Objetdedéfense[rand(0, count($Objetdedéfense) - 1)];
    $objet .= randomAdj() . " a comme effet: " . randomEffetarmure();
    return $objet;
}
function randomObj() {
    global $ObjetDegats, $ObjetDefense, $Objetannexe, $Degats, $CA, $Bonus;

    $objet = "";
    $objet .= $Objetannexe[rand(0, count($Objetannexe) - 1)];
    $objet .= randomAdj() . " a comme effet: " . randomEffetannexe();

    return $objet;
}

function randomAdj() {
    global $Adjectif;
    return $Adjectif[rand(0, count($Adjectif) - 1)];
}

function randomEffetannexe() {
    global $Effetannexe;
    return $Effetannexe[rand(0, count($Effetannexe) - 1)];
}
function randomEffetarme() {
    global $Effetarme;
    return $Effetarme[rand(0, count($Effetarme) - 1)];
}
function randomEffetarmure() {
    global $Effetarmure;
    return $Effetarmure[rand(0, count($Effetarmure) - 1)];
}


function unearmet() {
    $objMag = randomarme();
    return $objMag . "\n";
}
function unearmure() {
    $objMag = randomarmure();
    return $objMag . "\n";
}
function unobjet() {
    $objMag = randomObj();
    return $objMag . "\n";
}
?>
    