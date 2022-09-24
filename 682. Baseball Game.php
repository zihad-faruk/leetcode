//without stack 
class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function calPoints($operations) {
        $j=0;
        $i=0;
        $sum = 0;
        $res = [];
       while($j<count($operations)){
           if($operations[$j]=='C' || $operations[$j]=='D' || $operations[$j]=='+'){
               if($operations[$j]=='C'){
                   unset($res[$i-1]);
                   $i--;
               }elseif($operations[$j]=='D'){
                   $res[$i] = $res[$i-1]*2;
                   $i++;
               }else{
                   $res[$i] = $res[$i-1]+$res[$i-2];
                   $i++;
               }
                   
           }else{
               $res[$i] = $operations[$j];
               $i++;
           }
           $j++;
           
       }
        if(!empty($res)){
            foreach($res as $r){
                $sum+=$r;
            }
        }
       
        return $sum;
    }
}


//with stream_bucket_new