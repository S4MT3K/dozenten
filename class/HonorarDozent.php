<?php

class HonorarDozent implements IGehalt{
    private float $stundenlohn;
    private float $anzLehrstunden;
    private float $fehltage;

    public function __construct(float $stdlohn, float $anzstd, float $anzFtage){
        $this->stundenlohn = $stdlohn;
        $this->anzLehrstunden = $anzstd;
        $this->fehltage = $anzFtage;
    }

    /**
     * @param float $anzLehrstunden
     */
    public function setAnzLehrstunden(float $anzLehrstunden): void{
        $this->anzLehrstunden = $anzLehrstunden;
    }

    /**
     * @param float $stundenlohn
     */
    public function setStundenlohn(float $stundenlohn): void{
        $this->stundenlohn = $stundenlohn;
    }

    /**
     * @return float
     */
    public function getAnzLehrstunden(): float{
        return $this->anzLehrstunden;
    }

    /**
     * @return float
     */
    public function getStundenlohn(): float{
        return $this->stundenlohn;
    }

    /**
     * @return float
     */
    public function getGehalt() : float{
        return ($this->stundenlohn * $this->anzLehrstunden) * (22 - $this->fehltage); //22 weil pauschal 4x wochenende im Monat (30tage pauschal)
    }
}