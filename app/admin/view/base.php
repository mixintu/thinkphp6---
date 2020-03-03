<!DOCTYPE html>
<html>
<head>
  <!-- 页面的元信息 -->
  {include file="common/meta"}
  <style type="text/css">
      #div1 img{
        margin-top: -20px;
        cursor: pointer;
        transition: all 0.6s;
        position:absolute;
        z-index:99;
      }
      #div1 img:hover{
        z-index:999;
        transform: scale(8.4);
      }
  </style>
</head>
<body class="layui-layout-body">
  <div class="layui-layout layui-layout-admin">
      <!-- 头部区域（可配合layui已有的水平导航） -->
      {include file="common/header"}

      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      {include file="common/left"}

      <!-- 主体内容 -->
      {block name="main"}主内容{/block}
      
      <!-- 底部固定区域 -->
      <div class="layui-footer">© layui.com - 底部固定区域</div>

      <!-- 辅助元素，一般用于移动设备下遮罩 -->
      <div class="layadmin-body-shade" layadmin-event="shade"></div>
  </div>
  <!-- 底部script固定区域 -->
  {include file="common/script"}
</body>
</html>