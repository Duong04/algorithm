<?php
    class Solution {
        private $x = -121;
        public function __construct() {
            echo $this->isPalindrome($this->x) ? 'True' : 'False';
        }
        public function isPalindrome($x) {
            $str = (string) $x;
            $left = 0;
            $right = strlen($str) - 1;
            while ($left < $right) {
                if ($str[$left] != $str[$right]) {
                    return false;
                }

                $left++;
                $right--;
            }

            return true;
        }
    }

    new Solution();