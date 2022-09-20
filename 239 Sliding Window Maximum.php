class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function maxSlidingWindow($nums, $k) {
        if($k==1){
            return $nums;
        }
        
        $count = count($nums);
        if ($k >= $count) {
		    return [max($nums)];
	    }
        
        $i=0;
        $j=0;
    
        $arr = [];
        $queue = new SplQueue();

        
        while($j<$count){
            while (!$queue->isEmpty() && $nums[$j] > $queue->top()) {
			    $queue->pop();
		    }
		    $queue->push($nums[$j]);
            
           if($j-$i+1<$k){
                $j++;
            }elseif($j-$i+1==$k){
                
                $arr[] = $queue->bottom();
               
                if($nums[$i] == $queue->bottom()){
                   $queue->shift();
                }
               
                $i++;
                $j++;
                
            
            }
        }
        
        return $arr;
    }
}