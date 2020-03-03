<?php
declare (strict_types = 1);

namespace app\middleware;
/**
    访问环境检查，是否是微信或支付宝等

*/mobile
class InAppCheck
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
        if(preg_match('~micromessenger~i', $requert->header('user-agent'))){
            $requert->InApp='WeChat';
        }else if(preg_match('~alipay~i', $request->header('user-agent'))){
            $request->InApp='Alipay';
        }
        return $next($request);
    }
}
