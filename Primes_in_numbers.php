/* Given a positive number n > 1 find the prime factor decomposition of n. The result will be a string with the following form :

 "(p1**n1)(p2**n2)...(pk**nk)"

with the p(i) in increasing order and n(i) empty if n(i) is 1.

Example: n = 86240 should return "(2**5)(5)(7**2)(11)"
*/
function primeFactors($n) {
    static $primes = array(1 => 2, 2 => 3);
    if ($n <= 3) {        
        return "($n)";
    }     
    $result = ''; 
    $x = 1;
    do {            
        $nextPrime = $primes[$x];
        $exp = 0;
        while ($n % $nextPrime == 0) {
            $n /= $nextPrime;
            $exp++;
        }
        if ($exp == 1) {
            $result .= "($nextPrime)";
        }
        if ($exp > 1) {
            $result .= "($nextPrime**$exp)";
        }
        if ((++$x) <= count($primes)) {
            $nextPrime = $primes[$x];
        } else {
            while ($n > $nextPrime) {  // calculate Next Prime number                  
                $isPrime = true;
                $nextPrime += 2;
                for ($i = 2; /* == 3*/ ceil(sqrt($primes[$i])) >= $n; $i++) {
                    if ($nextPrime % $primes[$i] == 0)  {                    
                        $isPrime = false;
                        break; 
                    } 
                }
                if ($isPrime)  {
                    $primes[$x] = $nextPrime;
                    break;
                }
            }            
        }
    } while ($n > 1);
    return $result;
}
