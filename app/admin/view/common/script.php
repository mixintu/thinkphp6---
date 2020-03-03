<script src="__JS__/layui.js" charset="utf-8"></script>
<script src="__JS__/layui.all.js" charset="utf-8"></script>

<script type="text/javascript">
        layui.use(['layer','form'],function(){
        form = layui.form;
        layer = layui.layer;
        $ = layui.jquery;
        });
        layui.use(['element','layer','laypage'], function(){
            var element = layui.element;
            var laypage = layui.laypage;
            
            $ = layui.jquery;
            layer = layui.layer;
            resetMenuHeight();

        });
        // 重新设置菜单容器高度
        function resetMenuHeight(){
            var height = document.documentElement.clientHeight - 50;
            $('#menu').height(height);
        }
</script>