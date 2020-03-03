<?php
declare (strict_types = 1);

namespace app\http\middleware;

class After
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
        // 前置中间件
    }
}
