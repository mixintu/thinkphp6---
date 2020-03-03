<?php
declare (strict_types = 1);

namespace app\admin\controller;

use \think\facade\Db;
use think\facade\View;
use think\facade\Request;
use think\facade\Session;

use app\admin\model\Motto;
use app\BaseController;

class MottoArticle extends BaseController
{
    public function index()
    {
        # 右侧列表
        $where = true;
        $order = 'id ASC';
        $url = new Motto();
        $arr = $url->get_all($where, $order,10);
        View::assign([
            'right' => $arr['right'],
            'list' => $arr['list'],
        ]);
        return View::fetch();
    }
    # 编辑++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function edit(){
        if(Request::method() == 'POST'){
            // print_r(Request::method());exit;
            $all = Request::param();
            $update = Db::connect('admin')->table('think_motto')->where('id',$all['id'])->update($all);
            if($update){
                echo json_encode(['code'=>0,'msg'=>'修改成功']);
            }else{
                echo json_encode(['code'=>1,'msg'=>'修改失败']);
            }
        }else{
            // print_r(Request::method());exit;
            $id = Request::param('id');
            $url = Db::connect('admin')->table('think_motto')->where('id',$id)->find();
            View::assign([
                'url' => $url,
            ]);
            return View::fetch();
        }
    }
    # 刷新资源+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function edits(){
        $all = Request::param();
        $update = Db::connect('admin')->table('think_motto')->where('id',$all['id'])->update($all);
        if($update){
            echo json_encode(['code'=>0,'msg'=>'修改成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'修改失败']);
        }
    }

    # 删除++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function del(){
        $id = Request::param('id');
        $delete = Db::connect('admin')->table('think_motto')->where('id',$id)->delete();
        if($delete){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
        }
    }
    # 添加++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function add(){
        if(Request::method() == 'POST'){
            $all = Request::param();
            $insert = Db::connect('admin')->table('think_motto')->insert($all);
            if($insert){
                echo json_encode(['code'=>0,'msg'=>'添加成功']);
            }else{
                echo json_encode(['code'=>1,'msg'=>'添加失败']);
            }
        }else{
            return View::fetch();
        }
    }
}