<?php
    class Solution {

        /**
         * @param Integer[] $nums
         * @param Integer $target
         * @return Integer[]
         */
        function searchRange($nums, $target) {
            $ans=[-1,-1];
            for($i=0;$i<count($nums);$i++){
                if($nums[$i]==$target){
                    $ans[0]=$i;
                    break;
                }
            }
            for($i=count($nums)-1;$i>=0;$i--){
                if($nums[$i]==$target){
                    $ans[1]=$i;
                    break;
                }
            }
            return $ans;
        }
    }
?>