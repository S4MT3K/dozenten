<?php

class HonorarDozent implements IGehalt{
    private float $Stundenlohn;
    private float $AnzLehrstunden;
    private float $Fehltage;

    public function __construct($Stdlohn, $Anzstd, $AnzFtage){
        $this->Stundenlohn = $Stdlohn;
        $this->AnzLehrstunden = $Anzstd;
        $this->Fehltage = $AnzFtage;
    }

    /**
     * @param float $AnzLehrstunden
     */
    public function setAnzLehrstunden(float $AnzLehrstunden): void{
        $this->AnzLehrstunden = $AnzLehrstunden;
    }

    /**
     * @param float $Stundenlohn
     */
    public function setStundenlohn(float $Stundenlohn): void{
        $this->Stundenlohn = $Stundenlohn;
    }

    /**
     * @return float
     */
    public function getAnzLehrstunden(): float{
        return $this->AnzLehrstunden;
    }

    /**
     * @return float
     */
    public function getStundenlohn(): float{
        return $this->Stundenlohn;
    }

    /**
     * @return float
     */
    public function getGehalt() : float{
        return ($this->Stundenlohn * $this->AnzLehrstunden) * (22 - $this->Fehltage); //22 weil pauschal 4x wochenende im Monat (30tage pauschal)
    }
}