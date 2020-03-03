<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <div class="layui-collapse" lay-accordion>
          {foreach $left_menu as $left_k=>$left_v}
              <div class="layui-colla-item">
                  <h2 class="layui-colla-title layui-bg-black" style="font-size: 15px;">{$left_v.title}</h2>
                  <div class="layui-colla-content {if $left_k==0}layui-show{/if}">
                      <ul class="layui-nav layui-nav-tree">
                          {foreach $left_v['lists'] as $lists_v}
                              <li class="layui-nav-item" >
                                  <a style="font-size: 10px;" href="/admin/Article/index/{$lists_v.id}">{$lists_v.title}</a>
                              </li>
                          {/foreach}
                      </ul>
                  </div>
              </div>
          {/foreach}
      </div>
  </div>
</div>