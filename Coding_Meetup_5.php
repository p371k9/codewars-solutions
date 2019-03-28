/* Coding Meetup #5 - Higher-Order Functions Series - Prepare the count of languages

You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.
Your task is to return an object (associative array in PHP) which includes the count of each coding language represented at the meetup.
For example, given the following input array:

$list1 = [
  [
    "first_name" => "Noah",
    "last_name" => "M.",
    "country" => "Switzerland",
    "continent" => "Europe",
    "age" => 19,
    "language" => "C"
  ],
  [
    "first_name" => "Anna",
    "last_name" => "R.",
    "country" => "Liechtenstein",
    "continent" => "Europe",
    "age" => 52,
    "language" => "JavaScript"
  ],
  [
    "first_name" => "Ramon",
    "last_name" => "R.",
    "country" => "Paraguay",
    "continent" => "Americas",
    "age" => 29,
    "language" => "Ruby"
  ],
  [
    "first_name" => "George",
    "last_name" => "B.",
    "country" => "England",
    "continent" => "Europe",
    "age" => 81,
    "language" => "C"
  ]
];

your function should return the following object (associative array in PHP):

[
  "C" => 2,
  "JavaScript" => 1,
  "Ruby" => 1
]

Notes:

    The order of the languages in the object does not matter.
    The count value should be a valid number.
    The input array will always be valid and formatted as in the example above.
*/

function count_languages($arr) {
    $result = [];
    for ($i = 0; $i < count($arr); $i++) {
        if (array_key_exists($arr[$i]['language'], $result)) {
            $result[$arr[$i]['language']]++;
        } else {
            $result[$arr[$i]['language']] = 1;
        }
    }    
    return $result;  
}
