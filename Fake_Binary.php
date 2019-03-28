/* Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.
*/
function fake_bin(string $s): string {
  $ret = '';
  for ($i = 0; $i < strlen($s); $i++) {
    $ch = substr($s, $i, 1);
    $ret .= ($ch >= '5') ? '1' : '0';
  }
  return $ret;
}
