<?php
declare (strict_types = 1);

namespace app\index\model;

use think\Model;
use think\facade\Db;
use think\facade\Request;

/**
 * @mixin think\Model
 */
class Motto extends Model
{
    // 当你的数据表没有前缀的时候，name和table属性的定义是没有区别的，定义任何一个即可
	protected $name = 'Motto';// 模型名
    protected $table = 'think_motto';// 表名
	protected $pk = 'id';// 主键
    public function get_all($where,$order='add_time DESC',$total=10){
        $list = Motto::where($where)
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
    /*

	public function get_all($where,$order='add_time DESC',$p=1,$total=10){
        $count = Motto::where($where)->count();
        $list = Motto::where($where)
                    ->order($order)
                    ->page($p,$total)
                    ->select();
        if($list->isEmpty()){
            return null;
        }
        $arr = [
            'count' => ceil($count/$total),
            'data' => $list,
        ];
        return $arr;
    }
    */
    // 获取器(根据status字段进行自动处理)
    public function getStatusAttr($v){
        $status = [
            1=>'开启',
            0=>'关闭'
        ];
        return $status[$v];
    }
}
