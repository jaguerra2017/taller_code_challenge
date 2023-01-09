<?php
    function map($numbers = []) {
        $squareNumbers = array_map(function($number) {
            return $number * $number;
        }, $numbers);

        sort($squareNumbers);

        return $squareNumbers;
    }

    $numbers = [-2, -1];
    map($numbers);
