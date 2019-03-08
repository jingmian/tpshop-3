<?php /*a:1:{s:78:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\home\view\order\order_list.html";i:1551702619;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <title>六星开源商城&nbsp;-&nbsp;六星教育</title>
    <meta name="keywords" content="六星教育"/>
    <meta name="description" content="六星教育"/>
    <link rel="shortcut  icon" type="image/x-icon" href="/tpshop/public__JS__/favicon.ico" media="screen"/>
    <!--可共用-->
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_common.css">
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_color_style.css">
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/iconfont.css">
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_bottom.css">
    <link rel="stylesheet" href="/tpshop/public/static/css/layer.css" id="layuicss-skinlayercss">
    <script type="text/javascript" src="/tpshop/public/static/js/jquery.js"></script>
    <script type="text/javascript">
        var shop_main = 'http://www.ttshop.com';//外置JS调用
        var app_main = 'http://www.ttshop.com/wap';//外置JS调用
        var upload = "";//外置JS调用
        var ADMINMAIN = 'http://www.ttshop.com/admin';
        var TEMP_IMG = "/tpshop/public__JS__";
        var temp = "/template/";//外置JS调用
        $(function () {
            //一级菜单选中	
            $('#nav li>a').removeClass('current');
            var path_info = 'member/paymentorder';
            if (path_info == '') {
                $("#nav li>a[href^='http://www.ttshop.com/index/index']").addClass('current');
            } else {
                $("#nav li>a[href^='http://www.ttshop.com/member/paymentorder']").addClass('current');
            }
        })

        window.onload = function () {
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
        /**
         * 六星开源商城系统 - 团队十年电商经验汇集巨献!
         * ========================================================= Copy right
         * 2015-2025 湖南六星教育网络科技有限公司, 保留所有权利。
         * ---------------------------------------------- 官方网址:
         * http://www.sixstaredu.com 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
         * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
         * =========================================================
         *
         * @author : 小学生Pack老师
         * @date : 2016年12月16日 16:17:13
         * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
         */
        var PLATFORM_NAME = "";
        var ADMINIMG = "/public/admin/images";//后台图片请求路径
        var ADMINMAIN = "http://www.ttshop.com/admin";//后台请求路径
        var UPLOAD = "";//上传文件根目录
        var PAGESIZE = "";//分页显示页数
        var ROOT = "";//跟目录

        //上传文件路径
        var UPLOADGOODS = 'upload/goods/';//存放商品图片
        var UPLOADGOODSSKU = 'upload/goods_sku/';//存放商品SKU
        var UPLOADGOODSBRAND = 'upload/goods_brand/';//存放商品品牌图
        var UPLOADGOODSGROUP = 'upload/goods_group/';////存放商品分组图片
        var UPLOADGOODSCATEGORY = 'upload/goods_category/';////存放商品分类图片
        var UPLOADCOMMON = 'upload/common/';//存放公共图片、网站logo、独立图片、没有任何关联的图片
        var UPLOADAVATOR = 'upload/avator/';//存放用户头像
        var UPLOADPAY = 'upload/pay/';//存放支付生成的二维码图片
        var UPLOADADV = 'upload/advertising/';//存放广告位图片
        var UPLOADEXPRESS = 'upload/express/';//存放物流图片
        var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
    </script>
    <script src="/tpshop/public/static/js/load_task.js" type="text/javascript"></script>
    <!--继承base可重写-->
    <!-- 右侧购物车 -->
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/payment_orders.css"/>
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/payment_orders_common.css"/>
    <style>
        .result-box .yue {
            margin-top: 20px;
            margin-left: 20px;
            position: relative;
        }

        .result-box .yue input[type=text] {
            width: 100px;
            height: 28px;
            border: 1px solid #ddd;
            margin-left: 10px;
            padding: 0 10px;
            display: none;
        }
    </style>
</head>
<body>
<!-- 头部广告 -->
<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->
<!--
创建时间：2017年2月7日 12:08:45
功能描述： 顶部， 
-->
<div class="header-top">
    <div class="header-box">
        <font id="login-info" class="login-info"></font>
        <ul>
            <li><a class="menu-hd home" href="http://www.ttshop.com" target="_top"><i></i>商城首页</a></li>
            <li class="menu-item">
                <div class="menu">
                    <a class="menu-hd myinfo" href="http://www.ttshop.com/member/index" target="_blank"><i></i> 个人中心
                        <b></b></a>
                    <div id="menu-2" class="menu-bd">
                        <span class="menu-bd-mask"></span>
                        <div class="menu-bd-panel">
                            <a href="http://www.ttshop.com/member/orderlist" target="_blank">已买到的宝贝</a>
                            <a href="http://www.ttshop.com/member/addresslist" target="_blank">我的地址管理</a>
                            <a href="http://www.ttshop.com/member/goodscollectionlist" target="_blank">我收藏的宝贝</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu-item cartbox"><a class="menu-hd cart" href="http://www.ttshop.com/goods/cart" target="_top"><i></i>&nbsp;购物车</a>
            </li>
            <li><a class="menu-hd" target="_blank" href="http://www.ttshop.com/admin">卖家中心</a></li>
            <li class="menu-item">
                <div class="menu">
                    <a class="menu-hd we-chat"
                       href="javascript:;" target="_top"> <i></i>
                        关注商城 <b></b>
                    </a>
                    <div id="menu-5" class="menu-bd we-chat-qrcode">
                        <span class="menu-bd-mask"></span> <a target="_top"> <img src="/tpshop/public/static/picture/1500630330.jpg"
                                                                                  alt="官方微信"></a>
                        <p class="font-14">关注官方微信</p>
                    </div>
                </div>
            </li>
            <li class="menu-item"><a href="http://www.ttshop.com/wap/" class="menu-hd wap-nav"> <i></i>手机端</a></li>
            <li class="menu-item"><a href="http://www.ttshop.com/helpcenter/index" class="menu-hd site-nav"
                                     target="_blank">帮助中心</a></li>
        </ul>
    </div>
</div>

<!-- 获取登陆信息和退出登陆 -->
<script type="text/javascript">
    $.ajax({
        type: "post",
        url: "<?php echo url('/home/getlogininfo'); ?>",
        success: function (data) {
            var login_info_html = '';
            if (data != null && data != "") {
// 			if(data["user_info"]["nick_name"]!= null && data["user_info"]["nick_name"] != ""){
                login_info_html = '<a class="sn-login color" href="<?php echo url('/home/logOut'); ?>" target="_top">' + data["user_info"]["nick_name"] + '</a>' +
                    '<em>欢迎您回来！</em>' +
                    '<a class="sn-register" href="javascript:logout();" target="_top">退出</a>';
                $('div.login-info').html('<font id="login-info" class="login-info NS-USER-ALREADY-LOGIN"><em>' +
                    '<a href="#" target="_blank" class="color NS-USER-NAME"></a></em>' +
                    '<a href="javascript:logout();" data-method="post" class="logout bg-color">退出</a></font>');
// 			}
            } else {
                login_info_html = '<em>欢迎来到六星开源商城</em>' +
                    '<a class="login color" href="<?php echo url('/home/login'); ?>" target="_top">请登录</a>' +
                    '<a class="register" href="<?php echo url('/home/register'); ?>" target="_top">免费注册</a>';
                $('div.login-info').html('<font id="login-info" class="login-info">' +
                    '<a class="login color" href="http://tp.23673.com/login/index" target="_top">登录</a>' +
                    '<a class="register bg-color" href="<?php echo url('/home/register'); ?>" target="_top">免费注册</a></font>');
            }
            $('#login-info').html(login_info_html);
        }
    });

    //退出登录
    function logout() {
        $.ajax({
            url: "<?php echo url('/home/logOut'); ?>",
            type: "post",
            success: function (res) {
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
                sear_html += '<a href="http://www.ttshop.com/goods/goodslist?keyword=' + arrSear[i] + '" style="display:inline-block;">' + arrSear[i] + '</a>';
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

    $(function () {
        SearRecord();
    });
</script>
<div class="as-shelter"></div>
<div class="follow-box">
    <div class="follow-box-con">
        <a href="http://www.ttshop.com" class="logo"><img src="/tpshop/public/static/picture/1497923663.jpg"/></a>
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
                            <input type="text"
                                   class="search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9"
                                   autocomplete="off" data-searchwords="1231231231" placeholder="1231231231" value="">
                        </div>
                    </div>
                    <input type="hidden" id="searchtypeTop" name="type" value="0" class="searchtype">
                    <input type="button" id="btn_search_box_submit_top" value="搜索"
                           class="button NS-SEARCH-BOX-SUBMIT-TOP">
                </div>
            </form>
        </div>
        <div class="login-info"></div>
    </div>
</div>
<div class="header">
    <div class="w1210">
        <div class="logo-info">
            <a href="http://www.ttshop.com" class="logo"> <img src="/tpshop/public/static/picture/1497923663.jpg"/></a>
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
                            <input type="text" class="keyword search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword"
                                   tabindex="9" autocomplete="off" data-searchwords="1231231231"
                                   placeholder="1231231231" value=""/>
                        </div>
                    </div>
                    <!-- <input type="hidden" id="searchtype" name="type" value="0" class="searchtype"> -->
                    <input type="button" id="btn_search_box_submit" value="搜索"
                           class="button btn_search_box_submit NS-SEARCH-BOX-SUBMIT">
                </div>
                <!-- -热门搜索热搜词显示 -->
                <div class="search-results hide NS-SEARCH-BOX-HELPER" style="display: none;">
                    <ul class="history-results">
                        <li class="title" id="search_titles" style="word-wrap:break-word "></li>

                    </ul>
                    <ul class="rec-results">
                        <li class="title"><span>正在热搜中</span> <i class="close"></i></li>
                        <li><a href="http://www.ttshop.com/goods/goodslist?keyword=衣服，鞋子" title="衣服，鞋子">衣服，鞋子</a></li>
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
            <a href="http://www.ttshop.com/goods/cart" class="my-cart"><span class="ico"></span>购物车结算<span
                    class="right_border"></span></a>
            <a href="http://www.ttshop.com/member" class="my-mall"><span class="ico"></span>我的商城<span
                    class="right_border"></span></a>
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
        $('.logo-info').append('<a href="' + data[0]['adv_url'] + '" class="logo-right"> <img src="/' + data[0]['adv_image'] + '"> </a>');
    }
    //搜索框右侧小广告
    //$('.header-right').html('<a href="'+data[1]['adv_url']+'" target="_blank" title="">  <img src="/'+data[1]['adv_image']+'"></a>');
</script>
<script type="text/javascript">
    $(document).ready(function () {
        // 搜索框提示显示
        $('.NS-SEARCH-BOX .NS-SEARCH-BOX-KEYWORD').focus(function () {
            $(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").show();
        });
        // 搜索框提示隐藏
        $(".NS-SEARCH-BOX-HELPER .close").on('click', function () {
            $(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").hide();
        });
        // 清除记录
        $(".NS-SEARCH-BOX-HELPER .clear").click(function () {
            var url = '/search/clear-record.html';
            $.post(
                url,
                {},
                function (result) {
                    if (result.code == 0) {
                        $(".history-results .active").empty();
                    } else {
                    }
                },
                'json');
        });
    });

    function search_box_remove(key) {
        var url = '/search/delete-record.html';
        $.post(url, {
            data: key
        }, function (result) {
            if (result.code == 0) {
                $("#" + key).css("display", "none");
            } else {

            }
        }, 'json');
    }

    $(document).on("click", function (e) {
        var target = $(e.target);
        if (target.closest(".NS-SEARCH-BOX").length == 0) {
            $('.NS-SEARCH-BOX-HELPER').hide();
        }
    })
</script>
<script type="text/javascript">
    //固定搜索
    $(document).ready(function () {
        $(".NS-SEARCH-BOX .NS-SEARCH-BOX-SUBMIT").click(function () {
            var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
            var keywords = keyword_obj.val();
            if ($.trim(keywords).length == 0
                || $.trim(keywords) == "请输入关键词") {
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
                window.location.href = 'http://www.ttshop.com/goods/goodslist?keyword=' + keywords;
            } else {
                window.location.href = 'http://www.ttshop.com/shop/shopstreet?shopname=' + keywords;
            }
        });
    });
    //浮动搜索
    $(document).ready(function () {
        $(".NS-SEARCH-BOX-TOP .NS-SEARCH-BOX-SUBMIT-TOP").click(function () {
            var keyword_obj = $(this).parents(".NS-SEARCH-BOX-TOP").find(".NS-SEARCH-BOX-KEYWORD");
            var keywords = $(keyword_obj).val();
            if ($.trim(keywords).length == 0
                || $.trim(keywords) == "请输入关键词") {
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
                window.location.href = 'http://www.ttshop.com/goods/goodslist?keyword=' + keywords;
            } else {
                window.location.href = 'http://www.ttshop.com/shop/shopstreet?shopname=' + keywords;
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
<div class="category-box category-box-border">
    <div class="w1210">
        <div class="home-category fl">
            <a href="http://www.ttshop.com/goods/category" class="menu-event" title="查看全部商品分类"><i></i>全部商品分类</a>
            <div class="expand-menu category-layer" style="display: none;">
                <!-- 公共的菜单栏-->
                <div class="category-layer">
                    <span class="category-layer-bg"></span>
                    <div class="list">
                        <dl class="cat">
                            <dt class="cat-name">
                                <a href="http://www.ttshop.com/goods/goodslist?category_id=311" target="_blank"
                                   title="女装/男装/内衣">女装/男装/内衣</a>
                            </dt>
                            <i class="right-arrow"></i>
                        </dl>
                        <div class="categorys" style="display: none;">
                            <div class="item-left fl">
                                <div class="subitems">
                                    <dl class="fore1">
                                        <dt style="width: 5em;">
                                            <a href="http://www.ttshop.com/goods/goodslist?category_id=313"
                                               target="_blank" title="女装">
                                                <em>女装</em>
                                                <i></i>
                                            </a>
                                        </dt>
                                        <dd>
                                            <a href="http://www.ttshop.com/goods/goodslist?category_id=320"
                                               target="_blank" title="蕾丝短袖">蕾丝短袖</a>
                                            <a href="http://www.ttshop.com/goods/goodslist?category_id=322"
                                               target="_blank" title="针织短袖">针织短袖</a>
                                        </dd>
                                    </dl>
                                    <dl class="fore1">
                                        <dt style="width: 5em;">
                                            <a href="http://www.ttshop.com/goods/goodslist?category_id=314"
                                               target="_blank" title="连衣裙">
                                                <em>连衣裙</em>
                                                <i></i>
                                            </a>
                                        </dt>
                                        <dd>
                                            <a href="http://www.ttshop.com/goods/goodslist?category_id=316"
                                               target="_blank" title="迷你连衣裙">迷你连衣裙</a>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <dl class="cat">
                            <dt class="cat-name">
                                <a href="http://www.ttshop.com/goods/goodslist?category_id=312" target="_blank"
                                   title="鞋靴/箱包/配件">鞋靴/箱包/配件</a>
                            </dt>
                        </dl>
                        <div class="categorys" style="display: none;">
                            <div class="item-left fl">
                                <div class="subitems">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <dl class="cat">
                            <dt class="cat-name">
                                <a href="http://www.ttshop.com/goods/goodslist?category_id=315" target="_blank"
                                   title="手机数码">手机数码</a>
                            </dt>
                        </dl>
                        <div class="categorys" style="display: none;">
                            <div class="item-left fl">
                                <div class="subitems">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <dl class="cat">
                            <dt class="cat-name">
                                <a href="http://www.ttshop.com/goods/goodslist?category_id=317" target="_blank"
                                   title="家用电器">家用电器</a>
                            </dt>
                            <i class="right-arrow"></i>
                        </dl>
                        <div class="categorys" style="display: none;">
                            <div class="item-left fl">
                                <div class="subitems">
                                    <dl class="fore1">
                                        <dt style="width: 5em;">
                                            <a href="http://www.ttshop.com/goods/goodslist?category_id=318"
                                               target="_blank" title="小电器">
                                                <em>小电器</em>
                                                <i></i>
                                            </a>
                                        </dt>
                                        <dd>
                                            <a href="http://www.ttshop.com/goods/goodslist?category_id=319"
                                               target="_blank" title="高压锅">高压锅</a>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 公共的菜单栏-->
        <div class="all-category fl" id="nav">
            <ul>
                <li class="fl">
                    <a class="nav" target="_blank" href="http://www.ttshop.com/index/index" title="首页">首页</a>
                </li>
                <li class="fl">
                    <a class="nav" href="http://www.ttshop.com/index/discount" title="限时折扣">限时折扣</a>
                </li>
                <li class="fl">
                    <a class="nav" href="http://www.ttshop.com/goods/brandlist" title="品牌列表">品牌列表</a>
                </li>
                <li class="fl">
                    <a class="nav" target="_blank" href="http://www.ttshop.com/shop/shopstreet" title="店铺街">店铺街</a>
                </li>
                <li class="fl">
                    <a class="nav" href="http://www.ttshop.com/goods/integralcenter" title="积分中心">积分中心</a>
                </li>
            </ul>
            <div class="wrap-line">
                <span style="left: 15px;"></span>
            </div>
        </div>
    </div>
</div>

<!--头部商品分类 end-->
<!-- 右侧固定购物车 -->
<script type="text/javascript" src="/tpshop/public/static/js/shopping_cart.js"></script>
<script src="/tpshop/public/static/js/ns_collections.js" type="text/javascript"></script>
<!-- common.js 刷新了购物车数据 -->
<script>
    //当浏览器窗口大小改变时，设置显示内容的高度  
    window.onresize = function () {
        $(".sidebar-cartbox").find('.cart-panel-content').height($(window).height() - 90);
        $(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height() - 40);
    }
    $(function () {
        $(".quick-links").css("top", ($(window).height()) / 2);
        $.ajax({
            type: "post",
            url: "http://www.ttshop.com/components/getlogininfo",
            success: function (data) {
                if (data != null && data != "") {
                    var img = data["user_info"]["user_headimg"];
                    var name = data["user_info"]["nick_name"];
                    $("#not_logged").css("display", "none");
                    $("#right_login_info").css("display", "block");
                    $("#right_login_info_name").text(name);
                    if (img == '' || img == null) {
                        $("#login_member_logo").attr('src', "/tpshop/public__JS__/temp_default_user_portrait_0.png");
                    } else {
                        img = '/' + img;
                        $("#login_member_logo").attr('src', img);
                    }
                } else {
                    $("#not_logged").css("display", "block");
                    $("#right_login_info").css("display", "none");
                }
            }
        })
        $('.ajax-login').click(function () {
            $('#mask-layer-login').show();
            $('#layui-layer').show();
        })
        $('.layui-layer-close.layui-layer-close1').click(function () {
            $('#mask-layer-login').hide();
            $('#layui-layer').hide();
        })
        refreshShopCart();
    });
</script>
<input type="hidden" id="hidden_uid" value="293"/>
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
                                    <a href="http://www.ttshop.com/member/index">
                                        <div class="user-pic">
                                            <div class="user-pic-mask"></div>
                                            <img id="login_member_logo" src="/tpshop/public__JS__/temp_default_user_portrait_0.png"/>
                                        </div>
                                    </a>
                                    <br>
                                    <p id="not_logged">你好！请<a href="javascript:void(0);"
                                                              class="quick-login-a color ajax-login">登录</a> | <a
                                            href="http://www.ttshop.com/login/registerbox" class="color">注册</a></p>
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
                                        <a href="http://www.ttshop.com/member/index" class="btn account-btn"
                                           target="_blank">个人中心</a>
                                        <a href="http://www.ttshop.com/member/orderlist" class="btn order-btn"
                                           target="_blank">订单中心</a>
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
                        <a class="quick-links-a" href="http://wpa.qq.com/msgrd?v=3&uin=10202706&site=qq&menu=yes"
                           title="联系客服" target="_blank">
                            <i class="customer-service"></i>
                        </a>
                    </li>
                    <li class="quick-area">
                        <a class="quick-links-a" href="javascript:void(0);" title="商城二维码"><i class="qr-code"></i></a>
                        <div class="sidebar-code quick-sidebar" style="display: none;">
                            <i class="arrow-right"></i>
                            <img src="/tpshop/public/static/picture/1500630330.jpg">
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
<form>
    <div class="cart-box">
        <div class="nb">
            <div class="cart-step">
                <ul>
                    <li class="cart1"><i></i>购物车</li>
                    <li class="cart2 oncart2"><i></i>确认订单</li>
                    <li class="cart3"><i></i>付款</li>
                    <li class="cart4"><i></i>支付成功</li>
                </ul>
            </div>
            <div class="add-deliver">
                <div class="cart-title">
                    <h3>
                        <span>收货人信息</span>
                    </h3>
                </div>
                <div class="sh-address js-shipping-address">
                    <ul>
                        <?php foreach($site as $addr): ?>
                        <li class="other-add <?php if($addr['is_default'] == 1): ?>default-add<?php endif; ?>" data-id="<?php echo htmlentities($addr['id']); ?>"
                            data-province-id="<?php echo htmlentities($addr['province']); ?>" data-city-id="<?php echo htmlentities($addr['city']); ?>">
                            <div class="add-box">
                                <span class="remove vivi-blue js-shipping-address-remove" data-id="<?php echo htmlentities($addr['id']); ?>">X</span>
                                <div class="name-add">
                                    <span class="name"><?php echo htmlentities($addr['consignee']); ?></span>
                                    <span class="add-rside"></span>
                                </div>
                                <div class="elli add-detail">
                                    <p title="11"><?php echo htmlentities($addr['address']); ?></p>
                                </div>
                                <div>
                                    <span class="moblie"><?php echo htmlentities($addr['mobile']); ?></span>
                                    <a href="javascript:void(0);"
                                       class="chang-default change vivi-blue js-update-shipping-address" data-id="156">修改地址</a>
                                </div>
                            </div>
                            <i class="icon-check"></i>
                        </li>
                        <?php endforeach; ?>
                        <li class="add-add">
                            <div class="add-box add-box-center js-add-shipping-address">
                                <a href="javascript:;"><i class="icon-add-add"></i>添加新地址</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="goods-infor">
                <div class="cart-title">
                    <h3>
                        <span>商品信息</span>
                        <a href="<?php echo url('/cart/cartList'); ?>" class="vivi-blue js-goback-cart">返回购物车修改</a>
                    </h3>
                </div>
                <div class="goods-table">
                    <div class="goods-thead">
                        <div class="col col1">商品</div>
                        <div class="col col3">单价</div>
                        <div class="col col4">数量</div>
                        <div class="col col5">小计</div>
                    </div>
                    <div class="goods-tbody">
                        <?php foreach($goodsData as $goods): ?>
                        <div class="goodinfo" data-goods-id="<?php echo htmlentities($goods['goods_id']); ?>" data-goods-name="<?php echo htmlentities($goods['name']); ?>"
                             data-sku-name="" data-sku-id="1482" data-price="<?php echo htmlentities($goods['goods_price']); ?>" data-img-id="1844">
                            <div class="col col1 goods-title-pic">
                                <a href="<?php echo url('/goods/goodsinfo'); ?>?goodsId=<?php echo htmlentities($goods['goods_id']); ?>" target="_blank">
                                    <img src="/tpshop/public<?php echo htmlentities($goods['pic_addr']); ?>" width="60" height="60">
                                </a>
                                <div class="goods-describ elli">
                                    <p style="word-break: break-all; word-wrap:break-word;">
                                        <a href="<?php echo url('/goods/goodsinfo'); ?>?goodsId=<?php echo htmlentities($goods['goods_id']); ?>" target="_blank"><?php echo htmlentities($goods['name']); ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col col3 goods-price"><?php echo htmlentities($goods['goods_price']); ?></div>
                            <div class="col col4 good-num"><?php echo htmlentities($goods['count']); ?></div>
                            <div class="col col5 orange-bold xiaoji" data-subtotal="345.00"
                                 style="border-bottom-style: none;"><?php echo htmlentities($goods['sum']); ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
            <div class="style-zhifu">
                <div class="cart-title">
                    <h3>
                        <span>支付方式</span>
                    </h3>
                </div>
                <div class="zhifu-box">
                    <ul class="zfb" id="paylist">
                        <li>
                            <i class="icon-check-zf" style="display:block;"></i>
                            <a href="javascript:void(0);" data-select="0" class="selected">
                                <span>在线支付</span>
                            </a>
                        </li>
                        <!-- 为了用户更好的体验和理解，只要开启货到付款就显示，不考虑商家配送、是否有物流公司等 -->
                        <!-- 					if condition="$shop_config.order_delivery_pay && $shop_config.seller_dispatching && count($express_company_list)" -->
                        <li>
                            <i class="icon-check-zf"></i>
                            <a href="javascript:void(0);" data-select="4">
                                <span>货到付款</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="style-zhifu order-invoice">
                <div class="cart-title">
                    <h3>
                        <span>配送方式</span>
                    </h3>
                </div>
                <div class="zhifu-box" id="shipping_method">
                    <div class="item js-select">
                        <div class="label">
                            <ul class="zfb">
                                <!-- 为了用户更好的体验和理解，只要开启商家配送就显示，不考虑物流公司 -->
                                <!-- 						if condition="$shop_config.seller_dispatching && count($express_company_list)" -->
                                <li data-code="merchant_distribution">
                                    <i class="icon-check-zf"></i>
                                    <a href="javascript:void(0);">商家配送</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="select_express_company">
                        <div class="item">
                            <span class="label">物流公司</span>
                            <select id="express_company"
                                    style="margin-left: 12px;padding: 0 10px;width: 250px;height: 25px;border: 1px solid #ddd;">
                                <option value="7407" data-express-fee="0">韵达</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="style-zhifu order-invoice">
                <div class="cart-title">
                    <h3>
                        <span>发票信息</span>
                    </h3>
                </div>
                <div class="zhifu-box">
                    <div class="item">
                        <div class="label">
                            <ul class="zfb" id="is_invoice">
                                <li>
                                    <i class="icon-check-zf" style="display: block;"></i>
                                    <a href="javascript:void(0);" data-flag="not-need-invoice"
                                       class="selected">不需要发票</a>
                                </li>
                                <li>
                                    <i class="icon-check-zf"></i>
                                    <a href="javascript:void(0);" data-flag="need-invoice">需要发票</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="invoiceinfo" style="display: none;">
                        <div class="item">
                            <span class="label fl" style="line-height: 50px;width:85px;text-align: right;">发票抬头：</span>
                            <div class="fl">
                                <ul class="zfb" id="invoice_tite_list" style="margin: 0 10px 0 0;">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <input type="text" placeholder="个人或公司发票抬头" maxlength="50"
                                                   id="invoice-title"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <span style="line-height: 50px;color:#FF9800;font-weight:bold;">(收取10%的发票税率)</span>
                        </div>
                        <div class="item">
                            <span class="label fl"
                                  style="line-height: 50px;width:85px;text-align: right;">纳税人识别号：</span>
                            <div class="fl">
                                <ul class="zfb" style="margin: 0 10px 0 0;">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <input type="text" placeholder="纳税人识别号" maxlength="50"
                                                   id="taxpayer-identification-number"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <span class="label fl" style="line-height: 50px;width:85px;text-align: right;">发票内容：</span>
                            <div class="fl">
                                <ul class="zfb" id="invoice_con">
                                    <li>
                                        <i class="icon-check-zf"></i>
                                        <a href="javascript:void(0);" title="办公">办公</a>
                                    </li>
                                    <li>
                                        <i class="icon-check-zf"></i>
                                        <a href="javascript:void(0);" title="建材">建材</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fare-result">
                <div class="cart-title">
                    <h3>
                        <span>结算信息</span>
                    </h3>
                </div>
                <div class="result-box">
                    <div class="yue">
                        <span><input type="checkbox" id="userbalance" disabled="disabled" style="display:none;">&nbsp;使用余额</span>
                        <input type="text" maxlength="9" placeholder="0.00" data-max="0" id="account_balance"
                               style="display:inline-block;"/>
                        <span class="yeuse">（我的余额：<b class="orange-bold">0</b>元）</span>。<br> <br>
                    </div>
                    <ul>
                        <li style="float:left;clear:none;">
                            <div style="width: 400px; float: left; font-size: 14px;">
                                <label class="list-name" for="leavemess">留言：</label>
                                <textarea id="leavemessage" maxlength="100" placeholder="买家留言"></textarea>
                            </div>
                        </li>
                        <li class="first" style="float:right;clear:none;">
                            <div class="calu-box">
                                <p class="slivergrey">
                                    <span>共<b class="orange-bold js-goods-num"></b><?php echo htmlentities($totalCount); ?>件商品 总计：</span>
                                    <span class="txtmoney">￥<?php echo htmlentities($total); ?><b class="js-total-money"></b></span>
                                </p>
                                <p class="slivergrey">
                                    <span>运费：</span>
                                    <span class="txtmoney">￥<b id="express">0.00</b></span>
                                </p>

                                <p class="slivergrey">
                                    <span>总优惠：</span>
                                    <span class="txtmoney">￥<b id="discount_money">0.00</b></span>
                                </p>

                                <p class="slivergrey">
                                    <span>发票税额：</span>
                                    <span class="txtmoney">￥<b id="invoice_tax_money">0.00</b></span>
                                </p>
                                <p class="slivergrey">
                                    <span>使用余额：</span>
                                    <span class="txtmoney">￥<b id="use_balance">0.00</b></span>
                                </p>
                            </div>
                        </li>
                        <li style="border: 1px solid #e4e4e4;">
                            <div class="rside">
                                <div class="lside">
                                    <p>
                                        <span class="slivergrey">应付金额：</span>
                                        <span class="orange-bold big">￥<?php echo htmlentities($total); ?><b id="realprice"></b></span>
                                    </p>
                                    <p class="vivi-blue">提交订单后尽快支付，商品才不会被人抢走哦！</p>
                                </div>
                                <a href="<?php echo url('/pay/index'); ?>" class="btn-jiesuan">提交订单</a>
                                <input type="hidden" id="hidden_discount_money" value="0.00"/>
                                <input type="hidden" id="hidden_express" value="0.00"/>
                                <input type="hidden" id="hidden_count_money" value="345.00"/>
                                <input type="hidden" id="count_point_exchange" value="0"/>
                                <input type="hidden" id="hidden_full_mail_money" value="0.00"/>
                                <input type="hidden" id="hidden_full_mail_is_open" value="0"/>
                                <input type="hidden" id="goods_sku_list" value="1482:1"/>
                                <input type="hidden" id="hidden_order_invoice_tax" value="10"/>
                                <input type="hidden" id="hidden_order_tag" value="cart"/>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>
<div id="mask" style="display: none;"></div>
<div class="pop-main pop-compare" style="display: none;">
    <div class="pop-header">
        <span>温馨提示</span>
        <a class="pop-close" href="javascript:;" title="关闭"></a>
    </div>
    <div class="pop-con">
        <i class="pop-icon"></i>
        <p class="pop-text">您确认要删除吗？</p>
        <a href="javascript:;" class="pop-sure main-bg-color">确定</a><a href="javascript:;" class="cancel-btn">取消</a>
    </div>
</div>
<div class="edit-address modbox" style="display: none;margin-left:-400px;">
    <div class="edit-box">
        <h3>新增收货地址信息<i class="close-modbox"></i></h3>
        <div class="edit-form">
            <ul>
                <li>
                    <label><i>*</i>收货人：</label>
                    <input type="text" id="consigner" maxlength="20" class="s-length">
                </li>
                <li>
                    <label><i>*</i>手机号码：</label>
                    <input type="text" id="mobile" maxlength="11" class="s-length">
                </li>
                <li>
                    <label>固定电话：</label>
                    <input type="text" id="phone" maxlength="20" class="s-length">
                </li>
                <li style="min-height: 25px;">
                    <label style="width: 75px; float: left;"><i>*</i>所在地区：</label>
                    <div class="deliver" style="float: left;">
                        <div id="store-selector">
                            <script src="/tpshop/public/static/js/ns_init_address.js"></script>
                            <select name="province" id="selProvinces" onchange="getProvince(this,'#selCities')"
                                    class="select_addr">
                                <option value="-1">请选择省</option>
                            </select>
                            <select name="city" id="selCities" onchange="getSelCity(this,'#selDistricts')"
                                    class="select_addr">
                                <option value="-1">请选择市</option>
                            </select>
                            <select name="district" id="selDistricts" class="select_addr">
                                <option value="-1">请选择区</option>
                            </select>
                            <div class="required-notice fl">
                                <i class="notice-icon"></i><span class="notice-text address-notice"></span>
                            </div>
                            <script>
                                initProvince("#selProvinces");
                            </script>
                        </div>
                    </div>
                </li>
                <li style="clear: both;">
                    <label><i>*</i>详细地址：</label>
                    <input type="text" id="detailed_address" maxlength="30" class="l-length">
                </li>
                <li style="clear: both;">
                    <label>邮编：</label>
                    <input type="text" id="zipcode" maxlength="30" class="l-length">
                </li>
            </ul>
            <input type="hidden" id="address_id" value="0">
            <button class="btn-save" id="save_shipping_address">保存</button>
        </div>
    </div>
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
                        <img src="/tpshop/public__JS__/icon-zheng.png">
                    </div>
                    <div class="service-txt">正品保障</div>
                </li>
                <li>
                    <div class="service-tit service-qi">
                        <img src="/tpshop/public__JS__/icon-qi.png"></i>
                    </div>
                    <div class="service-txt">七天包退</div>
                </li>
                <li>
                    <div class="service-tit service-hao">
                        <img src="/tpshop/public__JS__/icon-grin.png">
                    </div>
                    <div class="service-txt">好评如潮</div>
                </li>
                <li>
                    <div class="service-tit service-shan">
                        <img src="/tpshop/public__JS__/icon-light.png"></i>
                    </div>
                    <div class="service-txt">闪电发货</div>
                </li>
                <li class="last">
                    <div class="service-tit service-quan">
                        <img src="/tpshop/public__JS__/icon-tronphy.png">
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
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=18"
                               title="售后流程" target="_blank">有问题请找我</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=8"
                               title="售后流程" target="_blank">配送支付智能查询</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>配送与支付</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=7"
                               title="售后流程" target="_blank">货到付款区域</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=2"
                               title="售后流程" target="_blank">支付方式说明</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>会员中心</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=3"
                               title="售后流程" target="_blank">售后流程</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=5"
                               title="售后流程" target="_blank">资金管理</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=6"
                               title="售后流程" target="_blank">我的收藏</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=14"
                               title="售后流程" target="_blank">我的订单</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>服务保证</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=9"
                               title="售后流程" target="_blank">退换货原则</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=10"
                               title="售后流程" target="_blank">售后服务保证</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=11"
                               title="售后流程" target="_blank">产品质量保证</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>联系我们</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=12"
                               title="售后流程" target="_blank">网站故障报告</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=15"
                               title="售后流程" target="_blank">选机咨询</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=16"
                               title="售后流程" target="_blank">投诉与建议</a></li>
                    </ul>
                </div>
            </div>
            <div class="help-cover">
                <div class="help-ctn">
                    <div class="help-ctn-mt">
                        <span>服务热线</span> <strong>0731-85573019</strong>
                    </div>
                    <div class="help-ctn-mb">

                        <a id="IM" im_type="dsc" onclick="openWin(this)"
                           href="http://wpa.qq.com/msgrd?v=3&uin=10202706&site=qq&menu=yes"
                           target="_blank" class="btn-ctn"><img
                                src="/tpshop/public__JS__/icon-csu.png"
                                style="vertical-align: middle;">&nbsp;&nbsp;咨询客服</a>
                    </div>
                </div>
                <div class="help-scan">
                    <div class="code">
                        <img src="/tpshop/public/static/picture/1500630330.jpg">
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
            <a href="http://www.sixstaredu.com" target="_blank"
               class="copyright-logo">湖南六星教育网络科技有限公司&nbsp;&nbsp;</a> <span>提供技术支持&nbsp;0731-8557-3019</span>
        </b>
    </div>
</div>
<script src="/tpshop/public/static/js/shipping_address.js"></script>
<script src="/tpshop/public/static/js/payment_orders.js"></script>
<script>
    (function () {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
        $.ajax({
            url: "http://localhost/tpshop/public/index.php/home/isLogin",
            type: "get",
            dataType: "json",
            success: function (data) {
                if (data.code > 0) {
                    $.ajax({
                        url: "http://localhost/tpshop/public/index.php/cart/getNum",
                        type: "get",
                        dataType: "json",
                        success: function (data) {
                            $(".js-cart-count").html(data);
                        }
                    });
                }
            }
        });
    })();
</script>
</body>
</html>