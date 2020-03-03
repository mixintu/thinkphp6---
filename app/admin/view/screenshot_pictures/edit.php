<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://www.php.cn/static/layui/css/layui.css">
    <script type="text/javascript" src="https://www.php.cn/static/layui/layui.js"></script>
</head>
<body style="padding:10px;">
    <form class="layui-form">
        <input type="hidden" name="id" value="{$url.id}">
        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" name="title" value="{$url.title}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">链接</label>
            <div class="layui-input-inline">
                <select name="url">
                    <option value='{$url.url}'>{$url.url}</option>
                    {volist name="urls" id="tmp"}
                        <option value='{$tmp}'>{$tmp}</option>
                    {/volist}
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-inline">
                <select name="status">
                    <option value="1" {if $url['status']==1} selected {/if}>开启</option>
                    <option value="0" {if $url['status']==0} selected {/if}>关闭</option>
                </select>
            </div>
        </div>
    </form>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" onclick="save()">保存</button>
        </div>
    </div>
</body>
<script type="text/javascript">
        layui.use(['layer','form'],function(){
            form = layui.form;
            layer = layui.layer;
            $ = layui.jquery;
        });
        function save(){
            $.post('/admin.php/ScreenshotPictures/edits',$('form').serialize(),function(res){
                if(res.code>0){
                    layer.alert(res.msg,{icon:2});
                }else{
                    layer.msg(res.msg);
                    setTimeout(function(){parent.window.location.reload();},1000);
                }
            },'json');
        }
        
    </script>
</html>