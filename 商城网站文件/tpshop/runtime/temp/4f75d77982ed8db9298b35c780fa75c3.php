<?php /*a:1:{s:73:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\home\view\index\index.html";i:1552038757;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="renderer" content="webkit" />
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1" />
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
		<title>六星开源商城&nbsp;-&nbsp;六星教育</title>
		<meta name="keywords" content="六星教育" />
		<meta name="description" content="六星教育" />
		<link rel="shortcut  icon" type="image/x-icon" href="/tpshop/public__JS__/favicon.ico" media="screen" />
		<!--可共用-->
		<link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_common.css">
		<link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_color_style.css">
		<link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/iconfont.css">
		<link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_bottom.css">
		<link rel="stylesheet" href="/tpshop/public/static/css/layer.css" id="layuicss-skinlayercss">
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.js"></script>
		<script type="text/javascript">
			var shop_main = 'http://tp.23673.com'; //外置JS调用
			var app_main = 'http://tp.23673.com/wap'; //外置JS调用
			var upload = ""; //外置JS调用
			var ADMINMAIN = 'http://tp.23673.com/admin';
			var TEMP_IMG = "/tpshop/public__JS__";
			var temp = "/template/"; //外置JS调用
			$(function() {
				//一级菜单选中	
				$('#nav li>a').removeClass('current');
				var path_info = '';
				if (path_info == '') {
					$("#nav li>a[href^='http://tp.23673.com/index/index']").addClass('current');
				} else {
					$("#nav li>a[href^='http://tp.23673.com/']").addClass('current');
				}
			})

			window.onload = function() {
				$.footer();
			}
		</script>
		<script type="text/javascript" src="/tpshop/public/static/js/ns_cart.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/common.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/ns_components.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.fly.min.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/layer.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.method.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/nav.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.cookie.js"></script>
		<script src="/tpshop/public/static/js/ajax_file_upload.js" type="text/javascript"></script>
		<script src="/tpshop/public/static/js/file_upload.js" type="text/javascript"></script>
		<script>
			var PLATFORM_NAME = "";
			var ADMINIMG = "/public/admin/images"; //后台图片请求路径
			var ADMINMAIN = "http://tp.23673.com/admin"; //后台请求路径
			var UPLOAD = ""; //上传文件根目录
			var PAGESIZE = ""; //分页显示页数
			var ROOT = ""; //跟目录

			//上传文件路径
			var UPLOADGOODS = 'upload/goods/'; //存放商品图片
			var UPLOADGOODSSKU = 'upload/goods_sku/'; //存放商品SKU
			var UPLOADGOODSBRAND = 'upload/goods_brand/'; //存放商品品牌图
			var UPLOADGOODSGROUP = 'upload/goods_group/'; ////存放商品分组图片
			var UPLOADCOMMON = 'upload/common/'; //存放公共图片、网站logo、独立图片、没有任何关联的图片
			var UPLOADAVATOR = 'upload/avator/'; //存放用户头像
			var UPLOADPAY = 'upload/pay/'; //存放支付生成的二维码图片
			var UPLOADADV = 'upload/advertising/'; //存放广告位图片
			var UPLOADEXPRESS = 'upload/express/'; //存放物流图片
			var UPLOADCMS = 'UPLOAD_CMS'; //存放文章图片
		</script>
		<script src="/tpshop/public/static/js/load_task.js" type="text/javascript"></script>

		<!--继承base可重写-->




		<!-- 右侧购物车 -->

		<!-- 添加css、字体文件文件 -->
		<link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_default.css">
		<style>
			body{
	background: #F5F5F5;
}
</style>

	</head>
	<body>
		<!-- 头部广告 -->

		<!--
	创建人：Pack老师
	创建时间：2017年2月7日 12:02:25
	功能描述： 首页顶部广告图，可以关闭。此广告只在网站首页展示 
-->
		<div class="top-active">
			<div class="top-active-wrap">
			</div>
		</div>
		<script type="text/javascript">
			var ap_id = 1051;
			var data = platformAdvLoadNew(ap_id);
			if (data != null && data != '') {
				var width = data['ap_width'];
				var height = data['ap_height'];
				if (data['adv_list'][0]['adv_image'] != '') {
					$(".top-active").css("background-color", data['adv_list'][0]["background"]);
					$('.top-active-wrap').html('<a href="' + data['adv_list'][0]['adv_url'] +
						'" target="_blank"><img src="/tpshop/public/static/picture/a06d216579cf4e8fb5d53c9530afb59f.gif' + data['adv_list'][0][
							'adv_image'
						] + '" style="width:' + width + 'px;height:' + height +
						'px;"></a><a href="javascript:void(0);" title="关闭" class="top-active-close"></a>');
				} else {
					$(".top-active").css("background-color", "#0287E1");
					$('.top-active-wrap').html(
						'<a href="javascript:;" target="_blank"><img src="/tpshop/public/static/picture/style_blue_head_adv.png"></a><a href="javascript:void(0);" title="关闭" class="top-active-close"></a>'
					);
				}
			}
		</script>


		<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->

		<!--
	创建时间：2017年2月7日 12:08:45
	功能描述： 顶部， 
-->
		<div class="header-top">
			<div class="header-box">
				<font id="login-info" class="login-info"></font>
				<ul>
					<li><a class="menu-hd home" href="http://tp.23673.com" target="_top"><i></i>商城首页</a></li>
					<li class="menu-item">
						<div class="menu">
							<a class="menu-hd myinfo" href="http://tp.23673.com/member/index" target="_blank"><i></i> 个人中心 <b></b></a>
							<div id="menu-2" class="menu-bd">
								<span class="menu-bd-mask"></span>
								<div class="menu-bd-panel">
									<a href="http://tp.23673.com/member/orderlist" target="_blank">已买到的宝贝</a>
									<a href="http://tp.23673.com/member/addresslist" target="_blank">我的地址管理</a>
									<a href="http://tp.23673.com/member/goodscollectionlist" target="_blank">我收藏的宝贝</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu-item cartbox"><a class="menu-hd cart" href="<?php echo url('/cart/cartList'); ?>" target="_top"><i></i>&nbsp;购物车</a></li>
					<li><a class="menu-hd" target="_blank" href="http://tp.23673.com/admin">卖家中心</a></li>
					<li class="menu-item">
						<div class="menu">
							<a class="menu-hd we-chat" href="javascript:;" target="_top"> <i></i>
								关注商城 <b></b>
							</a>
							<div id="menu-5" class="menu-bd we-chat-qrcode">
								<span class="menu-bd-mask"></span> <a target="_top"> <img src="/tpshop/public/static/picture/1500630330_4.jpg" alt="官方微信"></a>
								<p class="font-14">关注官方微信</p>
							</div>
						</div>
					</li>
					<!-- 			<li class="menu-item"> -->
					<!-- 				<div class="menu"> -->
					<!-- 					<a href="http://tp.23673.com/helpcenter/index" class="menu-hd site-nav" target="_blank"> 商家支持 <b></b></a> -->
					<!-- 					<div id="menu-7" class="menu-bd site-nav-main"> -->
					<!-- 						<span class="menu-bd-mask"></span> -->
					<!-- 						<div class="menu-bd-panel"> -->
					<!-- 							<div class="site-nav-con"> -->
					<!-- 								<a href="http://tp.23673.com/helpcenter/index?id=2" target="_blank" title="常见问题">常见问题</a> -->
					<!-- 								<a href="http://tp.23673.com/helpcenter/index?id=7" target="_blank" title="网上支付">网上支付</a> -->
					<!-- 								<a href="http://tp.23673.com/helpcenter/index?id=5" target="_blank" title="验货与签收">验货与签收</a> -->
					<!-- 								<a href="http://tp.23673.com/helpcenter/index?id=9" target="_blank" title="退款说明">退款说明</a> -->
					<!-- 							</div> -->
					<!-- 						</div> -->
					<!-- 					</div> -->
					<!-- 				</div> -->
					<!-- 			</li> -->
					<li class="menu-item"><a href="http://tp.23673.com/wap/" class="menu-hd wap-nav"> <i></i>手机端</a></li>
					<li class="menu-item"><a href="http://tp.23673.com/helpcenter/index" class="menu-hd site-nav" target="_blank">帮助中心</a></li>
				</ul>
			</div>
		</div>

		<script type="text/javascript">
			$.ajax({
				type: "post",
				url: "<?php echo url('/home/getLoginInfo'); ?>",
				success: function(data) {
					var login_info_html = '';
					if (data != null && data != "") {
						// 			if(data["user_info"]["nick_name"]!= null && data["user_info"]["nick_name"] != ""){
						login_info_html = '<a class="sn-login color" href="http://tp.23673.com/member/index" target="_top">' + data[
								"user_info"]["nick_name"] +
							'</a><em>欢迎您回来！</em><a class="sn-register" href="javascript:logout();" target="_top">退出</a>';
						$('div.login-info').html(
							'<font id="login-info" class="login-info NS-USER-ALREADY-LOGIN"><em>' +
							'<a href="#" target="_blank" class="color NS-USER-NAME"></a></em>' +
							'<a href="javascript:logout();" data-method="post" class="logout bg-color">退出</a></font>'
						);
						// 			}
					} else {
						login_info_html =
							'<em>欢迎来到六星开源商城</em>' +
							'<a class="login color" href="<?php echo url('/home/login'); ?>" target="_top">请登录</a>' +
							'<a class="register" href="<?php echo url('/home/register'); ?>" target="_top">免费注册</a>';
						$('div.login-info').html(
							'<font id="login-info" class="login-info">' +
							'<a class="login color" href="http://tp.23673.com/login/index" target="_top">登录</a>' +
							'<a class="register bg-color" href="http://tp.23673.com/login/registerbox" target="_top">免费注册</a></font>'
						);
					}
					$('#login-info').html(login_info_html);
				}
			});

			//退出登录
			function logout() {
				$.ajax({
					url: "<?php echo url('/home/logOut'); ?>",
					type: "post",
					success: function(res) {
						if (res['code'] > 0) {
						  //window.location.href="<?php echo url('/home/login'); ?>";
							$.msg("退出成功！");
							window.location.reload();//刷新页面
						} else {
							if (res["message"] != null) {
								$.msg(res["message"]);
							}
						}
					}
				})
			}
		</script>


		<!-- 头部，菜单栏、搜索、导航栏 -->

		<!--
	创建人：Pack老师
	创建时间：2017年2月7日 12:09:42
	功能描述：顶部logo、搜索 
-->
		<script type="text/javascript">
			//显示搜索历史
			function SearRecord() {
				var arrSear = new Array();
				var strSear = $.cookie("searchRecord");
				var sear_html = '<span>最近搜索</span>';
				if (typeof(strSear) != 'undefined' && strSear != 'null') {
					var arrSear = JSON.parse(strSear);
					sear_html += '<a href="javascript:clearSearRecord();" class="clear-history"> <i></i>清空</a><br/>';
					for (var i = 0; i < arrSear.length; i++) {
						sear_html += '<a href="http://tp.23673.com/goods/goodslist?keyword=' + arrSear[i] +
							'" style="display:inline-block;">' + arrSear[i] + '</a>';
					}
				}
				$('#search_titles').html(sear_html);
			}
			//清除搜索历史
			function clearSearRecord() {
				clear = JSON.stringify(new Array());
				$.cookie("searchRecord", clear);
				SearRecord();
			}

			$(function() {
				SearRecord();
			});
		</script>
		<div class="as-shelter"></div>
		<div class="follow-box">
			<div class="follow-box-con">
				<a href="http://tp.23673.com" class="logo"><img src="/tpshop/public/static/picture/1497923663_4.jpg" /></a>
				<div class="search NS-SEARCH-BOX-TOP">
					<form class="search-form NS-SEARCH-BOX-FORM" method="get" onsubmit="return false">
						<div class="search-info">
							<div class="search-type-box">
								<ul class="search-type" style="height: 36px; overflow: hidden;">
									<li class="search-li-top curr" num="0">宝贝</li>
									<!-- 							<li class="search-li-top" num="1" >店铺</li> -->
								</ul>
								<!-- 						<i></i> -->
							</div>
							<div class="search-box">
								<div class="search-box-con">
									<input type="text" class="search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off"
									 data-searchwords="1231231231" placeholder="1231231231" value="">
								</div>
							</div>
							<input type="hidden" id="searchtypeTop" name="type" value="0" class="searchtype">
							<input type="button" id="btn_search_box_submit_top" value="搜索" class="button NS-SEARCH-BOX-SUBMIT-TOP">
						</div>
					</form>
				</div>
				<div class="login-info"></div>
			</div>
		</div>
		<div class="header">
			<div class="w1210">
				<div class="logo-info">
					<a href="http://tp.23673.com" class="logo"> <img src="/tpshop/public/static/picture/1497923663_4.jpg" /></a>
				</div>
				<div class="search NS-SEARCH-BOX">
					<form class="search-form NS-SEARCH-BOX-FORM" method="get" onsubmit="return false">
						<div class="search-info">
							<div class="search-type-box">
								<ul class="search-type">
									<li class="search-li curr" num="0">宝贝</li>
									<!-- 							<li class="search-li" num="1">店铺</li> -->
								</ul>
								<!-- 						<i></i> -->
							</div>
							<div class="search-box">
								<div class="search-box-con">
									<input type="text" class="keyword search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9"
									 autocomplete="off" data-searchwords="1231231231" placeholder="1231231231" value="" />
								</div>
							</div>
							<!-- <input type="hidden" id="searchtype" name="type" value="0" class="searchtype"> -->
							<input type="button" id="btn_search_box_submit" value="搜索" class="button btn_search_box_submit NS-SEARCH-BOX-SUBMIT">
						</div>
						<!-- -热门搜索热搜词显示 -->
						<div class="search-results hide NS-SEARCH-BOX-HELPER" style="display: none;">
							<ul class="history-results">
								<li class="title" id="search_titles" style="word-wrap:break-word "></li>

							</ul>
							<ul class="rec-results">
								<li class="title"><span>正在热搜中</span> <i class="close"></i></li>
								<li><a href="http://tp.23673.com/goods/goodslist?keyword=衣服，鞋子" title="衣服，鞋子">衣服，鞋子</a></li>
							</ul>
						</div>
					</form>
					<ul class="hot-query">
						<!-- 默认搜索词 -->
						<li class="first"><a href="javascript:void(0);"></a></li>
					</ul>
				</div>
				<!-- 搜索框右侧小广告 _start -->
				<div class="header-right">
					<a href="http://tp.23673.com/goods/cart" class="my-cart"><span class="ico"></span>购物车结算<span class="right_border"></span></a>
					<a href="http://tp.23673.com/member" class="my-mall"><span class="ico"></span>我的商城<span class="right_border"></span></a>
				</div>
				<!-- 搜索框右侧小广告 _end -->
			</div>
		</div>
		<!-- logo栏小广告  -->
		<!-- logo栏小广告 
			Page老师
			2017年2月10日10:28:30
		 -->
		<script type="text/javascript">
			//logo右侧小广告 
			var ap_id = 1052;
			var data = platformAdvLoad(ap_id);
			if (data != '') {
				$('.logo-info').append('<a href="' + data[0]['adv_url'] +
					'" class="logo-right"> <img src="/tpshop/public/static/picture/a06d216579cf4e8fb5d53c9530afb59f.gif' + data[0]['adv_image'] +
					'"> </a>');
			}
			//搜索框右侧小广告
			//$('.header-right').html('<a href="'+data[1]['adv_url']+'" target="_blank" title="">  <img src="/tpshop/public/static/picture/a06d216579cf4e8fb5d53c9530afb59f.gif'+data[1]['adv_image']+'"></a>');
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				// 搜索框提示显示
				$('.NS-SEARCH-BOX .NS-SEARCH-BOX-KEYWORD').focus(function() {
					$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").show();
				});
				// 搜索框提示隐藏
				$(".NS-SEARCH-BOX-HELPER .close").on('click', function() {
					$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").hide();
				});
				// 清除记录
				$(".NS-SEARCH-BOX-HELPER .clear").click(function() {
					var url = '/search/clear-record.html';
					$.post(
						url, {},
						function(result) {
							if (result.code == 0) {
								$(".history-results .active").empty();
							} else {}
						},
						'json');
				});
			});

			function search_box_remove(key) {
				var url = '/search/delete-record.html';
				$.post(url, {
					data: key
				}, function(result) {
					if (result.code == 0) {
						$("#" + key).css("display", "none");
					} else {

					}
				}, 'json');
			}
			$(document).on("click", function(e) {
				var target = $(e.target);
				if (target.closest(".NS-SEARCH-BOX").length == 0) {
					$('.NS-SEARCH-BOX-HELPER').hide();
				}
			})
		</script>
		<script type="text/javascript">
			//固定搜索
			$(document).ready(function() {
				$(".NS-SEARCH-BOX .NS-SEARCH-BOX-SUBMIT").click(function() {
					var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
					var keywords = keyword_obj.val();
					if ($.trim(keywords).length == 0 ||
						$.trim(keywords) == "请输入关键词") {
						keywords = keyword_obj.attr("data-searchwords");
					}

					$(keyword_obj).val(keywords);
					if (keywords == null) {
						keywords = "";
					}

					if ($.cookie("searchRecord") != undefined) {
						var arr = eval($.cookie("searchRecord"));
					} else {
						var arr = new Array();
					}
					if (arr.length > 0) {
						if ($.inArray(keywords, arr) < 0) {
							arr.push(keywords);
						}
					} else {
						arr.push(keywords);
					}
					$.cookie("searchRecord", JSON.stringify(arr));

					if ($(".search-li.curr").attr('num') == 0) {
						window.location.href = 'http://tp.23673.com/goods/goodslist?keyword=' + keywords;
					} else {
						window.location.href = 'http://tp.23673.com/shop/shopstreet?shopname=' + keywords;
					}
				});
			});
			//浮动搜索
			$(document).ready(function() {
				$(".NS-SEARCH-BOX-TOP .NS-SEARCH-BOX-SUBMIT-TOP").click(function() {
					var keyword_obj = $(this).parents(".NS-SEARCH-BOX-TOP").find(".NS-SEARCH-BOX-KEYWORD");
					var keywords = $(keyword_obj).val();
					if ($.trim(keywords).length == 0 ||
						$.trim(keywords) == "请输入关键词") {
						keywords = $(keyword_obj).attr("data-searchwords");
					}

					if ($.cookie("searchRecord") != undefined) {
						var arr = eval($.cookie("searchRecord"));
					} else {
						var arr = new Array();
					}
					if (arr.length > 0) {
						if ($.inArray(keywords, arr) < 0) {
							arr.push(keywords);
						}
					} else {
						arr.push(keywords);
					}
					$.cookie("searchRecord", JSON.stringify(arr));

					$(keyword_obj).val(keywords);
					if ($(".search-li-top.curr").attr('num') == 0) {
						window.location.href = 'http://tp.23673.com/goods/goodslist?keyword=' + keywords;
					} else {
						window.location.href = 'http://tp.23673.com/shop/shopstreet?shopname=' + keywords;
					}
				});
			});
		</script>


		<!--头部商品分类 start-->

		<!--
	创建人：Page老师
	创建时间：2017年2月7日 12:22:28
	功能描述：导航栏、菜单栏 、商品分类（与首页的样式不同，没有轮播图）
-->
		<div class="category-box">
			<div class="w1210">
				<div class="home-category fl">
					<a href="http://tp.23673.com/goods/category" class="menu-event" title="查看全部商品分类"><i></i>全部商品分类</a>
					<div class="category-layer" style="display: block;">
						<!-- 公共的菜单栏-->
						<div class="category-layer">
							<span class="category-layer-bg"></span>
							<?php foreach($list as $li): ?>
							<div class="list">
								<dl class="cat">
									<dt class="cat-name">
										<a href="http://tp.23673.com/goods/goodslist?category_id=311" target="_blank" title="<?php echo htmlentities($li['category_name']); ?>"><?php echo htmlentities($li['category_name']); ?></a>
									</dt>
									<i class="right-arrow"></i>
								</dl>
								<div class="categorys" style="display: none;">
									<div class="item-left fl">
										<div class="subitems">
											<?php foreach($li['child'] as $child): ?>
											<dl class="fore1">
												<dt style="width: 5em;">
													<a href="http://tp.23673.com/goods/goodslist?category_id=313" target="_blank" title="<?php echo htmlentities($child['category_name']); ?>">
														<em><?php echo htmlentities($child['category_name']); ?></em>
														<i></i>
													</a>
												</dt>
												<dd>
													<?php foreach($child['child'] as $child): ?>
													<a href="http://tp.23673.com/goods/goodslist?category_id=320" target="_blank" title="<?php echo htmlentities($child['category_name']); ?>"><?php echo htmlentities($child['category_name']); ?></a>
													<?php endforeach; ?>
												</dd>
											</dl>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<!-- 公共的菜单栏-->
				<div class="all-category fl" id="nav">
					<ul>
						<?php foreach($navigation as $nav): ?>
						<li class="fl">
							<a class="nav" target="<?php echo !empty($nav['is_blank']) ? '_blank' : ''; ?>" href="<?php echo htmlentities($nav['nav_url']); ?>" title="<?php echo htmlentities($nav['nav_title']); ?>"><?php echo htmlentities($nav['nav_title']); ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
					<div class="wrap-line">
						<span style="left: 15px;"></span>
					</div>
				</div>
			</div>
		</div>
		<!-- 滚动图片广告位 -->
		<div class="template-one">
			<div class="banner">
				<!--
	创建人：Pack老师
	创建时间：2017年2月7日 12:05:24
	功能描述： 首页导航栏、 菜单栏、、商品分类、轮播图（目前只有首页才拥有这个组件）
-->
				<ul id="fullScreenSlides" class="full-screen-slides"></ul>
				<ul class="full-screen-slides-pagination"></ul>
				<script type="text/javascript">
					//轮播图
					var ap_id = 1053;
					var data = platformAdvLoad(ap_id);
					var bannerhtml = '';
					var slideshtml = '';
					if (data != null && data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							if (data[i]['adv_image'] == '') {
								if (i == 0) {
									bannerhtml +=
										'<li style="display: list-item;background: url(../../static/images/style_blue_banner.png) no-repeat center;background-size: auto"><a href="javascript:;" target="_blank">&nbsp;</a> </li>';
								}

							} else {
								if (i == 0) {
									bannerhtml += '<li style="display: list-item;background: url(/tpshop/public/' + data[i]['adv_image'] +
										') no-repeat center;background-color:' + data[i]['background'] + ';background-size: auto"><a href="' + data[i]
										['adv_url'] + '" target="_blank" >&nbsp;</a> </li>';
								} else {
									bannerhtml += '<li style="display: none;background: url(/tpshop/public/' + data[i]['adv_image'] +
										') no-repeat center;background-color:' + data[i]['background'] + ';background-size: auto"><a href="' + data[i]
										['adv_url'] + '" target="_blank" >&nbsp;</a> </li>';
								}
							}
						}
						for (var i = 1; i <= data.length; i++) {
							if (i == 1) {
								slideshtml += '<li class="current"><a href="javascript:void(0);">' + i + '</a></li>';
							} else {
								slideshtml += '<li><a href="javascript:void(0);">' + i + '</a></li>';
							}
						}
					}
					$('#fullScreenSlides').html(bannerhtml);
					$('.full-screen-slides-pagination').html(slideshtml);
				</script>
				<!--滚动图-->
				<!--滚动图右侧公告及其小菜单
	2017年2月14日12:28:00
-->
				<script type="text/javascript">
					$.ajax({
						type: "post",
						url: "<?php echo url('/home/getLoginInfo'); ?>",
						success: function(data) {
							var login_info_html = '';
							if (data != null && data != "") {
								if (data["user_info"]["nick_name"] != null && data["user_info"]["nick_name"] != "") {
									if (data["user_info"]["user_headimg"] == "") {
										login_info_html +=
											'<div class="login_img"><img src="/tpshop/public/static/picture/temp_default_user_portrait_0_4.png" alt="默认头像" /></div>';
									} else {
										login_info_html +=
											'<div class="login_img">' +
                                            '<img src="/tpshop/public/static/picture/temp_default_user_portrait_0_4.png" />' +
											//'<img src="/tpshop/public/static/picture/temp_default_user_portrait_0_4.png' + data["user_info"]["user_headimg"] + '" alt="默认头像" />' +
											'</div>';
									}
									login_info_html +=
										'<div class="login-message" style="line-height:27px;">' +
											'<p class="message-title">Hi,我是' +
												'<a href="http://tp.23673.com/member/index" class="member_name" title="' +
												data["user_info"]["nick_name"] + '">' + data["user_info"]["nick_name"] +
												'</a>' +
											'</p>' +
											'<p class="message-operation"><a href="javascript:logout();" class="logout" >退出</a>' + '</p>' +
										'</div>';
								}
							} else {
								login_info_html += '<div class="login_img">';
								login_info_html += '<img src="/tpshop/public/static/picture/temp_default_user_portrait_0_4.png" alt="默认头像" />';
								login_info_html += '</div>';
								login_info_html += '<div class="login-message">';
								login_info_html += '<p class="message-title">Hi,欢迎登录六星开源商城</p>';
								login_info_html += '<p class="message-operation" style="padding: 5px 0;">';
								login_info_html += '<a href="javascript:;" class="login ajax-login">登录</a>';
								login_info_html += '<a href="http://tp.23673.com/login/registerbox" class="register">注册</a>';
								login_info_html += '</p></div>';
							}
							$('.right-login-message').html(login_info_html);
						}
					});
				</script>
				<div class="right-sidebar NS-TEMPLATE-NAV-CONTAINER">
					<!-- 个人信息 -->
					<div class="right-login-message">
						<div style="text-align:center;">
							<img src="/tpshop/public/static/picture/load_login.gif" />
							<p style="margin-top:10px;">加载中</p>
						</div>
					</div>

					<p class="right_title"><span>&nbsp;</span>公告</p>
					<div class="proclamation1">
						<ul class="mall-news">
							<?php foreach($article as $art): ?>
							<li><a target="_blank" href="<?php echo htmlentities($art['url']); ?>" title="><?php echo htmlentities($art['title']); ?>"><i></i><?php echo htmlentities($art['title']); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>

					<p class="right_title"><span>&nbsp;</span>管理</p>
					<div class="shortcut-menu">
						<a href="http://tp.23673.com/shop/applyindex" title="申请商家入驻；已提交申请，可查看当前审核状态。" class="store-join-btn" target="_blank">商家加盟</a>
						<a href="http://tp.23673.com/admin/login" target="_blank" class="store-join-help">
							登录商家管理中心</a>
					</div>
				</div>
				<!--滚动图右侧公告-->
			</div>
		</div>

		<!--头部商品分类 end-->

		<!-- 右侧固定购物车 -->

		<script type="text/javascript" src="/tpshop/public/static/js/shopping_cart_2.js"></script>
		<script src="/tpshop/public/static/js/ns_collections_2.js" type="text/javascript"></script>
		<!-- common.js 刷新了购物车数据 -->
		<script>
			//当浏览器窗口大小改变时，设置显示内容的高度  
			window.onresize = function(){
				$(".sidebar-cartbox").find('.cart-panel-content').height($(window).height() - 90);
				$(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height() - 40);
			}
			$(function() {
				$(".quick-links").css("top",($(window).height())/2);
				$.ajax({
					type:"post",
					url:"<?php echo url('/home/getLoginInfo'); ?>",
					success:function(data){
						if(data != null && data != ""){
							var img = data["user_info"]["user_headimg"];
							var name = data["user_info"]["nick_name"];
							$("#not_logged").css("display","none");
							$("#right_login_info").css("display","block");
							$("#right_login_info_name").text(name);
							if(img == '' ||img == null){
								$("#login_member_logo").attr('src',"/tpshop/public__JS__/temp_default_user_portrait_0.png");
							}else{
								img = '/'+img;
								$("#login_member_logo").attr('src',img);
							}
						}else{
							$("#not_logged").css("display","block");
							$("#right_login_info").css("display","none");
						}
					}
				})
				$('.ajax-login').click(function(){
					$('#mask-layer-login').show();
					$('#layui-layer').show();
				})
				$('.layui-layer-close.layui-layer-close1').click(function(){
					$('#mask-layer-login').hide();
					$('#layui-layer').hide();
				})
				refreshShopCart();
			});
</script>
		<input type="hidden" id="hidden_uid" value="293" />
		<div class="right-sidebar-con">
			<div class="right-sidebar-main">
				<div class="right-sidebar-panel">
					<div id="quick-links" class="quick-links">
						<ul>
							<li class="quick-area quick-login sidebar-user-trigger">
								<a href="javascript:void(0);" class="quick-links-a" title="个人中心"><i class="user"></i></a>
								<div class="sidebar-user quick-sidebar">
									<i class="arrow-right"></i>
									<div class="sidebar-user-info">
										<!-- 没有登录的情况 _start -->
										<div class="NS-USER-NOT-LOGIN">
											<a href="http://tp.23673.com/member/index">
												<div class="user-pic">
													<div class="user-pic-mask"></div>
													<img id="login_member_logo" src="/tpshop/public/static/picture/temp_default_user_portrait_0_4.png" />
												</div>
											</a>
											<br>
											<p id="not_logged">你好！请<a href="javascript:void(0);" class="quick-login-a color ajax-login">登录</a> | <a href="http://tp.23673.com/login/registerbox"
												 class="color">注册</a></p>
											<p id="right_login_info">你好！<span id="right_login_info_name"></span></p>
										</div>
										<!-- 没有登录的情况 _end -->
										<!-- 有登录的情况 _start -->
										<div class="js-user-already-login" style="display: none;">
											<div class="user-have-login">
												<div class="user-pic">
													<div class="user-pic-mask"></div>
													<img src="" class="NS-USER-PIC">
												</div>
												<div class="user-info">
													<p>
														用&nbsp;&nbsp;&nbsp;户： <span class="NS-USER-NAME"></span>
													</p>
												</div>
											</div>
											<p class="m-t-10">
												<span class="prev-login"> 上次登录时间：
													<span class="NS-USER-LAST-LOGIN"></span>
												</span>
												<a href="http://tp.23673.com/member/index" class="btn account-btn" target="_blank">个人中心</a>
												<a href="http://tp.23673.com/member/orderlist" class="btn order-btn" target="_blank">订单中心</a>
											</p>
										</div>
										<!-- 有登录的情况 _end -->
									</div>
								</div>
							</li>
							<li class="sidebar-tabs" data-ns-flag="shopping_cart">
								<!-- 购物车 -->
								<div class="cart-list quick-links-a sidebar-cartbox-trigger" title="购物车">
									<i class="cart"></i>
									<span class="cart_num js-cart-count">0</span>
								</div>
							</li>
							<li id="collectGoods" class="sidebar-tabs" data-ns-flag="collections_goods" title="商品收藏">
								<a href="javascript:;" class="mpbtn_collect quick-links-a">
									<i class="collection"></i>
								</a>
							</li>
							<li id="collectShops" class="sidebar-tabs" data-ns-flag="collections_shops" title="店铺收藏">
								<a href="javascript:;" class="mpbtn_collect quick-links-a">
									<i class="shopcollection"></i>
								</a>
							</li>
							<li class="quick-area">
								<a class="quick-links-a" href="http://wpa.qq.com/msgrd?v=3&uin=10202706&site=qq&menu=yes" title="联系客服" target="_blank">
									<i class="customer-service"></i>
								</a>
							</li>

							<li class="quick-area">
								<a class="quick-links-a" href="javascript:void(0);" title="商城二维码"><i class="qr-code"></i></a>
								<div class="sidebar-code quick-sidebar" style="display: none;">
									<i class="arrow-right"></i>
									<img src="/tpshop/public/static/picture/1500630330_4.jpg">
								</div>
							</li>
							<li class="returnTop" style="display: none;background: #0689e1;">
								<a href="javascript:void(0);" class="return_top quick-links-a">
									<i class="top"></i>
								</a>
								<div class="popup" style="left: -121px; visibility: hidden;">
									返回顶部 <i class="arrow-right"></i>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- 内容 -->


		<div class="floor"></div>

		<!-- 广告位 -->
		<!-- 	<div class="w1210 ad-groups ad-groups5">
	<div class="ad-groups5-layout">
		<div class="ad-groups5-list"></div>
		<script type="text/javascript">
			var ap_id = 1054;
			var data = platformAdvLoad(ap_id);
			var html = '';//0 1 2 3 4 5	,0:3,1:4,2:5
			if(data[0]['adv_image'] != ''){
				for (var i = 0; i < data.length; i++) {
					if(i == 0 || i == 3){
						//第一个
						html += '<div class="item">';
						if(data[i]['adv_url'] == ""){
	
							html += '<a class="ad-img" href="'+data[i]['adv_url']+'" >';
						}else{
	
							html += '<a class="ad-img" target="_blank" href="'+data[i]['adv_url']+'" >';
						}
							html += '<img class="lazy" src="/tpshop/public/static/picture/a06d216579cf4e8fb5d53c9530afb59f.gif'+data[i]['adv_image']+'" style="display: inline;height:100%;max-width:100%;">';
						html += '</a>';
						html +='</div>';
					}else if(i == 1 || i == 4){
						//第二个
						html += '<div class="item-children">';
							html += '<div class="item-float">';
							if(data[i]['adv_url'] == ""){
	
								html += '<a class="ad-img" href="'+data[i]['adv_url']+'" >';
							}else{
	
								html += '<a class="ad-img" target="_blank" href="'+data[i]['adv_url']+'" >';
							}
							html += '<img class="lazy" src="/tpshop/public/static/picture/a06d216579cf4e8fb5d53c9530afb59f.gif'+data[i]['adv_image']+'" style="display: inline;height:100%;max-width:100%;">';
							html += '</a></div>';
					}else if(i == 2 || i == 5){
						//第三个
						html += '<div class="item-float" style="margin-top:14px;">';
	
						if(data[i]['adv_url'] == ""){
	
							html += '<a class="ad-img" href="'+data[i]['adv_url']+'" >';
						}else{
	
							html += '<a class="ad-img" target="_blank" href="'+data[i]['adv_url']+'" >';
						}
						html += '<img class="lazy" src="/tpshop/public/static/picture/a06d216579cf4e8fb5d53c9530afb59f.gif'+data[i]['adv_image']+'" style="display: inline;height:100%;max-width:100%;">';
						html += '</a></div></div>';
					}
				}
				$('.ad-groups5-list').html(html);
			}else{
				$(".ad-groups5").hide();
			}
		</script>
	</div>
</div> -->


		<!--限时折扣-->
		<!--
	创建人：Pack老师
	创建时间：2017年2月7日 11:59:16
	功能描述：限时折扣
-->
		<!--限时折扣-->

		<!--店铺街 start-->
		<!--
	创建人：Page老师
	创建时间：2017年2月7日 12:22:28
	功能描述：首页、店铺街
-->
		<div class="w1210 store-wall2">
			<h2>
				<a class="store-wall-title" href="http://tp.23673.com/shop/shopstreet" title="店铺街" style="color: #000000">店铺街</a>
			</h2>
			<div class="store-con2">
				<div class="store-wall2-ad">
				</div>
				<script type="text/javascript">
					//店铺街小广告
					var ap_id = 1055;
					var data = platformAdvLoad(ap_id);
					$('.store-wall2-ad').html('<a href="' + data[0]['adv_url'] +
						'" target="_blank"><img class="lazy" src="/tpshop/public/static/picture/a06d216579cf4e8fb5d53c9530afb59f.gif' + data[0][
							'adv_image'
						] + '"></a>');
				</script>
				<ul class="store-wall2-list">
					<li>
						<img alt="官方直营店" src="/tpshop/public/static/picture/temp_14653489106946_2.jpg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/shopindex?shop_id=0" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="海尔加盟店" src="/tpshop/public/static/picture/1500622271.jpg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/shopindex?shop_id=1" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="乔丹旗舰店" src="/tpshop/public/static/picture/1500623512.jpg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/shopindex?shop_id=41" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="苏泊尔家电" src="/tpshop/public/static/picture/1500623721.jpg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/shopindex?shop_id=42" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
					<li>
						<img alt="虚位以待" src="/tpshop/public/static/picture/default_shop_phantom.svg" />
						<div class="black-cover" style="display: none;"></div>
						<div class="cover-content" style="display: none;">
							<a href="http://tp.23673.com/shop/applyindex" class="enter" target="_blank">点击进入</a></div>
					</li>
				</ul>
			</div>
		</div>

		<!--店铺街 end-->

		<!-- 推荐广告位开始 -->
		<div class="w1210 index-sale">
			<ul class="tabs-nav">
				<li class="tabs-selected">
					<i class="arrow"></i>
					<h3>热卖商品</h3>
				</li>
			</ul>
			<div class="tabs-panel sale-goods-list">
				<ul>
					<?php foreach($hotGoods as $goods): ?>
					<li>
						<dl>
							<dt class="goods-name">
								<a title="<?php echo htmlentities($goods['introduction']); ?>" href="<?php echo url('/goods/goodsinfo'); ?>?goodsId=<?php echo htmlentities($goods['id']); ?>" target="_blank"><?php echo htmlentities($goods['introduction']); ?></a>
							</dt>
							<dd class="goods-thumb">
								<a title="<?php echo htmlentities($goods['introduction']); ?>" href="<?php echo url('/goods/goodsinfo'); ?>?goodsId=<?php echo htmlentities($goods['id']); ?>" target="_blank">
									<img src="/tpshop/public<?php echo htmlentities($goods['pic_addr']); ?>" />
								</a>
							</dd>
							<dd class="goods-price">
								<em class="second-color" style="font-size:18px;">￥<?php echo htmlentities($goods['price']); ?></em>
							</dd>
						</dl>
					</li>
					<?php endforeach; ?>
					<!--<li>-->
						<!--<dl>-->
							<!--<dt class="goods-name">-->
								<!--<a title="M Queen独立制衣 优雅V领褶皱飘带系带修身长裙A字吊带连衣裙8915" href="http://tp.23673.com/goods/goodsinfo?goodsid=382" target="_blank">M-->
									<!--Queen独立制衣 优雅V领褶皱飘带系带修身长裙A字吊带连衣裙8915</a>-->
							<!--</dt>-->
							<!--<dd class="goods-thumb">-->
								<!--<a title="M Queen独立制衣 优雅V领褶皱飘带系带修身长裙A字吊带连衣裙8915" href="http://tp.23673.com/goods/goodsinfo?goodsid=382" target="_blank">-->
									<!--<img src="/tpshop/public/static/picture/1500600767632.jpg" />-->
								<!--</a>-->
							<!--</dd>-->
							<!--<dd class="goods-price">-->
								<!--<em class="second-color" style="font-size:18px;">￥369.00</em>-->
							<!--</dd>-->
						<!--</dl>-->
					<!--</li>-->
					<!--<li>-->
						<!--<dl>-->
							<!--<dt class="goods-name">-->
								<!--<a title="2016夏装新款夜店豹纹性感露背低胸女装超短裙抹胸紧身包臀连衣裙" href="http://tp.23673.com/goods/goodsinfo?goodsid=381" target="_blank">2016夏装新款夜店豹纹性感露背低胸女装超短裙抹胸紧身包臀连衣裙</a>-->
							<!--</dt>-->
							<!--<dd class="goods-thumb">-->
								<!--<a title="2016夏装新款夜店豹纹性感露背低胸女装超短裙抹胸紧身包臀连衣裙" href="http://tp.23673.com/goods/goodsinfo?goodsid=381" target="_blank">-->
									<!--<img src="/tpshop/public/static/picture/1500600673622.jpg" />-->
								<!--</a>-->
							<!--</dd>-->
							<!--<dd class="goods-price">-->
								<!--<em class="second-color" style="font-size:18px;">￥426.00</em>-->
							<!--</dd>-->
						<!--</dl>-->
					<!--</li>-->
					<!--<li>-->
						<!--<dl>-->
							<!--<dt class="goods-name">-->
								<!--<a title="单鞋细高跟防水台鱼嘴女凉鞋2017春夏季新款复古刺绣高跟鞋40-42" href="http://tp.23673.com/goods/goodsinfo?goodsid=383" target="_blank">单鞋细高跟防水台鱼嘴女凉鞋2017春夏季新款复古刺绣高跟鞋40-42</a>-->
							<!--</dt>-->
							<!--<dd class="goods-thumb">-->
								<!--<a title="单鞋细高跟防水台鱼嘴女凉鞋2017春夏季新款复古刺绣高跟鞋40-42" href="http://tp.23673.com/goods/goodsinfo?goodsid=383" target="_blank">-->
									<!--<img src="/tpshop/public/static/picture/1500601152702.jpg" />-->
								<!--</a>-->
							<!--</dd>-->
							<!--<dd class="goods-price">-->
								<!--<em class="second-color" style="font-size:18px;">￥345.00</em>-->
							<!--</dd>-->
						<!--</dl>-->
					<!--</li>-->
					<!--<li>-->
						<!--<dl>-->
							<!--<dt class="goods-name">-->
								<!--<a title="【葡萄妈】studiolee 小方跟方扣单鞋4.5cm 附赠贴底" href="http://tp.23673.com/goods/goodsinfo?goodsid=384" target="_blank">【葡萄妈】studiolee-->
									<!--小方跟方扣单鞋4.5cm 附赠贴底</a>-->
							<!--</dt>-->
							<!--<dd class="goods-thumb">-->
								<!--<a title="【葡萄妈】studiolee 小方跟方扣单鞋4.5cm 附赠贴底" href="http://tp.23673.com/goods/goodsinfo?goodsid=384" target="_blank">-->
									<!--<img src="/tpshop/public/static/picture/1500601296742.jpg" />-->
								<!--</a>-->
							<!--</dd>-->
							<!--<dd class="goods-price">-->
								<!--<em class="second-color" style="font-size:18px;">￥269.00</em>-->
							<!--</dd>-->
						<!--</dl>-->
					<!--</li>-->
				</ul>
			</div>
		</div>
		</div>
		<div class="w1210 ad-groups ad-groups5">
			<div class="ad-groups5-layout">
				<div class="ad-groups5-list"></div>
				<script type="text/javascript">
					var ap_id = 1054;
					var data = platformAdvLoad(ap_id);
					var listhtml = '';
					if (data != '') {
						if (data[0]['adv_image'] == "") {
							$(".ad-groups5").hide();
						} else {

							for (var i = 0; i < data.length; i++) {
								if (i == 5) {
									break;
								}
								listhtml += '<div class="item">';
								if (data[i]['adv_url'] == "") {
									listhtml += '<a class="ad-img" href="' + data[i]['adv_url'] + '" >';
								} else {
									listhtml += '<a class="ad-img" target="_blank" href="' + data[i]['adv_url'] + '" >';
								}
								listhtml += '<img class="lazy" src="/tpshop/public/static/picture/a06d216579cf4e8fb5d53c9530afb59f.gif' + data[i][
									'adv_image'
								] + '" style="display: inline;height:140px;width:240px;max-width:100%;">';
								listhtml += '</a></div>';
							}
							$('.ad-groups5-list').html(listhtml);
						}
					}
				</script>
			</div>
		</div>
		<!-- 推荐广告位结束-->

		<!--推荐商品楼层分类 start-->
		<!--
	创建人：Page老师
	创建时间：2017年2月7日 12:25:20
	功能描述：首页，楼层
-->
		<!-- 内容 -->
		<div class="w1210 floor-list">
			<div class="floor" color="#00ffff">
				<div class="floor-layout">
					<div class="floor-con floor-con5">
						<div class="floor-title">
							<!--推荐名称-->
							<span class="vertical-bar" style="background: #00ffff;"></span>
							<h2>
								<a href=javascript:;" target="_blank">食品生鲜</a>
								<input type="hidden" value="生鲜" class="NS-SHORT-NAME" />
							</h2>
							<!--推荐类型-->
							<ul class="floor-tabs-nav">
								<li class="floor-tabs-selected">
									<h3 style="color: #00ffff;">新品推荐</h3>
								</li>
								<li>
									<h3>进口食品</h3>
								</li>
								<li>
									<h3>进口水果</h3>
								</li>
								<li>
									<h3>爱吃日</h3>
								</li>
							</ul>
						</div>
						<hr style="border:0;border-bottom:1px solid #F5F5F5;" />
						<div class="floor-content floor-content5">
							<div class="floor-left">
								<div class="floor-ad">
									<a href="#" target="_blank" class="floor-ad-img">
										<img class="lazy" src="/tpshop/public/static/picture/1497069606.png" width="210">
									</a>
								</div>
								<ul class="floor-words">
									<!-- 						分类推荐 -->
									<li><a href="http://tp.23673.com/goods/goodslist?category_id=311" target="_blank" title="女装/男装/内衣">女装/男装/内衣</a></li>
									<li><a href="http://tp.23673.com/goods/goodslist?category_id=312" target="_blank" title="鞋靴/箱包/配件">鞋靴/箱包/配件</a></li>
								</ul>
							</div>
							<div class="floor-middle">
								<div class="floor-banner">
									<div class="hiSlider-wrap">
										<ul class="hiSlider NS-FLOOR-HISLIDER">
											<!-- 幻灯片循环 -->

											<li class="hiSlider-item">
												<a href="#" target="_blank">
													<img class="lazy" src="/tpshop/public/static/picture/1497069144.png" width="390">
												</a>
											</li>

											<li class="hiSlider-item">
												<a href="#" target="_blank">
													<img class="lazy" src="/tpshop/public/static/picture/1497069159.png" width="390">
												</a>
											</li>

											<li class="hiSlider-item">
												<a href="#" target="_blank">
													<img class="lazy" src="/tpshop/public/static/picture/1497069175.png" width="390">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="floor-right">
								<!-- 第一屏广告 _start -->
								<div class="floor-tabs-panel">
									<div class="floor-tabs-ad-up">
										<a href="#" target="_blank" class="floor-tabs-ad-img first">
											<img class="lazy" src="/tpshop/public/static/picture/1497070074.png">
										</a>
										<a href="#" target="_blank" class="floor-tabs-ad-img first">
											<img class="lazy" src="/tpshop/public/static/picture/1497070086.png">
										</a>
										<a href="#" target="_blank" class="floor-tabs-ad-img first">
											<img class="lazy" src="/tpshop/public/static/picture/1497070098.png">
										</a>
									</div>
									<div class="floor-tabs-ad-down">
										<a href="#" target="_blank" class="floor-tabs-ad-img first">
											<img class="lazy" src="/tpshop/public/static/picture/1497070109.png">
										</a>
										<a href="#" target="_blank" class="floor-tabs-ad-img first">
											<img class="lazy" src="/tpshop/public/static/picture/1497070120.png">
										</a>
									</div>
								</div>
								<!-- 第一屏广告 _end -->
								<div class="floor-tabs-panel floor-tabs-hide">
								</div>

								<div class="floor-tabs-panel floor-tabs-hide">
									<div class="item">
										<div class="wrap">
											<a target="_blank" href="http://tp.23673.com/goods/goodsinfo?goodsid=389" title="小熊养生壶全自动加厚玻璃 多功能煮花茶壶正品官方煮茶器 养生杯">
												<img class="lazy" src="/tpshop/public/static/picture/15006017871011.jpg">
											</a>
											<p class="title">
												<a target="_blank" href="http://tp.23673.com/goods/goodsinfo?goodsid=389" title="小熊养生壶全自动加厚玻璃 多功能煮花茶壶正品官方煮茶器 养生杯">小熊养生壶全自动加厚玻璃
													多功能煮花茶壶正品官方煮茶器 养生杯</a>
											</p>
											<p class="price">
												<span class="second-color">￥288.00</span>
											</p>
											<!-- <a class="add-cart" title="加入购物车"></a> -->
										</div>
									</div>
									<div class="item">
										<div class="wrap">
											<a target="_blank" href="http://tp.23673.com/goods/goodsinfo?goodsid=390" title="飞利浦空气炸锅HD9233家用智能无油多功能电炸锅大容量HD9627正品">
												<img class="lazy" src="/tpshop/public/static/picture/15006018501051.jpg">
											</a>
											<p class="title">
												<a target="_blank" href="http://tp.23673.com/goods/goodsinfo?goodsid=390" title="飞利浦空气炸锅HD9233家用智能无油多功能电炸锅大容量HD9627正品">飞利浦空气炸锅HD9233家用智能无油多功能电炸锅大容量HD9627正品</a>
											</p>
											<p class="price">
												<span class="second-color">￥266.00</span>
											</p>
											<!-- <a class="add-cart" title="加入购物车"></a> -->
										</div>
									</div>
									<div class="item">
										<div class="wrap">
											<a target="_blank" href="http://tp.23673.com/goods/goodsinfo?goodsid=391" title="德国brita碧然德即热净水吧家用厨房自来水过滤壶电热直饮净水器">
												<img class="lazy" src="/tpshop/public/static/picture/15006019251101.jpg">
											</a>
											<p class="title">
												<a target="_blank" href="http://tp.23673.com/goods/goodsinfo?goodsid=391" title="德国brita碧然德即热净水吧家用厨房自来水过滤壶电热直饮净水器">德国brita碧然德即热净水吧家用厨房自来水过滤壶电热直饮净水器</a>
											</p>
											<p class="price">
												<span class="second-color">￥199.00</span>
											</p>
											<!-- <a class="add-cart" title="加入购物车"></a> -->
										</div>
									</div>
								</div>

								<div class="floor-tabs-panel floor-tabs-hide">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 楼层 _end -->
		<div class="w1210">
			<div class="floors-brand">
				<div class="floor-layout">
					<div class="floor-con">
						<div class="floor-brand">
							<div class="tabs-brand">
								<div class="brand">
									<div class="brand-con">
										<ul class="brand-list" style="position: absolute;height: 40px;top:0;left:0;">
											<li class="fore1">
												<a href="http://tp.23673.com/goods/goodslist?brand_id=10" target="_blank" title="乐视">
													<img class="lazy" src="/tpshop/public/static/picture/1499755184.png" />
												</a>
											</li>
										</ul>
										<div class="brand-btn">
											<a class="brand-left" href="javascript:void(0)">&lt;</a>
											<a class="brand-right" href="javascript:void(0)">&gt;</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--推荐商品楼层分类 end -->

		<!-- #tpl_region_end -->

		<!-- 左侧楼层定位 _start-->
		<div class="elevator" style="visibility: hidden;">
			<div class="elevator-floor" style="transform: scale(1.2); opacity: 0;"></div>
		</div>
		<!--友情链接-->
		<!--
	创建时间：2017年2月7日 12:24:13
	功能描述：友情链接
-->
		<!--友情链接-->
		<div class="links-box w1210">
			<div class="links-title">
				<span>友情链接</span>
			</div>
			<div class="links-content"></div>
			<script type="text/javascript">
				$.ajax({
					type: "post",
					url: "http://tp.23673.com/components/linklist",
					async: false,
					dataType: 'json',
					success: function(data) {
						var linkhtml = '';
						if (data.length > 0) {
							for (var i = 0; i < data.length; i++) {
								if (data[i]['is_blank'] == 1) {
									linkhtml += '<a href="' + data[i]['link_url'] + '" target="_blank" title="' + data[i]['link_title'] + '">' +
										data[i]['link_title'] + '</a>';
								} else {
									linkhtml += '<a href="' + data[i]['link_url'] + '" target="_self" title="' + data[i]['link_title'] + '">' +
										data[i]['link_title'] + '</a>';
								}
							}
							$('.links-content').html(linkhtml);
						} else {
							$(".links-box").hide();
						}
					}
				});
			</script>
		</div>


		<!-- 底部 -->

		<!--
	创建时间：2017年2月7日 12:11:41
	功能描述： 底部，联系我们、电话 
-->
		<div class="footer">
			<div class="dsc-service">
				<div class="w w1200 relative">
					<ul class="service-list">
						<li>
							<div class="service-tit service-zheng">
								<img src="/tpshop/public/static/picture/icon-zheng_4.png">
							</div>
							<div class="service-txt">正品保障</div>
						</li>
						<li>
							<div class="service-tit service-qi">
								<img src="/tpshop/public/static/picture/icon-qi_4.png"></i>
							</div>
							<div class="service-txt">七天包退</div>
						</li>
						<li>
							<div class="service-tit service-hao">
								<img src="/tpshop/public/static/picture/icon-grin_4.png">
							</div>
							<div class="service-txt">好评如潮</div>
						</li>
						<li>
							<div class="service-tit service-shan">
								<img src="/tpshop/public/static/picture/icon-light_4.png"></i>
							</div>
							<div class="service-txt">闪电发货</div>
						</li>
						<li class="last">
							<div class="service-tit service-quan">
								<img src="/tpshop/public/static/picture/icon-tronphy_4.png">
							</div>
							<div class="service-txt">权威荣誉</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="dsc-help">
				<div class="w w1200">
					<div class="help-list">
						<div class="help-item">
							<h3>新手上路</h3>
							<ul>
								<li><a href="http://tp.23673.com/helpcenter/index?id=18" title="售后流程" target="_blank">有问题请找我</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=8" title="售后流程" target="_blank">配送支付智能查询</a></li>
							</ul>
						</div>
						<div class="help-item">
							<h3>配送与支付</h3>
							<ul>
								<li><a href="http://tp.23673.com/helpcenter/index?id=7" title="售后流程" target="_blank">货到付款区域</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=2" title="售后流程" target="_blank">支付方式说明</a></li>
							</ul>
						</div>
						<div class="help-item">
							<h3>会员中心</h3>
							<ul>
								<li><a href="http://tp.23673.com/helpcenter/index?id=3" title="售后流程" target="_blank">售后流程</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=5" title="售后流程" target="_blank">资金管理</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=6" title="售后流程" target="_blank">我的收藏</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=14" title="售后流程" target="_blank">我的订单</a></li>
							</ul>
						</div>
						<div class="help-item">
							<h3>服务保证</h3>
							<ul>
								<li><a href="http://tp.23673.com/helpcenter/index?id=9" title="售后流程" target="_blank">退换货原则</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=10" title="售后流程" target="_blank">售后服务保证</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=11" title="售后流程" target="_blank">产品质量保证</a></li>
							</ul>
						</div>
						<div class="help-item">
							<h3>联系我们</h3>
							<ul>
								<li><a href="http://tp.23673.com/helpcenter/index?id=12" title="售后流程" target="_blank">网站故障报告</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=15" title="售后流程" target="_blank">选机咨询</a></li>
								<li><a href="http://tp.23673.com/helpcenter/index?id=16" title="售后流程" target="_blank">投诉与建议</a></li>
							</ul>
						</div>
					</div>
					<div class="help-cover">
						<div class="help-ctn">
							<div class="help-ctn-mt">
								<span>服务热线</span> <strong>0731-85573019</strong>
							</div>
							<div class="help-ctn-mb">

								<a id="IM" im_type="dsc" onclick="openWin(this)" href="http://wpa.qq.com/msgrd?v=3&uin=10202706&site=qq&menu=yes"
								 target="_blank" class="btn-ctn"><img src="/tpshop/public/static/picture/icon-csu_4.png" style="vertical-align: middle;">&nbsp;&nbsp;咨询客服</a>
							</div>
						</div>
						<div class="help-scan">
							<div class="code">
								<img src="/tpshop/public/static/picture/1500630330_4.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--
	创建时间：2017年2月7日 12:13:09
	功能描述： 底部、公司信息 
-->
		<div class="dsc-copyright">
			<div class="w w1200">
				<p class="copyright_info">
					<a href="#">Copyright © 2015-2025 六星开源商城&nbsp;版权所有 保留一切权利</a>
				</p>
				<b> <a href="javascript:;" target="_blank" class="copyright-logo">六星</a>&nbsp;&nbsp;
					<a href="http://www.sixstaredu.com" target="_blank" class="copyright-logo">湖南六星教育网络科技有限公司&nbsp;&nbsp;</a> <span>提供技术支持&nbsp;0731-8557-3019</span>
				</b>
			</div>
		</div>



		<!-- 添加js文件 -->
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.cookie_4.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/layer_4.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.countdown.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/bubbleup.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/ns_index.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.lazyload.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/tabs.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.hislider.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/index_tab.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/tabs.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.fly.min_4.js"></script>
		<script type="text/javascript">
			$().ready(function() {
				$.cartbox.count = "0";
				// 缓载图片
				$("img").lazyload({
					skip_invisible: false,
					effect: 'fadeIn',
					failure_limit: 20,
					threshold: 200
				});
			});
		</script>



		<script>
			(function() {
				var bp = document.createElement('script');
				var curProtocol = window.location.protocol.split(':')[0];
				if (curProtocol === 'https') {
					bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
				} else {
					bp.src = 'http://push.zhanzhang.baidu.com/push.js';
				}
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(bp, s);
			})();

            //获取用户购物车商品的数量
            $.ajax({
                url:"http://localhost/tpshop/public/index.php/home/isLogin",
                type:"get",
                dataType:"json",
                success:function(data){
                    if (data.code > 0) {
                        $.ajax({
                            url:"http://localhost/tpshop/public/index.php/cart/getNum",
                            type:"get",
                            dataType:"json",
                            success:function(data){
                                $(".js-cart-count").html(data);
                            }
                        });
                    }
                }
            });
		</script>
	</body>
</html>
