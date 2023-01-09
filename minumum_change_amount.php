<?php
    function minimumAmount($coins = [])
    {
        $minumumSumAmount = 0;
        if (!empty($coins)) {
            sort($coins);

            foreach ($coins as $key => $coinValue) {
                if ($coinValue > $minumumSumAmount + 1) {
                    break;
                }
                
                $minumumSumAmount+=$coinValue;
            }
        }
        return $minumumSumAmount + 1;
    }

    $coins = [5, 7, 1, 1, 2, 3, 22];
    minimumAmount($coins);
