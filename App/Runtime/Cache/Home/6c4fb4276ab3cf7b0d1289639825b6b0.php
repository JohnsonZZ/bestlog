<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>概况-百事得物流公司</title>
<link rel="stylesheet" href="/bestlog/Public/css/base.css" />
<link rel="stylesheet" href="/bestlog/Public/css/style.css" />
</head>

<body>
    <div class="nav">
    <div class="nav-top">
        <div class="nav-header bc">
			<img src="/bestlog/Public/images/top.jpg" alt="百事得" />
        </div>	
    </div>
    <div class="nav-bottom">
		<div class="nav-list bc">
            <ul class="nav-ui">
                <li id="Index" class="inline active"><a href="<?php echo U('Index/index');?>">公司首页</a></li>
                <li id="Comp" class="inline"><a href="<?php echo U('Comp/index');?>">公司概况</a></li>
                <li id="Service" class="inline"><a href="<?php echo U('Service/index');?>">服务产品</a></li>
                <li id="Case" class="inline"><a href="<?php echo U('Case/index');?>">案例展示</a></li>
                <li id="News" class="inline"><a href="<?php echo U('News/index');?>">新闻资讯</a></li>
            </ul>
        </div>
    </div>
</div>
	<div class="blankarea1"></div>
		<div class="main bc"> 
			<img src="/bestlog/Public/images/comp-top.jpg" alt="百事得宣传"  />
			<div class="blankarea4"></div>
			<div class="main-list fl">
				<div class="main-menu">
					<h3>公司概况</h3>
					<ul class="main-ul">
						<li id="intro">公司介绍</li>
						<li id="system">RFID智能系统</li>
					</ul>
					<h3>联系我们</h3>
					<ul class="contact-ul">
						<li>公司名称：<br />百事得物流有限公司</li>
						<li>官网：www.zqbestlog.com</li>
						<li>邮编：516000</li>
						<li>合作热线：<br />0758-2107833</li>
						<li>联系邮箱: baishidewuliu@163.com</li>  
					</ul>
				</div>
			</div>
			<div class="main-content fl">
				<div class="main-name">
					<span>公司介绍</span>
					<div class="main-back fr">
						<a href="<?php echo U('Index/index');?>">首页</a>>公司概况
					</div>
				</div>
				<div id="intro-list" class="introduce">
					<h1>百事得物流有限公司</h1>
					<p class="pt20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;肇庆市百事得物流有限公司是一家旨在运用RFID技术和网络技术，致力于提供物流标准化整体解决方案的公司。自公司成立以来，一直坚持“自强、诚信、开拓、创新”的立身之本，秉承：“标准规范，高效便捷”的经营宗旨，产品可广泛应用于商贸连锁企业、电商物流企业、快消品生产企业、药品流通企业、农产品流通企业等，有效帮助企业节约物流成本，提高物流效率。</p>
					<p class="pt10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;肇庆市百事得物流有限公司与宏高供应链管理(深圳)有限公司共同合作推崇顾客至上的服务理念，不断追求效益和效率；并对物流、信息流、资金流进行全面整合与有效控制，向客户提供优质有针对性的标准化方案，并与肇庆市商务局，端州区商务局，肇庆学院，广东工商职业学院建立了紧密的政产学研合作关系，不断研发物流标准化系列产品，也为肇庆市场乃至粤西、华南等市场提供政策、服务、技术及人才支持。</p>
					<img class="pt20" src="/bestlog/Public/images/RFID.jpg" alt="公司图片" width="650px" />
				</div>
				<div id="intro-rfid" class="introduce none">
					<h1>基于RFID的智能物流仓储管理系统</h1>
					<img class="intro-image pt20" src="/bestlog/Public/images/RFID.png" alt="公司图片" width="350px" />
					<ul class="intro-list pt20">
						<li>1、人工可降低20-30%；</li>
						<li>2、99%的仓库产品品可视化，降低商品缺失的风险；</li>
						<li>3、改良的供应链管理将降低20-25%的工作服务时间；</li>
						<li>4、提高仓储信息的准确性与可靠性；</li>
						<li>5、高效、准确的数据采集，提供作业效率；</li>
						<li>6、入库、出库数据自动采集，降低人为失误；</li>
						<li>7、降低企业仓储物流成本。</li>
					</ul>
				</div>
			</div>
		</div>
	<div class="footer">
     <div class="footer-content bc">
        <div class="footer-line fl">
        	<ul>
                <li class="inline"><a href="">关于我们 | </a></li>
                <li class="inline"><a href="">联系我们 | </a></li>
                <li class="inline"><a href="">信息反馈 | </a></li>
                <li class="inline"><a href="">人才招聘 | </a></li>
                <li class="inline"><a href="">友情链接 | </a></li>
                <li class="inline"><a href="">管理进入</a></li>
           	</ul>
        </div>
        <div class="copyright fr">
           	<p>版权所有  @肇庆市百事得物流有限公司</p>
        </div>
    </div>
</div>
	<script src="/bestlog/Public/js/jquery.js"></script>
	<script>
		$('#Comp').addClass("active").siblings().removeClass("active");
		$(function(){
			$("#system").click(function(){
				$("#intro-list").addClass("none");
				$("#intro-rfid").removeClass("none");
				});
			$("#intro").click(function(){
				$("#intro-list").removeClass("none");
				$("#intro-rfid").addClass("none");
				});
			})
    </script>   
</body>
</html>