/* Coding Meetup #2 - Higher-Order Functions Series - Greet developers
You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.
Your task is to return an array where each object will have a new property 'greeting' with the following string value:
Hi < firstName here >, what do you like the most about < language here >?

For example, given the following input array:

$list1 = [
  [
    "first_name" => "Sofia",
    "last_name" => "I.",
    "country" => "Argentina",
    "continent" => "Americas",
    "age" => 35,
    "language" => "Java"
  ],
  [
    "first_name" => "Lukas",
    "last_name" => "X.",
    "country" => "Croatia",
    "continent" => "Europe",
    "age" => 35,
    "language" => "Python"
  ],
  [
    "first_name" => "Madison",
    "last_name" => "U.",
    "country" => "United States",
    "continent" => "Americas",
    "age" => 32,
    "language" => "Ruby"
  ]
];

your function should return the following array:

[
  [
    "first_name" => "Sofia",
    "last_name" => "I.",
    "country" => "Argentina",
    "continent" => "Americas",
    "age" => 35,
    "language" => "Java",
    "greeting" => "Hi Sofia, what do you like the most about Java?"
  ],
  [
    "first_name" => "Lukas",
    "last_name" => "X.",
    "country" => "Croatia",
    "continent" => "Europe",
    "age" => 35,
    "language" => "Python",
    "greeting" => "Hi Lukas, what do you like the most about Python?"
  ],
  [
    "first_name" => "Madison",
    "last_name" => "U.",
    "country" => "United States",
    "continent" => "Americas",
    "age" => 32,
    "language" => "Ruby",
    "greeting" => "Hi Madison, what do you like the most about Ruby?"
  ]
]

Notes:

    The order of the properties in the objects does not matter.
    The input array will always be valid and formatted as in the example above.

*/

function greet_developers($a) {
  for ($i = 0; $i < count($a); $i++) {
    $a[$i]["greeting"] = "Hi {$a[$i]['first_name']}, what do you like the most about {$a[$i]['language']}?";
  }
  return $a;
}
