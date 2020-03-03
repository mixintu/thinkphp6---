<?php
declare (strict_types = 1);

namespace app\admin\controller;

use \think\facade\Db;
use think\facade\View;
use think\facade\Request;
use think\facade\Session;

use app\admin\model\ScreenshotPicture;
use app\BaseController;

class ScreenshotPictures extends BaseController
{
    public function index()
    {
        # 右侧列表
        $where = true;
        $order = 'id ASC';
        $url = new ScreenshotPicture();
        $arr = $url->get_all($where, $order,10);
        View::assign([
            'right' => $arr['right'],
            'list' => $arr['list'],
        ]);
        return View::fetch();
    }
    /**
     * 显示资源列表
     *
     */
    // public function index()
    // {
    //     $param = Request::param();

    //     # 状态搜索和分页显示功能+++++++++++++++++++++++++++++++++++++++++++++++++++
    //     if(isset($param['status']) && $param['status'] == '1'){
    //         $where['status'] = 1;
    //     }else if(isset($param['status']) && $param['status'] == '2'){
    //         $where['status'] = 2;
    //     }else{
    //         $where = true;
    //     }
    //     $p = isset($param['p']) ? $param['p'] : 1;
    //     $status=isset($param['status']) ? $param['status'] : 0;
    //     // ----------------------------------------------------------------------


    //     $url = new ScreenshotPicture();
    //         $order = [
    //             'id ASC',
    //         ];
    //     $right = $url->get_all($where, $order, (int)$p, 10);

    //     View::assign([
    //         'right' => $right['data'],
    //         'count' => $right['count'],
    //         'p' => $p,
    //         'status' => $status,
    //     ]);

    //     return View::fetch();

    // }
    # 编辑++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function edit(){
        if(Request::method() == 'POST'){
            // print_r(Request::method());exit;
            $all = Request::param();
            $update = Db::connect('admin')->table('think_screenshot_pictures')->where('id',$all['id'])->update($all);
            if($update){
                echo json_encode(['code'=>0,'msg'=>'修改成功']);
            }else{
                echo json_encode(['code'=>1,'msg'=>'修改失败']);
            }
        }else{
            // print_r(Request::method());exit;
            $id = Request::param('id');
            $url = Db::connect('admin')->table('think_screenshot_pictures')->where('id',$id)->find();
            $urls = Db::connect('admin')->table('think_screenshot_pictures')->column('url');
            View::assign([
                'url' => $url,
                'urls' => $urls,
            ]);
            return View::fetch();
        }
    }
    # 刷新资源+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function edits(){
        $all = Request::param();
        $update = Db::connect('admin')->table('think_screenshot_pictures')->where('id',$all['id'])->update($all);
        if($update){
            echo json_encode(['code'=>0,'msg'=>'修改成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'修改失败']);
        }
    }

    # 删除++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function del(){
        $id = Request::param('id');
        $delete = Db::connect('admin')->table('think_screenshot_pictures')->where('id',$id)->delete();
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
            $insert = Db::connect('admin')->table('think_screenshot_pictures')->insert($all);
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