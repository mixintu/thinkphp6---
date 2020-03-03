<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\Model;
use think\facade\Db;
use think\facade\Request;

/**
 * @mixin think\Model
 */
class AnimePicture extends Model
{
    // 当你的数据表没有前缀的时候，name和table属性的定义是没有区别的，定义任何一个即可
	protected $name = 'AnimePicture';// 模型名
    protected $table = 'think_anime_pictures';// 表名
	protected $pk = 'id';// 主键

    public function get_all($where,$order='id DESC',$total=10){
        $list = AnimePicture::where($where)
                    ->order($order)
                    ->paginate([
                        'list_rows'=> $total,
                        'query' => Request::param()
                    ]);
        $right = $list->toArray()["data"];
        $arr = [
            'right' => $right,
            'list' => $list,
        ];
        return $arr;
    }
    // 获取器(根据status字段进行自动处理)
    public function getStatusAttr($v){
        $status = [
            1=>'开启',
            0=>'关闭'
        ];
        return $status[$v];
    }
    // 获取器(根据url字段进行自动处理)
    public function getUrlAttr($str){
        // $path=app()->getRootPath().'public\static\images\anime\\'; //获取应用根目录
        // $path=app()->getNamespace(); //获取应用类库命名空间
        // $path=app()->version(); //获取框架版本
        // $path=app()->getBasePath(); //获取应用基础目录
        // $path=app()->getAppPath(); //获取当前应用目录
        // $path=app()->getThinkPath(); //获取核心框架目录
        // $path=app()->getConfigPath(); //获取应用配置目录
        // 'D:\xampp\htdocs\mixintu\public\static\images\anime';
        return 'anime/'.$str;
    }
}
