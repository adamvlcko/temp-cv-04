<?php

class Osoba {
    private string $meno;
    private string $priezvisko;
    private string $pohlavie;
    private int $rokNarodenia;

    public function __construct(string $meno, string $priezvisko, string $pohlavie, int $rokNarodenia) {
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;
        $this->pohlavie = $pohlavie;
        $this->rokNarodenia = $rokNarodenia;
    }

    public function getMeno(): string {
        return $this->meno;
    }

    public function getPriezvisko(): string {
        return $this->priezvisko;
    }

    public function getPohlavie(): string {
        return $this->pohlavie;
    }

    public function getRokNarodenia(): int {
        return $this->rokNarodenia;
    }
}
