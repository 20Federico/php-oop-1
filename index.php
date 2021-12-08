<?php

class Movie {
  public $title;
  public $genre;

  function __construct($_title) {
    $this->title = $_title;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getGenre() {
    return $this->genre;
  }
};

$fastAndFurious = new Movie('Fast and Furious');
$fastAndFurious->genre = 'action';

echo '<h2>';
echo $fastAndFurious->getTitle();
echo '</h2>';
echo '<p>';
echo 'Genere: ';
echo $fastAndFurious->getGenre();
echo '</p>';

$it = new Movie('It - il pagliaccio assassino');
$it->genre = 'horror';

echo '<h2>';
echo $it->getTitle();
echo '</h2>';
echo '<p>';
echo 'Genere: ';
echo $it->getGenre();
echo '</p>';
?>