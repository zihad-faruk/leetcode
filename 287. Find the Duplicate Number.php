
//Wtih O(n) space
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $map = [];
        foreach($nums as $n){
            if(isset($map[$n])){
                return $n;
            }
            $map[$n] = 1;
        }
        
    }
}

//With O(1) space 
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $slow = 0; $fast = 0;
    do{
        $slow = $nums[$slow];
        $fast = $nums[$nums[$fast]];
        }while($slow != $fast);
    
        $slow = 0;
    while($slow != $fast){
        $slow = $nums[$slow];
        $fast = $nums[$fast];
        }
    return $slow;
        
    }
}