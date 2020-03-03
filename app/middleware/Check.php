<?php
declare (strict_types = 1);

namespace app\middleware;

class Check
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    
    public function handle($request, \Closure $next)
    {
        // 添加中间件执行代码
        if($request->param('name')=='think'){
            return http_redirect('index/think');
        }
        return $next($requert);
    }
    
    /*
    public function handle($request, \Closure $next, $name)
    {
        $request->hello='ThinkPHP';
        if ($name == 'think') {
            return redirect('index/think');
        }

        return $next($request);
    }
    
    public function end(\think\Response $response)
    {
        // 回调行为
    }
    */
    
}
