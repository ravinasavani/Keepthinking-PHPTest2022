<?php

$needle = "London, England, uk";
$haystack = array(
    1 => array("London", "Ontario", "Canada"),
    8 => array("Greater London", "England", "UK"),
    4 => array("London", "England", "United Kingdom"),
    9 => array("London", "California", "United States")
);

echo best_match($needle, $haystack);

function best_match($needle, $haystack)
{
    $arr = [];
    $word = explode(",", $needle);

    foreach ($haystack as $index => $countries) {
        $rank = 0;
        foreach ($countries as $country) {
            $val = explode(" ", $country);
            for ($i = 0; $i < count($val); $i++) {
                for ($j = 0; $j < count($word); $j++) {
                    if (stripos(trim($word[$j]), $val[$i]) !== false) {
                        $rank += strlen(trim($word[$j]));
                    }
                }
            }
        }
        $arr[$index] = $rank;
    }

    $value = max($arr);
    $key = array_search($value, $arr);
    return $key;
}
