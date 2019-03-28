/* Given a number, return a string with dash'-'marks before and after each odd integer, but do not begin or end the string with a dash mark.

Ex:

dashatize(274) -> '2-7-4'
dashatize(6815) -> '68-1-5'
*/
function dashatize(int $num): string {
    $ret = '';
    $str = (string)abs($num); 
    if (strlen($str) < 2) {
        return $str;
    }
    $dash = false;
    for ($i = 0; $i < strlen($str); $i++ ) {
        $odd = ((int)$str[$i] % 2 == 1);
        $first = $i == 0;
        $last = $i == strlen($str) -1;
        if ($odd) {
            if ($dash) {
                if ($last) {    // sz1
                    $ret .= $str[$i];
                } elseif (!$first) {    // sz6
                    $ret .= $str[$i].'-';
                }
            } else {
                if ($last) {     // sz2
                    $ret .= '-'.$str[$i];
                } elseif (!$first) { // sz7
                    $ret .= '-'.$str[$i].'-';
                    $dash = true;
                }
            }
            if (!$last && $first) { // sz4
                $ret .= $str[$i].'-';
                $dash = true;
            }
        } else {
            if (!$last) {  // sz5
                $dash = false;
            }
            $ret .= $str[$i];   // sz3 & sz5
        }        
    }
    return $ret;
}
