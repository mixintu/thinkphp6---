<div class="layui-header">
<div class="layui-logo">{$title} 后台布局</div>
  <ul class="layui-nav layui-layout-left">
    <li class="layui-nav-item"><a href="{:url('Index/index')}"><i class="layui-icon">&#xe664;</i> 控制台</a></li>
    <li class="layui-nav-item">
      <a href="javascript:;"><i class="layui-icon">&#xe62e;</i> 娱乐</a>
      <dl class="layui-nav-child">
        <dd><a href="">音乐</a></dd>
        <dd><a href="">跳舞</a></dd>
        <dd><a href="">电影</a></dd>
      </dl>
    </li>
  </ul>
  <ul class="layui-nav layui-layout-right">
    <li class="layui-nav-item">
      <a href="javascript:;">
        <i class="layui-icon">&#xe66f;</i> 
        贤心
      </a>
      <dl class="layui-nav-child">
        <dd><a href="">基本资料</a></dd>
        <dd><a href="">安全设置</a></dd>
      </dl>
    </li>
    <li class="layui-nav-item"><a href="{:url('Login/logout')}">退了</a></li>
  </ul>
</div>
