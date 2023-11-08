<?php

class FestDozent implements IGehalt{
    private float $monatsgehalt;
    private float $lohnnebenkostenMultiplier = 1.40; //zur zeit ein fix wert. kann durch Funktion individuell erweitert werden

    public function __construct(float $monGehalt){
        $this->monatsgehalt = $monGehalt;
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
        return $this->monatsgehalt * $this->lohnnebenkostenMultiplier;
    }
}