{extend name="base" /}


{block name="main"}
<div class="course-list-cntr" data-v-2382daef="">
	<!-- 显示内容 -->
	<div class="row" data-v-2382daef="">
		<!-- right：变量名 right_v：变量关联的值-->
		{volist name="right" id="right_v"}
		{if $right_v.status=='开启'}
		<div class="col-sm-12 col-md-3" data-v-013f9116="" data-v-013f9116="" data-v-2382daef="">
			<div class="course-item-box" data-v-013f9116="">
				<a href="#" target="" class="link block" data-v-013f9116="">
					<div class="course-item" data-v-013f9116="">
						<div class="item-box-top relative" data-v-013f9116="">
							<div class="course-cover relative" data-v-013f9116=""><img src="{$right_v.url}" alt="{$right_v.title}"
								 class="cover-image" data-v-013f9116="">
								<!---->
							</div>
							<div class="status-info" data-v-013f9116="">
								<div class="inner overflow-auto" data-v-013f9116="">
									<!----> <span class="follow-status float-right inline-block text-center" data-v-013f9116="">
										</span></div>
							</div>
						</div>
						<div class="item-box-bottom relative" data-v-013f9116="">
							<div class="course-info-wrapper relative" data-v-013f9116="">
								<h6 class="course-name" data-v-013f9116="">
									{$right_v.title}
								</h6>
								<div class="course-description" data-v-013f9116="">
									{$right_v.description}
								</div>
							</div>
							<div class="course-meta-data" data-v-013f9116="">
								<div class="meta-data-inner" data-v-013f9116="">
									<span class="students-count" data-v-013f9116="">
										<i class="layui-icon">&#xe6c6;</i>  
										<span data-v-013f9116="" style="margin-right: 20px;">点赞量：{$right_v.heat}</span>
										<i class="layui-icon">&#xe609;</i>   
										<span data-v-013f9116="">发布时间：{$right_v.add_time|date='Y-m-d'}</span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		{/if}
		{/volist}
	</div>
	<!-- 分页 -->
	<div>{$list|raw}</div>
</div>
{/block}