<?php
// 这是系统自动生成的middleware定义文件
return [
	// Session初始化
    \think\middleware\SessionInit::class,
    // 判断当前浏览器环境是在微信或支付宝
    // app\http\middleware\InAppCheck::class,
    // 'inapp'=>app\http\middleware\InAppCheck::class,

    /**使用别名定义多个中间件
    'check'=>[
	    	app\http\middleware\Auth::class,
	   		app\http\middleware\Check::class
	],
	使用别名的方式：
	Route::rule('hello/:name','hello')->middleware('check');
	*/


];
