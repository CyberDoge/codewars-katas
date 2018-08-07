<?php
function solution($str)
{
    $res = array();
    if (strlen($str)== 0) {
        return array();
    }
    for ($i=0; $i <strlen($str) ; $i+=2) {
        if (strlen($str) - 1 == $i) {
            $res[] = $str[$i].'_';
            return $res;
        } else {
            $res[] = $str[$i].$str[$i+1];
        }
    }
    return $res;
}
print_r(solution("abcd"));
