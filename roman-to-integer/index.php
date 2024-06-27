<?php 
    class Solution {
        private $roman = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        public function __construct() {
            echo $this->romanToInt('MCMXCIV');
        }

        public function romanToInt($s) {
            $total = 0;
            $length = strlen($s);
            for ($i = 0; $i < $length; $i++) {
                $curentValue = $this->roman[$s[$i]];
                $nextValue = $i < $length - 1 ? $this->roman[$s[$i + 1]] : 0;
                if ($curentValue < $nextValue) {
                    $total -= $curentValue;
                }else {
                    $total += $curentValue;
                }
            }

            return $total;
        }

        // public function romanToInt($s) {
        //     $total = 0;
        //     $temp = 0;
        //     for ($i = strlen($s) - 1; $i >= 0; $i--) {
        //         if ($temp <= $this->roman[$s[$i]]) {
        //             $total += $this->roman[$s[$i]];
        //         }else {
        //             $total -= $this->roman[$s[$i]];
        //         }
        //         $temp = $this->roman[$s[$i]];
        //     }

        //     return $total;
        // }
    }

    new Solution();
?>