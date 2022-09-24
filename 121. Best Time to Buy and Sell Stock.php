class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $profit = 0;
        if(empty($prices)){
            return $profit;
        }
        $max = PHP_INT_MIN;
        $i=0;$j=1;
        while($j<count($prices)){
           if($prices[$j]> $prices[$i]){
               $profit = $prices[$j]-$prices[$i];
               $max = max($max,$profit);
           }else{
               $i=$j;
           } 
            $j++;
        }
        if($max<0){
            return 0;
        }
        return $max;
        
    }
}