class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        if(strlen($s)<=1){
            return $s;
        }
        $arr = explode(" ",$s);
        foreach($arr as $key=>&$a){
            $a = strrev($a);
        }
        return implode(" ",$arr);
        
    }
}