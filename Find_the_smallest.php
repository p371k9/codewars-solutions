/* You have a positive number n consisting of digits. You can do at most one operation: Choosing the index of a digit in the number, remove this digit at that index and insert it back to another place in the number.

Doing so, find the smallest number you can get.

#Task: Return an array or a tuple or a string depending on the language (see "Sample Tests") with

    1) the smallest number you got
    2) the index i of the digit d you took, i as small as possible
    3) the index j (as small as possible) where you insert this digit d to have the smallest number.

Example:

smallest(261235) --> [126235, 2, 0] or (126235, 2, 0) or "126235, 2, 0"

126235 is the smallest number gotten by taking 1 at index 2 and putting it at index 0

smallest(209917) --> [29917, 0, 1] or ...

[29917, 1, 0] could be a solution too but index `i` in [29917, 1, 0] is greater than 
index `i` in [29917, 0, 1].

29917 is the smallest number gotten by taking 2 at index 0 and putting it at index 1 which gave 029917 which is the number 29917.

smallest(1000000) --> [1, 0, 6] or ...
*/

function smallest($n) {
    $s = strval($n);
    $result = array($n, 0, 0);
    for ($from = 0; $from < strlen($s); $from++) {
        for ($to = 0; $to < strlen($s); $to++) {
            if ($from == $to) { 
                continue; 
            }
            $s1 = $s3 = ''; // right, left
            if (($from > 0) && ($to > 0)) {
                $s1 = substr($s, 0, ($from < $to) ? $from : $to);
            }
            if ($from < $to) { // center
                $s2 = substr($s, $from, $to - $from + 1);
                $s2 = substr($s2, (-1) * (strlen($s2) -1)) . substr($s2, 0, 1);
            } else {
                $s2 = substr($s, $to, $from - $to + 1);
                $s2 = substr($s2, -1) . substr($s2, 0, strlen($s2) -1);                
            }            
            if (($from < strlen($s) - 1) && ($to < strlen($s) - 1)) {
                $s3 = substr($s, (($from > $to) ? $from : $to) - strlen($s) + 1);
            }
            $val = (integer)($s1.$s2.$s3);
            if ($val < $result[0]) {
                $result = array($val, $from, $to);
            } elseif ($val == $result[0]) {
                if ($from < $result[1]) {
                    $result[1] = $from;
                    $result[2] = $to;                    
                } elseif ($from == $result[1]) {
                    if ($to < $result[2]) {
                        $result[2] = $to;
                    }
                }
            }
        }
    }
    return $result;
}
