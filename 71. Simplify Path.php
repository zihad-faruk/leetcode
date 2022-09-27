class Solution {

    /**
     * @param String $path
     * @return String
     */
    function simplifyPath($path) {
        $stack=[];
        $arr = array_filter(explode("/",$path));
        
        foreach($arr as $a){
            if($a=='.'){
                continue;
            }elseif($a=='..'){
                array_pop($stack);
                
            }else{
                array_push($stack,$a);
            }
        }
        //print_r($stack);
        $stack[0] = '/'.$stack[0];
        return implode('/',$stack);
        
    }
}