<?php
// Create a multidimensional array called $quotes.
// The array should contain at least 5 associative arrays.
// Each associative array should contain the following key-value pairs:
//   "quote" => (str) The text of the quote itself,
//   "source" => (str) The creator of the quote,
//   "type" (optional) => (str) e.g., "book", "movie", etc.
//   "citation" (optional) => (str) Where the quote comes from, e.g., book, movie, TV series, etc.,
//   "year" (optional) => (int) The year of the quote.
// The quotes are the top 5 quotes from the American Film Institute (AFI)'s '100 Years...100 Movie Quotes.'
$quotes = [["quote" => "Frankly, my dear, I don't give a damn.",
            "source" => "Rhett Butler",
            "type" => "movie",
            "citation" => "Gone with the Wind",
            "year" => 1939],
           ["quote" => "I'm gonna make him an offer he can't refuse.",
            "source" => "Vito Corleone",
            "citation" => "The Godfather",
            "type" => "movie",
            "year" => 1972],
           ["quote" => "You don't understand! I coulda had class. I coulda been a contender. I could've been somebody, instead of a bum, which is what I am.",
            "source" => "Terry Malloy",
            "type" => "movie",
            "citation" => "On the Waterfront",
            "year" => 1954],
           ["quote" => "Toto, I've a feeling we're not in Kansas anymore.",
            "source" => "Dorothy Gale",
            "citation" => "The Wizard of Oz",
            "type" => "movie",
            "year" => 1939],
           ["quote" => "Here's looking at you, kid.",
            "source" => "Rick Blaine",
            "type" => "movie",
            "citation" => "Casablanca",
            "year" => 1942]];


// Create a function called getRandomQuote which takes an array as a parameter.
// Return a randomly selected element in the array by using the rand function.
function getRandomQuote($array) {
  return $array[rand(0, 4)];
}

// Create a function called printQuote.
// Create a variable called $quote and assign it the value of the getRandomQuote function, passing the global variable $quotes as an argument.
// Create an empty string called $string.
// Concatenate the string with the value of the key "quote,"
// Concatenate the string with the value of the key "source,"
// Check to see if the value of the key "type" exists. If it does, concatenate the string with the value. If it doesn't, do nothing.
// Check to see if the value of the key "citation" exists. If it does, concantenate the string with the value. If it doesn't, do nothing.
// Check to see if the value of the key "year" exists. If it does, concatenate the string with the value. If it doesn't, do nothing.
// Display the full string with appropriate HTML tags.
function printQuote() {
  global $quotes;
  $quote = getRandomQuote($quotes);
  $string = "";
  $string .= "<p class='quote'>" . $quote["quote"] . "</p>";
  $string .= "<p class='source'>" . $quote["source"];
  if ($quote["type"]) {
    $string .= "<span class='type'>". $quote["type"] . "</span";
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
?>
