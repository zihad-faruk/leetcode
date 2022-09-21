    class Solution {

        /**
         * @param Integer[] $fruits
         * @return Integer
         */
        function totalFruit($fruits) {

            if(count($fruits)==1){
                return 1;
            }

            $i=0;
            $j=0;
            $map = [];
            $max = PHP_INT_MIN;
            while($j<count($fruits)){
                $map[$fruits[$j]]++;
                $s= count($map);
                if($s<2){
                    $max = max($max,$j-$i+1);
                    $j++;
                }elseif($s>2){
                    while($s>2){
                        $map[$fruits[$i]] = $map[$fruits[$i]]-1;
                        if($map[$fruits[$i]]<=0){
                            unset($map[$fruits[$i]]);
                        }
                        $s= count($map);
                        $i++;
                    }
                    $j++;
                }else{
                    $max = max($max,$j-$i+1);
                    $j++;
                }

            }
           return $max;
        }
    }