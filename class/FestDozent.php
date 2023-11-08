<?php

class FestDozent extends Person implements IGehalt{
    private float $monatsgehalt;
    //private float $lohnnebenkostenMultiplier = 1.40; //zur zeit ein fix wert. kann durch Funktion individuell erweitert werden

    public const LOHNNEBENKOSTENANTEIL = 1.4;
    // Werte, die während der Programmierung nicht geändert werden
    // sind Konstanten und werden mit const erstellt
    // kein Dollarzeichen davor, nur Großbuchstaben und Unterstrich

    /**
     * @param string $vrnme
     * @param string $nchnme
     * @param float $monGehalt
     */

    public function __construct(string $vrnme, $nchnme,float $monGehalt){
        parent::__construct($vrnme, $vrnme);
        $this->monatsgehalt = $monGehalt;
        $this->vorname = $vrnme;
        $this->nachname = $nchnme;
    }

    /**
     * @param float $setMonGeh
     */
    public function setMonatsgehalt(float $setMonGeh): void{
        $this->monatsgehalt = $setMonGeh;
    }

    /**
     * @return float
     */
    public function getMonatsgehalt(): float{
        return $this->monatsgehalt;
    }

    /**
     * @return float
     */
    public function getGehalt(): float{
        //return $this->monatsgehalt * $this->lohnnebenkostenMultiplier;
        return $this->monatsgehalt * FestDozent::LOHNNEBENKOSTENANTEIL;
    }

    public function getName($vorname, $nachname){
        return $vorname . $nachname;
    }
}