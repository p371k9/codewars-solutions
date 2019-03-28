/* You are given two arrays a1 and a2 of strings. Each string is composed with letters from a to z. Let x be any string in the first array and y be any string in the second array.

Find max(abs(length(x) − length(y)))

If a1 and/or a2 are empty return -1 in each language except in Haskell (F#) where you will return Nothing (None).

#Example:

a1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"]
a2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"]
mxdiflg(a1, a2) --> 13

*/
function mxdiflg($a1, $a2) {
    if ((count($a1) == 0) || (count($a2) == 0)) {
        return -1;
    }
    $maxi = 0;
    foreach ($a1 as $str1) {
        foreach ($a2 as $str2) {
            $x = abs(strlen($str1) - strlen($str2));
            if ($x > $maxi) {
                $maxi = $x;
            }
        }
    }
    return $maxi;
}
