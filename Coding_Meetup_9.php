/* Coding Meetup #9 - Higher-Order Functions Series - Is the meetup age-diverse?

You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.

Your task is to return:

    true if developers from all of the following age groups have signed up: teens, twenties, thirties, forties, fifties, sixties, seventies, eighties, nineties, centenarian (at least 100 years young).
    false otherwise.

For example, given the following input array:

$list1 = [
  [
    "first_name" => "Harry",
    "last_name" => "K.",
    "country" => "Brazil",
    "continent" => "Americas",
    "age" => 19,
    "language" => "Python"
  ],
  [
    "first_name" => "Kseniya",
    "last_name" => "T.",
    "country" => "Belarus",
    "continent" => "Europe",
    "age" => 29,
    "language" => "JavaScript"
  ],
  [
    "first_name" => "Jing",
    "last_name" => "X.",
    "country" => "China",
    "continent" => "Asia",
    "age" => 39,
    "language" => "Ruby"
  ],
  [
    "first_name" => "Noa",
    "last_name" => "A.",
    "country" => "Israel",
    "continent" => "Asia",
    "age" => 40,
    "language" => "Ruby"
  ],
  [
    "first_name" => "Andrei",
    "last_name" => "E.",
    "country" => "Romania",
    "continent" => "Europe",
    "age" => 59,
    "language" => "C"
  ],
  [
    "first_name" => "Maria",
    "last_name" => "S.",
    "country" => "Peru",
    "continent" => "Americas",
    "age" => 60,
    "language" => "C"
  ],
  [
    "first_name" => "Lukas",
    "last_name" => "X.",
    "country" => "Croatia",
    "continent" => "Europe",
    "age" => 75,
    "language" => "Python"
  ],
  [
    "first_name" => "Chloe",
    "last_name" => "K.",
    "country" => "Guernsey",
    "continent" => "Europe",
    "age" => 88,
    "language" => "Ruby"
  ],
  [
    "first_name" => "Viktoria",
    "last_name" => "W.",
    "country" => "Bulgaria",
    "continent" => "Europe",
    "age" => 98,
    "language" => "PHP"
  ],
  [
    "first_name" => "Piotr",
    "last_name" => "B.",
    "country" => "Poland",
    "continent" => "Europe",
    "age" => 128,
    "language" => "JavaScript"
  ]
];

your function should return true as there is at least one developer from each age group.

Notes:

    The input array will always be valid and formatted as in the example above.
    Age is represented by a number which can be any positive integer up to 199.
*/

function is_age_diverse(array $a): bool {
  $teens = $twenties = $thirties = $forties = $fifties = $sixties = $seventies = $eighties = $nineties = $centenarian = false;
  foreach ($a as $aa) {
    if ($aa['age'] < 20) { $teens = true; }
    elseif (($aa['age'] >= 20) && ($aa['age'] < 30)) { $twenties = true; }    
    elseif (($aa['age'] >= 30) && ($aa['age'] < 40)) { $thirties = true; }
    elseif (($aa['age'] >= 40) && ($aa['age'] < 50)) { $forties = true; }
    elseif (($aa['age'] >= 50) && ($aa['age'] < 60)) { $fifties = true; }
    elseif (($aa['age'] >= 60) && ($aa['age'] < 70)) { $sixties = true; }
    elseif (($aa['age'] >= 70) && ($aa['age'] < 80)) { $seventies = true; }
    elseif (($aa['age'] >= 80) && ($aa['age'] < 90)) { $eighties = true; }
    elseif (($aa['age'] >= 90) && ($aa['age'] < 100)) { $nineties = true; }
    elseif (100 <= $aa['age']) { $centenarian = true; }
    if ($teens && $twenties && $thirties && $forties && $fifties && $sixties && $seventies && $eighties && $nineties && $centenarian) {
      return true;
    }    
  }
  return false;
}
