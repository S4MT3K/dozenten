<?php
//Aufgabe:
//Es gibt 2 Arten von Dozenten: Festangestellte und Honorardozenten

//Der Festangestellte bekommt einen Monatslohn, zusätzlich muss die Firma Lohnnebenkosten berechnen.
// Zusammen sind das die monatlichen Kosten pro Festangestellten. Die Lohnnebenkosten betragen 40%

//Ein Honorardozent hat einen Stundenlohn und eine Anzahl von Stunden, die er in einem monat unterrichtet.

//Erstelle jeweils 2 Dozenten und berechne, welchen betrag die Firma in einem Monat für sie aufwenden muss


spl_autoload_register(function ($className) {
    include 'class/' . $className . '.php';
});

$firma = new Dozent();

$firma->AddDozentenToFirma();

echo '<pre>';
print_r($firma);
echo '</pre>';

echo round($firma->getGesamtGehalt(), 2);