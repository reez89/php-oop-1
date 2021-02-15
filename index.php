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


    public function __construct(string $name, string $genre, int $year, int $rank, float $sellPrice){
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->rank = $rank;
        $this->sellPrice = $sellPrice;
    }

    function print(){
        echo "<h1>" . "The genre is " . $this->name . "</h1>" ;
        echo "<p>" . "The genre is " . $this->genre . "</p>" ;
        echo "<p>" . "The year is " . $this->year . "</p>";
        echo "<p>" . "The ranks is " .$this->rank. "</p>";
        echo "<p>" . "The sell price is " .$this->sellPrice. "</p>";
    }
}
$lol = new Videogiochi('league of legends','mob',2009,10,25.5);
$fortnite = new Videogiochi('fortnite','battle royal',2017,8,68.4);
$cod = new Videogiochi('call of duty','battle royal',2020,7,59.90);

/* METODO 1 */

/* $lol->print();
$fortnite->print();
$cod->print(); */


/* METODO 2 */

$games = [
    $lol,
    $fortnite,
    $cod
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.cards-container {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content:center;
}
.cards{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    width: calc(100% / 3);
    height: 250px;
    background-color: lightblue;
    border-radius: 10px;
    margin: 0 1.2rem;
    
}
</style>
<body>
    <div class="cards-container">
        <?php
        foreach($games as $videogiochi) { ?>
                <div class="cards">
                    <h1>Nome: <?php echo $videogiochi->name; ?> </h1>
                    <h3>Genere: <?php echo $videogiochi->genre; ?> </h3>
                    <h3>Anno: <?php echo $videogiochi->year; ?> </h3>
                    <h3>Rank: <?php echo $videogiochi->rank; ?> </h3>
                    <h3>Prezzo di vendita: <?php echo $videogiochi->sellPrice; ?> </h3>
                </div>

        <?php
        }
        ?>
    </div>
</body>
</html>