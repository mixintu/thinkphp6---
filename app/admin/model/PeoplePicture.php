<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\Model;
use think\facade\Db;
use think\facade\Request;

/**
 * @mixin think\Model
 */
class PeoplePicture extends Model
{
    // 当你的数据表没有前缀的时候，name和table属性的定义是没有区别的，定义任何一个即可
	protected $name = 'PeoplePicture';// 模型名
    protected $table = 'think_people_pictures';// 表名
	protected $pk = 'id';// 主键

    public function get_all($where,$order='id DESC',$total=10){
        $list = PeoplePicture::where($where)
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

	// public function get_all($where,$order='id DESC',$p=1,$total=10){
 //        $count = PeoplePicture::where($where)->count();
 //        $list = PeoplePicture::where($where)
 //                    ->order($order)
 //                    ->page($p,$total)
 //                    ->select();
 //        if($list->isEmpty()){
 //            return null;
 //        }
 //        $arr = [
 //            'count' => ceil($count/$total),
 //            'data' => $list,
 //        ];
 //        return $arr;
 //    }
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
        return 'people/'.$str;
    }
}
