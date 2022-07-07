<?php
class FizzBuzz
{
    public function printNumbers($num)
    {
        if ($num % 3 == 0 && $num % 5 == 0) {
            return "FizzBuzz";
        }
        if ($num % 3 == 0) {
            return "Fizz";
        }
        if ($num % 5 == 0) {
            return "Buzz";
        }
        return $num;
    }
}

$obj = new FizzBuzz();
for ($n = 1; $n <= 100; $n++) {
    echo $obj->printNumbers($n) . "<br>";
}
