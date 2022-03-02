<?php
//| Creare una classe PHP

class Movie
{
    public $id;
    public $title;
    public $year;
    public $description;

    public function __construct($id, $title, $year, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->description = $description;
    }
}

$trama_id_1 = 'Basato su una storia vera, The Wolf of Wall Street segue l’impressionante ascesa e la caduta di Jordan Belfort (interpretato dal tre volte candidato all’Academy Award® Leonardo DiCaprio), il broker di New York che conquista una fortuna incredibile truffando milioni di investitori. Il film segue la folle cavalcata di Belfort, un giovane “nuovo arrivato” a Wall Street che si trasforma via via in un corrotto manipolatore dei mercati e in un cowboy della Borsa. Avendo conquistato rapidamente una ricchezza enorme, Jordan la utilizza per comprarsi un’infinita gamma di afrodisiaci: donne, cocaina, automobili, la moglie supermodella e una vita leggendaria fatta di aspirazioni e acquisti senza limiti. Ma mentre la società di Belfort, la Stratton Oakmont, è sulla cresta dell’onda e sguazza nella gratificazione edonistica più estrema, la SEC e l’FBI tengono d’occhio il suo impero contrassegnato dagli eccessi.';

$wolf_of_wall_street = new Movie(1, 'The Wolf Of Wall Street', '23/01/2014', $trama_id_1)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Qui, qualora tutto fosse andato a buon fine, vedrò di stampare qualcosa. -->
</body>

</html>