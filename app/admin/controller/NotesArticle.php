<?php
declare (strict_types = 1);

namespace app\admin\controller;

use \think\facade\Db;
use think\facade\View;
use think\facade\Request;
use think\facade\Session;

use app\BaseController;

class NotesArticle extends BaseController
{
    
    /**
     * 显示资源列表
     *
     */
    public function index()
    {
        return View::fetch();
    }
}