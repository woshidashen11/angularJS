<!DOCTYPE html>
<!-- saved from url=(0022)http://v3.bootcss.com/ -->
<html lang="zh-cn" ng-app="bootstrapApp">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Bootstrap - 简洁、直观、强悍、移动设备优先的前端开发框架，让web开发更迅速、简单。">
		<meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="author" content="王赛 &lt;wangsai@bootcss.com&gt;">

		<title>

			Bootstrap 中文文档

		</title>

		<!-- Bootstrap core CSS -->
		<link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

		<link href="http://v3.bootcss.com/assets/css/patch.css" rel="stylesheet">

		<!-- Documentation extras -->
		<link href="http://v3.bootcss.com/assets/css/docs.min.css" rel="stylesheet">
		<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="./Bootstrap 中文文档_files/ie-emulation-modes-warning.js"></script>
		<script src="js/angular.js"></script>
		<script src="js/base.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

		<!-- Favicons -->
		<link rel="apple-touch-icon" href="http://v3.bootcss.com/apple-touch-icon.png">
		<link rel="icon" href="http://v3.bootcss.com/favicon.ico">
		<script>
			var _hmt = _hmt || [];
		</script>
	</head>

	<body class="bs-docs-home">
		<a class="sr-only sr-only-focusable" href="http://v3.bootcss.com/#content">Skip to main content</a>

		<!-- Docs master nav -->
		<header ng-xheader class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
					<a href="./Bootstrap 中文文档_files/Bootstrap 中文文档.html" class="navbar-brand">Bootstrap</a>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul class="nav navbar-nav">
						<li>
							<a href="http://v3.bootcss.com/getting-started/"><?php echo "起步起步"; ?></a>
						</li>
						<li>
							<a href="http://v3.bootcss.com/css/">全局 CSS 样式</a>
						</li>
						<li>
							<a href="http://v3.bootcss.com/components/">组件</a>
						</li>
						<li>
							<a href="http://v3.bootcss.com/javascript/">JavaScript 插件</a>
						</li>
						<li>
							<a href="http://v3.bootcss.com/customize/">定制</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="http://job.bootcss.com/" onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;docv3-navbar&#39;, &#39;click&#39;, &#39;doc-home-navbar-job&#39;])" target="_blank">高薪工作</a>
						</li>
						<li>
							<a href="http://expo.bootcss.com/" onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;docv3-navbar&#39;, &#39;click&#39;, &#39;doc-home-navbar-expo&#39;])" target="_blank">优站精选</a>
						</li>
						<li>
							<a href="http://blog.getbootstrap.com/" onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;docv3-navbar&#39;, &#39;click&#39;, &#39;doc-home-navbar-blog&#39;])" target="_blank">官方博客</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>

		<!-- Page content of course! -->
		<main class="bs-docs-masthead" id="content" role="main">
			<div class="container">
				<span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">B</span>
				<p class="lead">Bootstrap 是最受欢迎的 HTML、CSS 和 JS 框架，用于开发响应式布局、移动设备优先的 WEB 项目。</p>
				<p class="lead">
					<a ng-download href="http://v3.bootcss.com/getting-started#download" class="btn btn-outline-inverse btn-lg" onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;Jumbotron actions&#39;, &#39;Download&#39;, &#39;Download 3.3.0&#39;);">下载 Bootstrap</a>
				</p>
				<p class="version">当前版本： v3.3.0 | 文档更新于：2014-10-31</p>

			</div>
		</main>

		<div class="bs-docs-featurette">
			<div class="container">
				<h2 class="bs-docs-featurette-title">为所有开发者、所有应用场景而设计。</h2>
				<p class="lead">Bootstrap 让前端开发更快速、简单。所有开发者都能快速上手、所有设备都可以适配、所有项目都适用。</p>

				<hr class="half-rule">

				<div class="row">
					<div class="col-sm-4">
						<img src="./Bootstrap 中文文档_files/sass-less.png" alt="Sass and Less support" class="img-responsive">
						<h3>预处理脚本</h3>
						<p>虽然可以直接使用 Bootstrap 提供的 CSS 样式表，不要忘记 Bootstrap 的源码是基于最流行的 CSS 预处理脚本 -
							<a href="http://v3.bootcss.com/css/#less">Less</a> 和
							<a href="http://v3.bootcss.com/css/#sass">Sass</a> 开发的。你可以采用预编译的 CSS 文件快速开发，也可以从源码定制自己需要的样式.。</p>
					</div>
					<div class="col-sm-4">
						<img src="./Bootstrap 中文文档_files/devices.png" alt="Responsive across devices" class="img-responsive">
						<h3>一个框架、多种设备</h3>
						<p>你的网站和应用能在 Bootstrap 的帮助下通过同一份代码快速、有效适配手机、平板、PC 设备，这一切都是 CSS 媒体查询（Media Query）的功劳。</p>
					</div>
					<div class="col-sm-4">
						<img src="./Bootstrap 中文文档_files/components.png" alt="Components" class="img-responsive">
						<h3>特性齐全</h3>
						<p>Bootstrap 提供了全面、美观的文档。你能在这里找到关于 HTML 元素、HTML 和 CSS 组件、jQuery 插件方面的所有详细文档。</p>
					</div>
				</div>

				<hr class="half-rule">

				<p class="lead">Bootstrap 是完全开源的。它的代码托管、开发、维护都依赖 GitHub 平台。</p>
				<a href="https://github.com/twbs/bootstrap" class="btn btn-outline btn-lg">查看 GitHub 项目主页</a>
			</div>
		</div>

		<div class="bs-docs-featurette">
			<div class="container">
				<h2 class="bs-docs-featurette-title">基于 Bootstrap 构建的网站</h2>
				<p class="lead">全球数以百万计的网站都是基于 Bootstrap 构建的。你可以先参观一下我们提供的
					<a href="http://v3.bootcss.com/getting-started/#examples">实例精选</a>或者看一看我们粉丝的网站吧。</p>

				<hr class="half-rule">

				<div class="row bs-docs-featured-sites">

					<div class="col-sm-4">
						<a href="http://job.bootcss.com/" target="_blank" title="Bootstrap Jobs" onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;doc-home-youzhan-img&#39;, &#39;click&#39;, &#39;Bootstrap Jobs&#39;])">
							<img src="./Bootstrap 中文文档_files/aa0f5e47743eb3757b7cb06c29444.jpg" alt="Bootstrap Jobs" class="img-responsive">
						</a>
					</div>

					<div class="col-sm-4">
						<a href="http://www.ghostchina.com/" target="_blank" title="Ghost中国" onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;doc-home-youzhan-img&#39;, &#39;click&#39;, &#39;Ghost中国&#39;])">
							<img src="./Bootstrap 中文文档_files/f9c2f01fad1f23574156e0577a06c.jpg" alt="Ghost中国" class="img-responsive">
						</a>
					</div>

					<div class="col-sm-4">
						<a href="http://expo.bootcss.com/" target="_blank" title="Timely" onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;doc-home-youzhan-img&#39;, &#39;click&#39;, &#39;Timely&#39;])">
							<img src="./Bootstrap 中文文档_files/4a5e1cc71a408729fb2cc3f476afb.jpg" alt="Timely" class="img-responsive">
						</a>
					</div>

				</div>

				<hr class="half-rule">

				<p class="lead">我们在“优站精选”里展示了许多精美的 Bootstrap 网站。</p>
				<a href="http://expo.bootcss.com/" class="btn btn-outline btn-lg">逛一逛“优站精选”</a>
			</div>
		</div>

		<!-- Footer
================================================== -->
		<footer class="bs-docs-footer" role="contentinfo">
			<div class="container">

				<p>Designed and built with all the love in the world by
					<a href="https://twitter.com/mdo" target="_blank">@mdo</a> and
					<a href="https://twitter.com/fat" target="_blank">@fat</a>.</p>
				<p>Maintained by the
					<a href="https://github.com/orgs/twbs/people">core team</a> with the help of
					<a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
				<p>本项目源码受
					<a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a> 开源协议保护，文档受
					<a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a> 开源协议保护。</p>
				<ul class="bs-docs-footer-links muted">
					<li>当前版本： v3.3.0</li>
					<li>·</li>
					<li>
						<a href="https://github.com/twbs/bootstrap">GitHub 仓库</a>
					</li>
					<li>·</li>
					<li>
						<a href="http://v3.bootcss.com/getting-started/#examples">实例精选</a>
					</li>
					<li>·</li>
					<li>
						<a href="http://v2.bootcss.com/">v2.3.2 中文文档</a>
					</li>
					<li>·</li>
					<li>
						<a href="http://v3.bootcss.com/about/">关于</a>
					</li>
					<li>·</li>
					<li>
						<a href="http://expo.bootcss.com/">优站精选</a>
					</li>
					<li>·</li>
					<li>
						<a href="http://blog.getbootstrap.com/">官方博客</a>
					</li>
					<li>·</li>
					<li>
						<a href="https://github.com/twbs/bootstrap/issues">Issues</a>
					</li>
					<li>·</li>
					<li>
						<a href="https://github.com/twbs/bootstrap/releases">历史版本</a>
					</li>
				</ul>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript
================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="./Bootstrap 中文文档_files/jquery.min.js"></script>

		<script src="./Bootstrap 中文文档_files/bootstrap.min.js"></script>

		<script src="./Bootstrap 中文文档_files/docs.min.js"></script>

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="./Bootstrap 中文文档_files/ie10-viewport-bug-workaround.js"></script>

		<!-- Analytics
================================================== -->
		<script type="text/javascript">
			var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
			document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fbdb993b828cbe079a7fbc1a951f44726' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script src="./Bootstrap 中文文档_files/h.js" type="text/javascript"></script>

		<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;"> <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1480038493700">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=v3.bootcss.com%2C%2F%2Fv3.bootcss.com%2Chttp%3A%2F%2Fv3.bootcss.com">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1480038493700" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=v3.bootcss.com%2C%2F%2Fv3.bootcss.com%2Chttp%3A%2F%2Fv3.bootcss.com" scale="exactfit">                </object></div>
	</body>

</html>