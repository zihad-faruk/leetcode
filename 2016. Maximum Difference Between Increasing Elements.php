class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumDifference($nums) {
        $max =  -1;
        $tmp = 0;
        list($i,$j) = array(0,1);
        while($j<count($nums)){
            if($nums[$j]>$nums[$i]){
                $tmp = $nums[$j]-$nums[$i];
                $max = max($max,$tmp);
            }else{
                $i=$j;
            }
            $j++;
        }
        return $max;
        
    }
}