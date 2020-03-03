<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});

Route::get('Article/index/2', 'MottoArticle/index');
Route::get('Article/index/3', 'NotesArticle/index');
Route::get('Article/index/4', 'PhpArticle/index');
Route::get('Article/index/5', 'PythonArticle/index');

Route::get('Article/index/7', 'PeoplePictures/index');
Route::get('Article/index/8', 'AnimePictures/index');
Route::get('Article/index/9', 'ScreenshotPictures/index');

Route::get('Article/index/11', 'MottoArticle/index');
Route::get('Article/index/12', 'MottoArticle/index');
Route::get('Article/index/13', 'MottoArticle/index');
