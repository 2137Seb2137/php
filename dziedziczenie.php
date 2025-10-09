<?php
class osoba1 {
    public $imie;
    public $wzrost;
    public function __construct($imie,$wzrost) {
        $this->imie =$imie;
        $this->wzrost =$wzrost;
    }
    protected function intro(){
        echo "Osoba nazywa sie {$this->imie} a jej wzrost to {$this->wzrost}.";
    }
}
class osoba2 extends osoba1 {
    public function message() {
        echo "Jestem osobą 1 czy osobą 2?";
    }
}
$strawberry = new osoba2("Marek", "182");
$strawberry ->message();
$strawberry->intro();
?>
