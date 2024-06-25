<?php 
     class Solution {
        private $nums = [2,7,8,9,11,15];
        private $target = 17;
        public function __construct() {
            $result = $this->twoSum($this->nums, $this->target);
            print_r($result);
        }
        public function twoSum($nums, $target) {
            $hash_map = array();
            for ($i = 0; $i < count($nums); $i++) {
                $result = $target - $nums[$i];
                if (isset($hash_map[$result])) { 
                    return array($hash_map[$result], $i);
                }
                $hash_map[$nums[$i]] = $i; 
            }
            return null;
        }
    }
    
    new Solution();

    $nums = [2,7,11,15];

?>