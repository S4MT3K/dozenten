<?php

class FestDozent implements IGehalt{
    private float $Monatsgehalt;
    private float $LohnnebenkostenMultiplier = 1.40; //zur zeit ein fix wert. kann durch Funktion individuell erweitert werden

    public function __construct($MonGehalt){
        $this->Monatsgehalt = $MonGehalt;
    }

    /**
     * @param float $SetMonGeh
     */
    public function setMonatsgehalt(float $SetMonGeh): void{
        $this->Monatsgehalt = $SetMonGeh;
    }

    /**
     * @return float
     */
    public function getMonatsgehalt(): float{
        return $this->Monatsgehalt;
    }

    /**
     * @return float
     */
    public function getGehalt(): float{
        return $this->Monatsgehalt * $this->LohnnebenkostenMultiplier;
    }
}