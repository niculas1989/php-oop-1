<?php
//| Creare una classe PHP

require __DIR__ . '/includes/data.php';

class Movie
{
    public $id;
    public $title;
    public $year;
    public $description;
    public $author;

    public function __construct($id, $title, $year, $description, $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->description = $description;
        $this->author = $author;
    }

    public function getAbstract()
    {
        return substr($this->description, 0, 40) . '...';
    }
}

/* 
//# Primo film
$trama_id_1 = 'Basato su una storia vera, The Wolf of Wall Street segue l’impressionante ascesa e la caduta di Jordan Belfort (interpretato dal tre volte candidato all’Academy Award® Leonardo DiCaprio), il broker di New York che conquista una fortuna incredibile truffando milioni di investitori. Il film segue la folle cavalcata di Belfort, un giovane “nuovo arrivato” a Wall Street che si trasforma via via in un corrotto manipolatore dei mercati e in un cowboy della Borsa. Avendo conquistato rapidamente una ricchezza enorme, Jordan la utilizza per comprarsi un’infinita gamma di afrodisiaci: donne, cocaina, automobili, la moglie supermodella e una vita leggendaria fatta di aspirazioni e acquisti senza limiti. Ma mentre la società di Belfort, la Stratton Oakmont, è sulla cresta dell’onda e sguazza nella gratificazione edonistica più estrema, la SEC e l’FBI tengono d’occhio il suo impero contrassegnato dagli eccessi.';

$wolf_of_wall_street = new Movie(1, 'The Wolf Of Wall Street', '23/01/2014', $trama_id_1);
var_dump($wolf_of_wall_street);

//# Secondo film
$trama_id_2 = 'In seguito agli eventi di Spider-Man: Far from Home, la vita di Peter Parker viene stravolta dopo che Mysterio rivela al mondo la sua identità. Peter chiede aiuto a Stephen Strange affinché usi la magia per far scordare a tutti la sua identità. Ma l\'incantesimo non va come previsto e Peter si ritrova a dover affrontare nemici da altri universi e a scoprire cosa significa davvero essere Spider-Man.';

$spider_man = new Movie(2, 'Spider-Man: No Way Home', '15/12/2021', $trama_id_2);
var_dump($spider_man);

//# Terzo film
$trama_id_3 = 'Ne "Gli Eterni" dei Marvel Studios un nuovo, entusiasmante, team di supereroi debutta nell’universo cinematografico Marvel: antichi alieni che vivono in segreto sulla Terra da migliaia di anni. A seguito degli eventi di "Avengers: Endgame", una tragedia inaspettata li costringe a uscire dalle ombre per ricongiungersi con il più antico nemico dell’umanità, i Devianti.';

$eternals = new Movie(3, 'Eternals', '3/11/2021', $trama_id_3);
var_dump($eternals);
 */

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
    <?php foreach ($films as $film) :
        $single_movie = new Movie($film['id'], $film['title'], $film['year'], $film['description'], $film['author']);
    ?>
        <h2><?= "Il titolo del film è: $single_movie->title" ?></h2>
        <p><?= "E' uscito il: $single_movie->year" ?></p>
        <p><?= "Parte della trama: $single_movie->description" ?></p>
        <address><?= "Ideato e diretto da: $single_movie->author" ?></address>

    <?php endforeach; ?>
</body>

</html>