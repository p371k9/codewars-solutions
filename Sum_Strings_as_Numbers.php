/*
Given the string representations of two integers, return the string representation of the sum of those integers.

For example:

sumStrings('1','2') // => '3'

A string representation of an integer will contain no characters besides the ten numerals "0" to "9".

*/
function sum_strings($a, $b) {
    $result = '';
    $m = 0;
    for ($i = 1; $i <= max(strlen($a), strlen($b)); $i++ ) {
        $val = $m;
        if ($i <= strlen($a)) {
            $val += (int)substr($a, (-1) * $i, 1);
        }
        if ($i <= strlen($b)) {
            $val += (int)substr($b, (-1) * $i, 1);
        }
        if ($val > 9) {
            $val -= 10;
            $m = 1;
        } else { 
            $m = 0; 
        }
        $result = (string)$val.$result;
    }
    if ($m == 1) {
        $result = '1'.$result;
    }
    while (substr($result, 0, 1) == '0') {
        $result = substr($result, 1 - strlen($result));
    }
    return $result;
} 
