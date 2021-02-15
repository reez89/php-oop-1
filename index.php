<?php

/* Istruzioni:
Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza. */

/** 
 * @author nicola
 * 
 *   @copyright 2021
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
        echo "<h1>" . "The genre is " . $this->genre . "</h1>" ;
        echo "<p>" . "The year is " . $this->year . "</p>";
        echo "<p>" . "The ranks is " .$this->rank. "</p>";
        echo "<p>" . "The sell price is " .$this->sellPrice. "</p>";
    }
}

$lol = new Videogiochi('mob',2009,10,25.5);
$fortnite = new Videogiochi('battle royal',2017,8,68.4);
$cod = new Videogiochi('battle royal',2020,7,59.90);


$lol->print();
$fortnite->print();
$cod->print();



?>


