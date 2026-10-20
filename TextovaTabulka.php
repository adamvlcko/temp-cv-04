<?php
include_once "Osoba.php";

class TextovaTabulka {
    /**
     * @param Osoba[] $osoby
     */
    public static function vykresli(array $osoby): string {
        $riadky = [];
        foreach ($osoby as $osoba) {
            $riadky[] = [
                $osoba->getMeno(),
                $osoba->getPriezvisko(),
                (string)$osoba->getRokNarodenia(),
                $osoba->getPohlavie(),
            ];
        }

        $sirky = [];
        foreach ($riadky as $riadok) {
            foreach ($riadok as $i => $bunka) {
                $sirky[$i] = max($sirky[$i] ?? 0, mb_strlen($bunka));
            }
        }

        $oddelovac = str_repeat("-", array_sum($sirky) + count($sirky) + 1);

        $vystup = $oddelovac . "\n";
        foreach ($riadky as $riadok) {
            $vystup .= "|";
            foreach ($riadok as $i => $bunka) {
                $vystup .= $bunka . str_repeat(" ", $sirky[$i] - mb_strlen($bunka)) . "|";
            }
            $vystup .= "\n";
        }
        return $vystup . $oddelovac . "\n";
    }
}
