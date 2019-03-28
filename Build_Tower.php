/* Build Tower

Build Tower by the following given argument:
number of floors (integer and always greater than 0).

Tower block is represented as *

    Python: return a list;
    JavaScript: returns an Array;
    C#: returns a string[];
    PHP: returns an array;
    C++: returns a vector<string>;
    Haskell: returns a [String];
    Ruby: returns an Array;

Have fun!

for example, a tower of 3 floors looks like below

[
  '  *  ', 
  ' *** ', 
  '*****'
]

and a tower of 6 floors looks like below

[
  '     *     ', 
  '    ***    ', 
  '   *****   ', 
  '  *******  ', 
  ' ********* ', 
  '***********'
]
*/
function tower_builder(int $n): array {
    $ret = array();
    for ($i = 0; $i < $n; $i++) {
        $str = str_repeat('*', $i * 2 + 1);
        $str = str_pad($str, 2 * ($n - 1) + 1, " ", STR_PAD_BOTH);
        $ret[] = $str;
    }
    return $ret;  
}
