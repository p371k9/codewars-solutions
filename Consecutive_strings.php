/* You are given an array strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array.
Example:

longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"

n being the length of the string array, if n = 0 or k > n or k <= 0 return "".
Note

consecutive strings : follow one after another without an interruption

*/
function longestConsec($strarr, $k) {
    $longest = '';
    $n = count($strarr);
    if (($k < 1) || ($n == 0) || ($k > $n)) {
        return '';
    }
    for ($i = 0; $i < $n; $i++) {
        $str = '';
        if ($i + $k < $n) {
            for ($j = 0; $j < $k; $j++) {
                $str .= $strarr[$i + $j];
            }
        } else {
            for ($j = $i; $j < $n; $j++) {
                $str .= $strarr[$j];
            }
        }
        if (strlen($str) > strlen($longest) ) {
            $longest = $str;
        }                
    }
    return $longest;
}
