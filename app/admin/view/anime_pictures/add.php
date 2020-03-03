<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://www.php.cn/static/layui/css/layui.css">
    <script type="text/javascript" src="https://www.php.cn/static/layui/layui.js"></script>
</head>
<body style="padding:10px;">
    <form class="layui-form">
        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" name="title" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">链接</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" name="url" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-inline">
                <select name="status">
                    <option value="1" selected>开启</option>
                    <option value="0">关闭</option>
                </select>
            </div>
        </div>
    </form>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" onclick="add()">添加</button>
        </div>
    </div>
    <script type="text/javascript">
        layui.use(['layer','form'],function(){
            form = layui.form;
            layer = layui.layer;
            $ = layui.jquery;
        });
        function add(){
            $.post('/admin.php/AnimePictures/add',$('form').serialize(),function(res){
                if(res.code>0){
                    layer.alert(res.msg,{icon:2});
                }else{
                    layer.msg(res.msg);
                    setTimeout(function(){parent.window.location.reload();},1000);
                }
            },'json');
        }
    </script>
</body>
</html>