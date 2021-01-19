<?php

require_once('dipendenti.php');
try{
    $myPersona = new Persona('Simone',12,'SMNP1');
}catch(NomeException $e){
    echo $e->getMessage();
    $myPersona = new Persona('Mario','Rossi','XXXX');
}catch(CognomeException $e){
    echo $e->getMessage();
    $myPersona = new Persona('Anna','Verdi','YYYY');
}catch(CfException $e){
    echo $e->getMessage();
    $myPersona = new Persona('Glenn','Ray','YXYX');
}

echo $myPersona->to_string();
var_dump($myPersona); 

$myImpiegato = new Impiegato([
    'nome' => 'Simone',
    'cognome' => 'Pagotto',
    'codice_fiscale' => 'SMNPGT',
    'codice_impiegato' => '001',
    'compenso' => 1000
]);
echo $myImpiegato->to_string();
var_dump($myImpiegato);

$myImpiegatoSalariato = new ImpiegatoSalariato([
    'nome' => 'Simone',
    'cognome' => 'Pagotto',
    'codice_fiscale' => 'SMNPGT',
    'codice_impiegato' => '001',
    /* 'compenso' => 1000, */
    'giorni_lavorati' => 220,
    'compenso_giornaliero' => 80
]);
/* echo $myImpiegatoSalariato->to_string(); */
var_dump($myImpiegatoSalariato);
echo $myImpiegatoSalariato->calcola_compenso();

$myImpiegatoAOre = new ImpiegatoAOre([
    'nome' => 'Simone',
    'cognome' => 'Pagotto',
    'codice_fiscale' => 'SMNPGT',
    'codice_impiegato' => '001',
    'ore_lavorate' => 140,
    'compenso_orario' => 5
    ]);
/* echo $myImpiegatoAOre->to_string(); */
var_dump($myImpiegatoAOre);
echo $myImpiegatoAOre->calcola_compenso();

/* $myProgetto = new Progetto('sito',2000);
var_dump($myProgetto); */

try {
    $myImpiegatoSuCommissione = new ImpiegatoSuCommissione([
        'nome' => 'Simone',
        'cognome' => 'Pagotto',
        'codice_fiscale' => 'SMNPGT',
        'codice_impiegato' => '001',
        'compenso' => 1000,
    ], 'sito',1000);
}catch (Exception $e){
    $myImpiegatoSuCommissione = new Impiegato([
        'nome' => 'Simone',
        'cognome' => 'Pagotto',
        'codice_fiscale' => 'SMNPGT',
        'codice_impiegato' => '001',
        'compenso' => 1000,
    ]
    );
    echo $e->getMessage();  
}

try{
   $myImpiegatoSuCommissione->fun();
}catch (Exception $e){
    echo $e->getMessage();
}

/* echo $myImpiegatoAOre->to_string(); */
var_dump($myImpiegatoSuCommissione);
echo $myImpiegatoSuCommissione->calcola_compenso();

?>