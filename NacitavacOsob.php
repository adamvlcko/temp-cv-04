<?php
include_once "Osoba.php";

class NacitavacOsob {
    private string $subor;

    public function __construct(string $subor) {
        $this->subor = $subor;
    }

    /**
     * @return Osoba[]
     */
    public function nacitaj(): array {
        $osoby = [];
        $riadky = file($this->subor, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($riadky as $riadok) {
            [$meno, $priezvisko, $pohlavie, $rok] = explode(";", trim($riadok));
            $osoby[] = new Osoba($meno, $priezvisko, $pohlavie, (int)$rok);
        }
        return $osoby;
    }
}
