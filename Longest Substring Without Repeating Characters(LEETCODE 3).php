class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $map = [];
        $max = PHP_INT_MIN;
        $sum = 0;
        
        $i=0;$j=0;
        if(strlen($s)==0){
            return 0;
        }
        
        $arr = str_split($s);
        while($j<count($arr)){
           
            if(isset($map[$arr[$j]])){
                
                foreach($map as $k => $v){
                    if($v<=$map[$arr[$j]]){
                         unset($map[$k]);
                    }
                }   
            }
             $map[$arr[$j]] = $j;
             $j++;
             $sum = count($map);
             $max = max($max,$sum);
            
        }
        
        return $max;
        
    }
}