<?php

function my_vardump($a) {
    if (is_float($a)) {
        $floatval = floatval($a);
        print_r(gettype($a) . '(' . $floatval .')' . "\n");
    }

    else if (is_int($a)) {
        $intval = intval($a);
        print_r(gettype($a) . '(' . $intval .')' . "\n");
    }
    
    else if (is_string($a)) {
        $length = strlen($a);
        print_r(gettype($a) . '(' . $length .')' . ' "' . $a . '"' . "\n");
    }
    
    else if (is_array($a)) {
        $arraykeys = array_keys($a);
        $arrayvalues = array_values($a);

        foreach ($arraykeys as $arraykey => $value) {
            foreach ($arrayvalues as $arrayvalue => $value) {
            $countarray = count($a);
        }
    }

        print_r(gettype($a) . '(' . $countarray . ')' . ' {' . "\n" . '[' . $value . ']' . "\n" . '}' . "\n");
    }
}

my_vardump(['coucou', 1, 2, 3.111]);
var_dump(['coucou', 1, 2, 3.111]);