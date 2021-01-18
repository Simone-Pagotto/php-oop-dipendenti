<?php

class Persona{

    public $nome;
    public $cognome;
    public $codice_fiscale;

    public function to_string(){
        /* return print_r($this,true); */
        return 'nome: ' . $this->nome . ' ; cognome: ' . $this->cognome  . ' ; codice fiscale: ' . $this->codice_fiscale;
    }

    function __construct($nome,$cognome,$codice_fiscale){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
    }

}

class Impiegato extends Persona{

    public $codice_impiegato;
    public $compenso;
    
    function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato, $compenso){
        parent::__construct($nome,$cognome,$codice_fiscale);
        $this->codice_impiegato = $codice_impiegato;
        $this->compenso = $compenso;
    }

    public function to_string(){  
        return parent::to_string() . ' ; codice-imp: ' . $this->codice_impiegato . ' ; compenso: ' . $this->compenso;
    }

    public function calcola_compenso(){
        return $this->compenso;
    }


    
    /* public function to_string(){} */
}

class ImpiegatoSalariato extends Impiegato{

    public $giorni_lavorati;
    public $compenso_giornaliero;

    public function calcola_compenso(){
        $this->compenso = $this->giorni_lavorati * $this->compenso_giornaliero;
        return $this->compenso;
    }

    /* public function to_string(){  
        return parent::to_string() . ' ; giorni-lavorati: ' . $this->giorni_lavorati . ' ; compenso-giornaliero: ' . $this->compenso_giornaliero;
    } */

    function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato,$giorni_lavorati,$compenso_giornaliero){
        parent::__construct($nome,$cognome,$codice_fiscale,$codice_impiegato,0);
        
        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso_giornaliero;
        $this->calcola_compenso();
    }
}

class ImpiegatoAOre extends Impiegato{
    public $ore_lavorate;
    public $compenso_orario;

    public function calcola_compenso(){
        $this->compenso = $this->ore_lavorate * $this->compenso_orario;
        return $this->compenso;
    }

    /* public function to_string(){  
        return parent::to_string() . ' ; giorni-lavorati: ' . $this->ore_lavorate . ' ; compenso-giornaliero: ' . $this->compenso_orario;
    } */

    function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato,$ore_lavorate,$compenso_orario){
        parent::__construct($nome,$cognome,$codice_fiscale,$codice_impiegato,0);
        
        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso_orario;
        $this->calcola_compenso();
    }
}

trait Progetto {
    public $name='sito';
    public $comissione=2000;

    /* function __construct($nome,$commissione){
        $this->nome=$nome;
        $this->commissione=$commissione;
    } */

    public function commissione(){
        return 2001;
    }
}

class ImpiegatoSuCommissione extends Impiegato{

    use Progetto;

    public function calcola_compenso(){
        return $this->compenso=$commissione;
    }

    function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato){
        parent::__construct($nome,$cognome,$codice_fiscale,$codice_impiegato,0);
        $this->calcola_compenso();
    }
}

?>