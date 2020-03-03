{extend name="base" /}

{block name="main"}

<!-- 主体内容 -->
<div class="layui-body">
  <div style="padding: 30px;">
    <div class="layui-btn-group demoTable" style="padding-top: 20px;">
      <button class="layui-btn" data-type="getCheckData">A</button>
      <button class="layui-btn layui-btn-normal" data-type="getCheckLength">B</button>
      <button class="layui-btn layui-btn-warm" data-type="isAll">C</button>
      <span style="right:30px;position:absolute;">
          <button class="layui-btn layui-btn-sm" onclick="add()"><i class="layui-icon layui-icon-add-1"></i>添加</button>
      </span>
    </div>

    <table class="layui-table">
          <thead>
              <tr>
                  <th>标题</th>
                  <th>链接</th>
                  <th>相册集</th>
                  <th>描述</th>
                  <th>状态</th>
                  <th>添加时间</th>
                  <th>操作</th>
              </tr>

          </thead>

          <tbody>
              <!-- right：变量名 right_v：变量关联的值-->
              {volist name="right" id="right_v"}
                  <tr>
                      <td>{$right_v.title}</td>
                      <td>{$right_v.url}</td>
                      <td>{$right_v.album_id}</td>
                  
                      <td>{$right_v.description}</td>
                      <td>{$right_v.status}</td>
                      <td>{$right_v.add_time|date='Y-m-d'}</td>
                      <td>
                          <button class="layui-btn layui-btn-xs" onclick="edit({$right_v.id})">
                              <i class="layui-icon layui-icon-edit"></i>编辑
                          </button>
                          <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="del({$right_v.id})">
                              <i class="layui-icon layui-icon-delete"></i>删除
                          </button>
                      </td>
                  </tr>
              {/volist}
          </tbody>
      </table>
      <!-- 分页 -->
      <div>{$list|raw}</div>
  </div>
</div>
<script type="text/javascript">
        // 重新设置菜单容器高度
        function resetMenuHeight(){
            var height = document.documentElement.clientHeight - 50;
            $('#menu').height(height);
        }
        // 添加按钮
        function add(){
            layer.open({
                type: 2,
                title: '添加',
                shade: 0.3,
                area: ['480px', '440px'],
                content: '/admin.php/AnimePictures/add'
            });
        }
        // 编辑按钮
        function edit(id){
            layer.open({
                type: 2,
                title: '编辑',
                shade: 0.3,
                area: ['480px', '440px'],
                content: '/admin.php/AnimePictures/edit?id='+id
            });
        }
        // 删除按钮
        function del(id){
            layer.confirm('确定要删除吗？', {
                icon:3,
                btn: ['确定','取消']
            }, function(){
                $.post('/admin.php/AnimePictures/del',{'id':id},function(res){
                    if(res.code>0){
                        layer.alert(res.msg,{icon:2});
                    }else{
                        layer.msg(res.msg);
                        setTimeout(function(){window.location.reload();},1000);
                    }
                },'json');
            });
        }
</script>
{/block}