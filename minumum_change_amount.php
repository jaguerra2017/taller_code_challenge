<?php
    function minimumAmount($coins = [])
    {
        $minumumSumAmount = 0;
        if (!empty($coins)) {
            sort($coins);
            $maxValue = $coins[count($coins)-1];

            foreach ($coins as $key => $coinValue) {
                $minumumSumAmount+=$coinValue;
                if (($minumumSumAmount + $coins[$key+1]) >= $maxValue) {
                    break;
                }
            }
        }
        return $minumumSumAmount + 1;
    }

    $coins = [1, 1, 1, 1, 1];
    minimumAmount($coins);
