<?php
$quotes = [
           ["quote" => "Frankly, my dear, I don't give a damn.",
            "source" => "Rhett Butler",
            "type" => "movie",
            "citation" => "Gone with the Wind",
            "year" => 1939
           ],
           ["quote" => "I'm gonna make him an offer he can't refuse.",
            "source" => "Vito Corleone",
            "type" => "movie",
            "citation" => "The Godfather",
            "year" => 1972
           ],
           ["quote" => "You don't understand! I coulda had class. I coulda been a contender. I could've been somebody, instead of a bum, which is what I am.",
            "source" => "Terry Malloy",
            "type" => "movie",
            "citation" => "On the Waterfront",
            "year" => 1954
           ],
           ["quote" => "Toto, I've a feeling we're not in Kansas anymore.",
            "source" => "Dorothy Gale",
            "type" => "movie",
            "citation" => "The Wizard of Oz",
            "year" => 1939
           ],
           ["quote" => "Here's looking at you, kid.",
            "source" => "Rick Blaine",
            "type" => "movie",
            "citation" => "Casablanca",
            "year" => 1942
           ],
           ["quote" => "All right, Mr. DeMille, I'm ready for my close-up.",
            "source" => "Norma Desmond",
            "type" => "movie",
            "citation" => "Sunset Boulevard",
            "year" => 1950
           ],
           ["quote" => "May the Force be with you.",
            "source" => "Han Solo",
            "type" => "movie",
            "citation" => "Star Wars",
            "year" => 1977
           ],
           ["quote" => "Fasten your seatbelts. It's going to be a bumpy night.",
            "source" => "Margo Channing",
            "type" => "movie",
            "citation" => "All About Eve",
            "year" => 1950
           ],
           ["quote" => "You talkin' to me?",
            "source" => "Travis Bickle",
            "type" => "movie",
            "citation" => "Taxi Driver",
            "year" => 1976
           ],
           ["quote" => "El Psy Kongroo.",
            "source" => "Okabe Rintaro",
            "type" => "visual novel",
            "citation" => "Steins;Gate",
            "year" => 2009
           ],
           ["quote" => "Deceive the first you. Deceive the world. That is the choice to arrive at the 'Steins Gate.'",
            "source" => "Okabe Rintaro",
            "type" => "visual novel",
            "citation" => "Steins;Gate",
            "year" => 2009
           ],
           ["quote" => "I am mad scientist. It's so cool. Son of a bitch.",
            "source" => "Okabe Rintaro",
            "type" => "anime",
            "citation" => "Steins;Gate",
            "year" => 2011
           ],
           ["quote" => "Meruem, King of Ants, you know nothing...of humanity's infinite potential for malice!",
            "source" => "Isaac Netero",
            "type" => "anime",
            "citation" => "Hunter x Hunter (2011)"
            "year" => 2014
           ],
           ["quote" => "Explosion!",
            "source" => "Megumin",
            "type" => "anime",
            "citation" => "KonoSuba: God's Blessing on This Wonderful World!",
            "year" => 2016
           ],
           ["quote" => "People die if they are killed...",
            "source" => "Emiya Shirou",
            "type" => "anime",
            "citation" => "Fate/stay night",
            "year" => 2006
           ],
           ["quote" => "WAR IS PEACE, FREEDOM IS SLAVERY, IGNORANCE IS STRENGTH.",
            "source" => "George Orwell",
            "type" => "book",
            "citation" => "Nineteen Eighty-Four",
            "year" => 1949
           ],
           ["quote" => "All animals are equal, but some animals are more equal than others.",
            "source" => "George Orwell",
            "type" => "book",
            "citation" => "Animal Farm",
            "year" => 1945
           ],
           ["quote" => "One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them.",
            "source" => "J. R. R. Tolkien",
            "type" => "book",
            "citation" => "The Lord of the Rings",
            "year" => 1954
           ]
          ];


function getRandomQuote($array) {
  return $array[rand(0, count($array) - 1)];
}

function printQuote() {
  global $quotes;
  $quote = getRandomQuote($quotes);
  $string = "";
  $string .= "<p class='quote'>" . $quote["quote"] . "</p>";
  $string .= "<p class='source'>" . $quote["source"];
  if ($quote["type"]) {
    $string .= "<span class='type'>" . $quote["type"] . "</span>";
  }
  if ($quote["citation"]) {
    $string .= "<span class='citation'>" . $quote["citation"] . "</span>";
  }
  if ($quote["year"]) {
    $string .= "<span class='year'>" . $quote["year"] . "</span>";
  }
  $string .= "</p>";
  echo $string;
}


function color() {
  $color = "#";
  $color .= dechex(rand(0, 5));
  $color .= dechex(rand(0, 9));
  $color .= dechex(rand(0, 5));
  $color .= dechex(rand(0, 9));
  $color .= dechex(rand(0, 5));
  $color .= dechex(rand(0, 9));
  echo $color;
}
