<?php

/* Istruzioni:
Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza. */

/** 
 * @author nicola
 * @copyright 2021
 * 
 * 
*/

class Videogiochi{
    public $genre;
    public $year;
    public $rank;
    public $sellPrice;


    public function __construct(string $genre, int $year, int $rank, float $sellPrice){
        $this->genre = $genre;
        $this->year = $year;
        $this->rank = $rank;
        $this->sellPrice = $sellPrice;
    }

    function print(){
        echo "The genre is " .$this->genre. "\n";
        echo "The year is " .$this->year. "\n";
        echo "The ranks is " .$this->rank. "\n";
        echo "The sell price is " .$this->sellPrice. "\n";
    }
}

$lol = new Videogiochi('mob',2009,10,25.5);
$fortnite = new Videogiochi('battle royal',2017,8,68.4);
$cod = new Videogiochi('battle royal',2020,7,59.90);


$lol->print();
$fortnite->print();
$cod->print();



?>


