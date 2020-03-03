<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\View;
use think\facade\Db;
use think\facade\Request;
use think\facade\Session;

class Login
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(){
        if(Request::method() == 'POST'){
            $all = Request::param();
            $admin = Db::connect('admin')->table('think_admin')->where('account',$all['account'])->find();
            if(empty($admin)){
                echo json_encode(['code'=>1,'msg'=>'未找到管理员']);
                exit;
            }
            if(md5($all['pwd']) != $admin['password']){
                echo json_encode(['code'=>1,'msg'=>'密码错误']);
                exit;
            }
            Session::set('uid',$admin['uid']);
            Session::set('account',$admin['account']);
            echo json_encode(['code'=>0,'msg'=>'登陆成功']) ;
        }else{
            $title = '迷心兔';
            View::assign([
                'title'  => $title
            ]);
            return View::fetch();
        }
    }
    // 退出登录
    public function logout(){
        session(null);//退出清空session
        session::clear();
        return redirect('../login/index')->with('validate','您已退出');
    }

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
