<!doctype html>
<html data-n-head-ssr="" data-n-head="">
	<head data-n-head="">
		<!-- 页面的元信息 -->
		{include file="common/meta"}
	</head>
	<body data-n-head="">
		<div data-server-rendered="true" id="__nuxt">
			<div id="__layout">
				<div data-v-272969c3="">
					<!--头部区域 -->
					{include file="common/header"}
					<div class="body" data-v-272969c3="">
						<div class="container" data-v-2382daef="">
							<div class="row">
								<div class="col-12 no-padding">
									<div class="row" data-v-2382daef="">
										<div class="col" data-v-2382daef="">
											{include file="common/flag"}
											<div style="margin: 10px;"></div>
											<!-- 主内容 -->
											{block name="main"}{/block}
											<!-- 小部件 -->
											{include file="common/widget"}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- 底部footer固定区域 -->
					{include file="common/footer"}
				</div>
			</div>
		</div>
	</body>
</html>					