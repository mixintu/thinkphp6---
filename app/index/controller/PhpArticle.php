<?php
declare (strict_types = 1);

namespace app\index\controller;

use think\facade\View;
use think\facade\Request;
use app\index\model\Motto;

class PhpArticle
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        # 右侧列表
        // $where = true;
        $title='迷心兔';
        // $order = 'id ASC';
        // $url = new Motto();
        // $arr = $url->get_all($where, $order,10);
        View::assign([
            'title'=>$title,
            // 'right' => $arr['right'],
            // 'list' => $arr['list'],
        ]);
        return View::fetch();
    }
    /*
    public function index()
    {
        $param = Request::param();

        
        # 状态搜索和分页显示功能+++++++++++++++++++++++++++++++++++++++++++++++++++
        if(isset($param['add_time']) && $param['add_time'] == ''){
            $order = ['add_time DESC'];
        }else if(isset($param['heat']) && $param['heat'] == ''){
            $order = ['heat DESC'];
        }else{
            $order = ['id ASC'];
        }

        $title='迷心兔';
        $p = isset($param['p']) ? $param['p'] : 1;

        $url = new Motto();
        $right = $url->get_all(true, $order, (int)$p, 12);

        View::assign([
            'title'=>$title,
            'right' => $right['data'],
            'count' => $right['count'],
            'p' => $p,
        ]);

        return View::fetch();
    }
    */
    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
