class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function minWindow($s, $t) {
        if(strlen($s)<strlen($t)){
            return "";
        }
        
        if($s==$t){
            return $s;
        }
        
        $i=0;$j=0;
        $m = str_split($t);
        for($k=0;$k<count($m);$k++){
            $map[$m[$k]]++;
        }
       
        $count = count($map); 
        $arr = str_split($s);
        $min = PHP_INT_MAX;
        $res = [];
        while($j<=count($arr)){
            
            
            if($count != 0){
                
                if(isset($map[$arr[$j]])){
                    $map[$arr[$j]]--;
                    
                    if($map[$arr[$j]]==0){
                        $count--;
                    }
            }
               $j++; 
            }else{
                
                if($j-$i+1<$min){
                    $min = $j-$i+1;
                    $res = implode("",array_slice($arr,$i,$min-1));
                }
               
                if(isset($map[$arr[$i]])){
                    $map[$arr[$i]]++;
                    if($map[$arr[$i]]>0){
                        $count++;
                    }
                    
                }
                 $i++;
                
            }
            
        }
        
        if($min==PHP_INT_MAX){
            return "";
        }
        return $res;
       
    }
}