<?php
namespace app\facade;

use think\Facade;

class Test extends Facade
{
    protected static function getFacadeClass()
    {
    	
    	// 无需进行实例化 直接以静态方法方式调用hello
		// echo \app\facade\Test::hello('thinkphp');
    	return 'app\common\Test';
    }
}