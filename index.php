<?php 
class Movie
{
    public $name;
    public $year;
    public $country;
    public $language;
    public $genre;
    public $adult_content;

    /**
     * Movie Class Construct
     *
     * @param string $name
     * @param integer $year
     * @param string $country
     * @param string $language
     * @param string $genre
     * @param boolean $adult_content
     */
    function __construct(string $name, int $year, string $country, string $language, string $genre, bool $adult_content)
    {
        $this->name = $name;
        $this->year = $year;
        $this->country = $country;
        $this->language = $language;
        $this->genre = $genre;
        $this->adult_content = $adult_content;
    }

    public function showMovie($var) {
        var_dump($var);
    }
}


$movies =[
    $inception = new Movie('Inception', 2010, 'USA', 'en', 'Action', 'false'),
    $rocco = new Movie ('Rocco', 2016, 'France', 'en', 'Documentary', 'true'),
];

//var_dump($inception, 'Attenzione, film per adulti!')
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
    <h1>Movies</h1>
    <div class="movies">
        <?php foreach ($movies as $movie) : ?> 
            <?php $movie->showMovie($movie) ?>
       <?php endforeach ?>
    </div>
</body>
</html>