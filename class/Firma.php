<?php

class Firma{
    /**
     * @var IGehalt[]
     */
    private array $dozenten = [];

    public function addDozentenToFirma(){ //Firma Klasse? Um dort dann 40% zu berechnen wäre besser
        $this->dozenten[] = new FestDozent('Peter', 'Lustig', 4500);
        $this->dozenten[] = new FestDozent('Paul', 'Panzer', 4355);
        $this->dozenten[] = new HonorarDozent('Erika', 'Hess', 17.40, 8, 0);
        $this->dozenten[] = new HonorarDozent('Angelina', 'Jolie',27.40, 6, 2);
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