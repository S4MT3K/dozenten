<?php

class Dozent{
    /**
     * @var IGehalt[]
     */
    private array $dozenten = [];

    public function AddDozentenToFirma(){ //Firma Klasse? Um dort dann 40% zu berechnen wäre besser
        $this->dozenten[] = new FestDozent(4500);
        $this->dozenten[] = new HonorarDozent(17.40, 8, 0);
    }

    /**
     * @return float
     */
    public function getGesamtGehalt() :float{
        $gesamtGehalt = 0;
        foreach ($this->dozenten as $mitarbeiter) {
            $gesamtGehalt += $mitarbeiter->getGehalt();
        }
        return $gesamtGehalt;
    }
}