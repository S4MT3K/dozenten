<?php
class Person
{
    private string $vorname;
    private string $nachname;

    /**
     * @param string $vrnme
     * @param string $nchnme
     */

    public function __construct(string $vrnme, $nchnme){
        $this->vorname = $vrnme;
        $this->nachname = $nchnme;
    }

    /**
     * @return string
     */
    public function getVorname(): string
    {
        return $this->vorname;
    }

    /**
     * @return string
     */
    public function getNachname(): string
    {
        return $this->nachname;
    }

    /**
     * @param string $nachname
     * @return void
     */
    public function setNachname(string $nachname): void
    {
        $this->nachname = $nachname;
    }


}
