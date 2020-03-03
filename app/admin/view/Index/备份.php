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
                    <!--   <td>
                          {if $right_v.discount!=0}
                              {$right_v.price*($right_v.discount/10)}
                          {else/}
                              {$right_v.price}
                          {/if}
                      </td> -->
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
      <div class="layui-box layui-laypage layui-laypage-default">
        <a href="/admin.php/Index/index?p={$p-1}" class="layui-laypage-prev {if $p<=1}layui-disabled{/if}">上一页</a>
        {for start="0" end="$count"}
            {if $p == $i+1}
                <span class="layui-laypage-curr">
                    <em class="layui-laypage-em"></em>
                    <em>{$i+1}</em>
                </span>
            {else/}
                <a href="/admin.php/Index/index?p={$i+1}">{$i+1}</a>
            {/if}
        {/for}
        <a href="/admin.php/Index/index?p={$p+1}" class="layui-laypage-next {if $p>=$count}layui-disabled{/if}">下一页</a>
    </div>
  </div>
</div>