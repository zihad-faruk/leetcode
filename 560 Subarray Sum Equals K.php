class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function subarraySum($nums, $k) {
        $count = 0;
        $sum = 0;
        $map[0] = 1;
        for($i=0;$i<count($nums);$i++){
            $sum+=$nums[$i];
            if(isset($map[$sum-$k])){
                $count = $count+ $map[$sum-$k];
            }
            $map[$sum]++;
        }
        return $count;
        
    }
}