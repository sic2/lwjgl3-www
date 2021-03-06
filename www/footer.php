<hr>

<footer class="container">
<nav class="row">
	<div class="col-md-3">
		<h3>About</h3>
		<ul class="list-unstyled fa-ul">
			<li><i class="fa-li fa fa-home"></i> <a href="/">Home</a></li>
			<li><i class="fa-li fa fa-info-circle"></i> <a href="/#start">About</a></li>
			<li><i class="fa-li fa fa-legal"></i> <a href="/license">License</a></li>
		</ul>
	</div>
	<div class="col-md-3">
		<h3>News</h3>
		<ul class="list-unstyled fa-ul">
			<li><i class="fa-li fa fa-newspaper-o"></i> <a href="http://blog.lwjgl.org/">Blog</a></li>
			<li><i class="fa-li fa fa-group"></i> <a href="http://forum.lwjgl.org/">Forum</a></li>
			<li><i class="fa-li fa fa-twitter"></i> <a href="https://twitter.com/lwjgl" rel="external nofollow">Twitter</a></li>
			<li><i class="fa-li fa fa-code"></i> <a href="https://github.com/LWJGL/lwjgl3/commits/master">ChangeLog</a></li>
		</ul>
	</div>
	<div class="col-md-3">
		<h3>Developers</h3>
		<ul class="list-unstyled fa-ul">
			<li><i class="fa-li fa fa-github"></i> <a href="https://github.com/LWJGL/lwjgl3">GitHub</a></li>
			<li><i class="fa-li fa fa-book"></i> <a href="https://github.com/LWJGL/lwjgl3-wiki/wiki">Wiki</a></li>
			<li><i class="fa-li fa fa-bug"></i> <a href="https://github.com/LWJGL/lwjgl3/issues">Issues</a></li>
			<li><i class="fa-li fa fa-file-code-o"></i> <a href="http://javadoc.lwjgl.org/">JavaDoc</a></li>
		</ul>
	</div>
	<div class="col-md-3">
		<h3>Sponsor</h3>
		<a href="http://www.webhotelier.net/" title="WebHotelier"><img width=143 height=30 src="https://dloycpjzg76ow.cloudfront.net/images/brand/webhotelier-logo@x2.png" alt="WebHotelier"></a>
	</div>
</nav>
</footer>

<section class="credits">
<div class="container">
	<p>Copyright &copy; 2012-2014 Lightweight Java Game Library Project. All rights reserved.</p>
</div>
</section>
<script>
"use strict";
(function() {
	function appendCss(url){
		var css = document.createElement('link');
		css.rel = "stylesheet";
		css.href = url;
		(document.head||document.getElementsByTagName('head')[0]).appendChild(css);
	}
	var win = navigator.userAgent.match(/Windows NT ([0-9]+\.[0-9]+)/);
	if ( win === null || parseFloat(win[1]) >= 6 ) {
		appendCss("//code.cdn.mozilla.net/fonts/fira.css");
	}
	appendCss("//cdn.jsdelivr.net/fontawesome/4.2.0/css/font-awesome.min.css");
})();
</script>
<?
if ( $_SERVER['SERVER_NAME'] == 'www.lwjgl.org' ) {
?><script async src="//www.google-analytics.com/analytics.js"></script>
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-83518-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script>
<?
}
?>
<script src="//cdn.jsdelivr.net/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<?
if ( isset($pageScript) ) {
	print $pageScript;
}
?>
</body>
</html>