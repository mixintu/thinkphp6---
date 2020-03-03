<?php
namespace app\common;

class Test
{
    public function hello($name)
    {
    	/**调用方式：
		$test = new \app\common\Test;
		echo $test->hello('thinkphp'); // 输出 hello，thinkphp

    	*/
        return 'hello,' . $name;
    }
}