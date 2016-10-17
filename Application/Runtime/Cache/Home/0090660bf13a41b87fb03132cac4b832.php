<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>

	<meta charset="UTF-8">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/lidong/yuanku/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/lidong/yuanku/Public/css/home/headAndFoot.css">
	 <script src="/lidong/yuanku/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/lidong/yuanku/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>
	 

	<!--  <link rel="stylesheet" href="css/headAndFoot.css" />
	 <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
		
	<!--  <script type="text/javascript" src="js/jquery-1.9.1.min.js" ></script> 
	 <script type="text/javascript" src="js/bootstrap.min.js" ></script>-->



		

		


<!-- 联系我们页面的样式 -->
<link rel="stylesheet" href="/lidong/yuanku/Public/css/home/contact_us.css">

<!-- copy的两个关于我们页面底部的样式 -->
<link rel="stylesheet" type="text/css" href="/lidong/yuanku/Public/css/home/about.css"/>
<!-- <link rel="stylesheet" href="/lidong/yuanku/Public/css/home/site.min.css">  -->

<!-- copy的 登陆页面 头部-->
<!-- <link rel="stylesheet" type="text/css" href="/lidong/yuanku/Public/css/home/register.css"/> -->
  </head>
<body>
	<nav class="navbar navbar-default top-nav navbar-fixed-top gaise">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header"> 
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">
		      	<img class="logo" src="/lidong/yuanku/Public/img/logoko2.png" />
		      </a>
		    </div>		
		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right color">
				        <li><a href="/lidong/yuanku/index.php/Home/Index">首页</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/login">登录</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/register">注册</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/news">新闻</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/contact_us">联系我们</a></li>
				        <li><a href="/lidong/yuanku/index.php/Home/Index/about_us">关于我们</a></li>
				        <li>
				        	<a  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor: pointer;">
				        		<span class="glyphicon glyphicon-search" style="color: white;" ></span>
				        	</a>
				        </li>
				      </ul>		          			        				        	
	        </div>
		  </div>
		</nav>
<div class="container">
	<div class="row login_header clearcss">
		
			<div class="col-lg-6 col-md-12">
				<h1>联系我们</h1>
			</div>
			<div class="col-lg-offset-4 col-lg-2 col-md-12">
              	<a href="">首页 <i>/</i> </a> 
			</div>
    </div>
</div>

<!-- 联系我们的主体页面 -->
<div class="contact_us">
	<!-- <div class="row contact_head"> -->
		<!-- <div class="col-md-9 col-sm-9 col-xs-12"> -->
			<!-- <h1>联系我们</h1>
			<div class="col-md-offset-9 col-sm-3 col-xs-12">
              	<a href="">首页 <i>/</i> </a> 
			</div> -->
		<!-- </div> -->
	<!-- </div> -->
		
	<!-- <div class="map_contact">
		<a href="#" class="a_style">View Larger Map</a>
	</div> -->
	<div class="container-fluid">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-xs-10 col-xs-offset-1 contact_left">
					<p>随时与我们在线的代表交流，任何时候你请上我们的网站或使用我们的在线聊天系统低于即时消息程序。</p>
					<p>请耐心等待响应。 (24/7 支持！) <strong>电话查询: 1-888-123-4567-8900</strong></p>
					<form role="form">
						<div class="form-group">
						    <label for="name">姓名</label>
						    <input type="text" class="form-control" id="name">
						</div>
						<div class="form-group">
						    <label for="email">邮箱</label>
						    <input type="email" class="form-control" id="email">
						</div>
						<div class="form-group">
						    <label for="subject">主题</label>
						    <input type="text" class="form-control" id="subject">
						</div>
						<div class="form-group">
						    <label for="message">内容描述</label>
						    <textarea class="form-control" id="message" rows="15"></textarea>
						</div>
						<div class="submit_btn">
							<input type="submit" class="btn" value="发送信息">
							<input type="submit" class="btn" value="预览">
						</div>
					</form>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-10 col-xs-offset-1 contact_right">
					<address>
						<h4>地址一</h4>
						<ul>
							<li>
								<strong>公司名称</strong><br>
								2901 马尔路，Glassgow，西雅图，华盛顿州 98122 1090<br>
								电话: +1 1234-567-89000<br>
								传真: +1 0123-4567-8900<br>
								邮箱: <a href="mailto:#" class="a_style">mail@companyname.com</a><br>
								网址: <a href="#" class="a_style">www.yoursitename.com</a>
							</li>
						</ul>
					</address>
					<address>
						<h4>地址二</h4>
						<ul>
							<li>
								<strong>公司名称</strong><br>
								2901 马尔路，Glassgow，西雅图，华盛顿州 98122 1090<br>
								电话: +1 1234-567-89000<br>
								传真: +1 0123-4567-8900<br>
								邮箱: <a href="mailto:#" class="a_style">mail@companyname.com</a><br>
								网址: <a href="#" class="a_style">www.yoursitename.com</a>
							</li>
						</ul>
					</address>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- copy的 关于我们页面的 底部 -->
<!-- <div class="row">
	<div class="col-lg-12">
		<div class="footer">
            <div class="container">
              <div class="clearfix">                      
                <dl class="footer-nav">
                  <dt class="nav-title">Useful Links</dt>
                  <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span>Home Page Variations</a></dd>
                  <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span> Awsome Slidershows</a></dd>
                  <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span> Features and Typography</a></dd>
                  <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span> Different &amp; Unique Pages</a></dd>
                  <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span> Single and Portfolios</a></dd>
                  <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span>  Recent Blogs or News</a></dd>
                  <dd class="nav-item"><a href="#"><span class="fa fa-angle-right"></span>  Layered PSD Files</a></dd>
                </dl>
                <dl class="footer-nav blog_post">
                  <dt class="nav-title">Blog Posts</dt>
                  <dd class="nav-item"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">image Many desktop packages</a></dd>
                  <dd class="nav-item"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">Many desktop packages</a></dd>
                  <dd class="nav-item"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/><a href="#">Formula 1 Crashes | Shocking</a></dd>
                </dl>
                <dl class="footer-nav">
                  <dt class="nav-title">About Us</dt>
                  <dd class="nav-item"><a href="#">We are If you are going passage lorempsum is you need to be sure thereas anything hidden the middle there Lorem Ipsum generators an passages Internet tend to repeat predefined for this as their default model text, and a search for will uncover many web sites versions haved over the years.</a></dd>
           
                </dl>
                <dl class="footer-nav">
                  <dt class="nav-title">Address Info</dt>
                  <dd class="nav-item"><a href="#"><span class="glyphicon glyphicon-map-marker"></span>2901 Marmora Road, Glassgow,Seattle, WA 98122-1090</a></dd>
                  <dd class="nav-item"><a href="#"><span class=" glyphicon glyphicon-earphone"></span>1 -234 -456 -7890</a></dd>
                  <dd class="nav-item"><a href="#"><span class=" glyphicon glyphicon-print"></span>1 -234 -456 -7890</a></dd>
                  <dd class="nav-item"><a href="#"><span class="fa fa-envelope"></span>info@yourdomain.com</a></dd>
                </dl>
              </div>
              
            </div>
        </div>
	</div>
</div> -->

		


<div class="clearfix"></div>
<nav class="foot-nav" id="back">
			<div class="container-fluid" >
				<div class="row" >
					<div class="col-lg-3 col-md-6 col-lg-12">
						<ul class="clearfix">
							<li><h4>友情连接</h4></li><br/>
							<li><a href="#">1</a></li><br/>
							<li><a href="#">2</a></li><br/>
							<li><a href="#">3</a></li><br/>
							<li><a href="#">4</a></li>							
						</ul>						
					</div>					
					<div class="col-lg-3 col-md-6 col-lg-12">
						<ul >
							<li><h4>最新动态</h4></li><br/>
							<li><a href="#"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>捕鱼</a></li><br/>
							<li><a href="#"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>钓鱼</a></li><br/>
							<li><a href="#"><img src="/lidong/yuanku/Public/img/highstand homepage/2h1BK2H2Quk (1).jpg"/>抓鱼</a></li><br/>
												
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-lg-12">
						<ul >
							<li><h4>关于我们</h4></li><br/>
							<li><a href="#">1</a></li><br/>
							<li><a href="#">2</a></li><br/>
							<li><a href="#">3</a></li><br/>
							<li><a href="#">4</a></li>
					   </ul>
					</div>
					<div class="col-lg-3 col-md-6 col-lg-12">
						<ul >
							<li><h4>邮箱地址</h4></li></br>
							<li><a href="#">1</a></li><br/>
							<li><a href="#">2</a></li><br/>
							<li><a href="#">3</a></li><br/>
							<li><a href="#">4</a></li>							
					    </ul>
					</div>				
				</div>	
			</div>
			<div class="foot-text">
				<p class="text-center">Copyright? 2003-2016 </p>
			</div>
</nav>
<!--摸态框-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="exampleModalLabel">搜索</h4>
		      </div>
		      <div class="modal-body">
		        <form>
		          <div class="form-group">
		            <label for="recipient-name" class="control-label">请输入你要搜索的内容</label>
		            <input type="text" class="form-control" id="recipient-name">
		          </div>
		          <!--<div class="form-group">
		            <label for="message-text" class="control-label">Message:</label>
		            <textarea class="form-control" id="message-text"></textarea>
		          </div>-->
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Search</button>
		      </div>
		    </div>
		  </div>
</div>
	</body>
</html>