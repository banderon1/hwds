<!doctype html>
<html lang="en" xmlns:ng="http://angularjs.org" id="ng-app" ng-app="hwds">
<head>
  <meta charset="utf-8">
  <meta name="fragment" content="!" />
  <title>HWDS and Associates, Inc.</title>
  <link rel="stylesheet" href="css/app.css">
  <!--[if lte IE 8]>
  	<script src="/js/json3.js"></script>
  <![endif]-->
  <script src="/js/jquery.tools.min.js"></script>
  <script src="/js/jquery.tinyscrollbar.min.js"></script>
  <script src="/lib/angular/angular.min.js"></script>
  <script src="/lib/angular/angular-sanitize.min.js"></script>
  
  <link rel="stylesheet" href="css/awkward.css">
  <script type="text/javascript" src="/js/jquery.aw-showcase.min.js"></script>

  <script src="/js/swfobject.js"></script>
  <script src="/js/script.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-31040007-1']);
  	_gaq.push(['_trackPageview']);

  	(function() {
  		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  	})();
  </script>
</head>
<body popups-directive>
	<div id="entirepage">
	<div id="sections">
		<div id="logo"><a href="/"><img src="/images/logo.png" alt="HWDS Logo"></a></div>
		<ul id="nyMenu">
			<li>
				<div id="section1"/>The Firm</div>
				<ul id="section1drop">
					<li><a href="/ourfirm">The HWDS Team</a></li>
					<li><a href="#">Clients</a></li>
					<li><a href="#">Memberships</a></li>
				</ul>
			</li>
			<li>
				<div id="section2"/>The Work</div>
				<ul id="section2drop">
					<li><a href="/publications">Printed Publications</a></li>
					<li><a href="/promotions">Promotional</a></li>
					<li><a href="/interactive">Interactive/Online</a></li>
					<li><a href="/editorial">Editorial/Illustrations</a></li>
					<li><a href="#">Newsletters</a></li>
					<li><div rel="#ecardspopup">E-Cards</div></li>
					<li><div rel="#flipbookspopup"><a href="#">Flipbooks</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="#">Bilingual Publications</a></li>
					<li><a href="#">Multi-year Projects</a></li>
				</ul>
			</li>
			<li>
				<div id="section3"/>The Approach</div>
				<ul id="section3drop">
					<li><div rel="#advertisingpopup">Advertising</div></li>
					<li><div rel="#brandingpopup">Branding</div></li>
					<li><div rel="#promotingpopup">Promoting</div></li>
					<li><div rel="#webmarketingpopup">Web Marketing</div></li>
					<li><div rel="#greenpopup">Green Commitment</div></li>
				</ul>
			</li>
			<li>
				<a href="http://successfulcorporatecommunications.com/" target="_blank"><div id="section4"/>The Blog</div></a>
			</li>
			<li>
				<div id="section5"/>The Connection</div>
				<ul id="section5drop">
					<li><div rel="#contactuspopup">Contact Us</div></li>
					<li><a href="#">Request a Quote</a></li>
					<li><a href="#">Mini Sample Books</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div ng-view></div>
	<div id="footer">
		<div class="contact-links">
			<div class="social">
				<a target="_blank" href="http://www.linkedin.com/in/harlanwest"><img src="/images/linked-in.png" width="30" height="25"/></a>
				<a target="_blank" href="https://twitter.com/HWDSInc"><img src="/images/twitter.png" width="25" height="25"/></a>
			</div>
			<div class="personal">
				818.707.4455 <span class="green">&bull;</span> e-mail: <a href="mailto:hwdesign@west.net">hwdesign@west.net</a>
			</div>
		</div>
		<h1>
			HWDS is a full-service creative agency that provides innovative solutions for corporate, governmental and institutional clients.<br/>We design communitcation solutions for print, online, multi-media and event promotions.
		</h1>
		<div id="orange-bottom"></div>
		<div id="pages">
			<a href="/ourfirm">The HWDS Team</a>&nbsp;<span>&bull;</span>
			<div rel="#clientspopup">Clients</div>&nbsp;<span>&bull;</span>
			<a href="#">Memberships</a>&nbsp;<span>&bull;</span>
			<a href="/publications">Printed Publications</a>&nbsp;<span>&bull;</span>
			<a href="/interactive">Interactive/Online</a>&nbsp;<span>&bull;</span>
			<a href="/editorial">Editorial/Illustrations</a>&nbsp;<span>&bull;</span>
			<a href="#">Newsletters</a>&nbsp;<span>&bull;</span>
			<div rel="#ecardspopup">E-cards</div>&nbsp;<span>&bull;</span>
			<div rel="#flipbookspopup">Flipbooks</div>&nbsp;<span>&bull;</span>
			<a href="#">Events</a>&nbsp;<span>&bull;</span>
			<a href="#">Multi-year Projects</a><br/>
			<div rel="#advertisingpopup">Advertising</div>
			<div rel="#brandingpopup">Branding</div>
			<div rel="#promotingpopup">Promoting</div>
			<div rel="#webmarketingpopup">Web Marketing</div>
			<div rel="#greenpopup">Green Commitment</div>
			<a href="http://successfulcorporatecommunications.com/">The Blog</a>&nbsp;<span>&bull;</span>
			<div rel="#contactuspopup">Contact Us</div>
			<a href="#">Request A Quote</a>&nbsp;<span>&bull;</span>
			<a href="#">Mini Sample Books</s>
		</div>
	</div>

<?php include 'popups.php'; ?>

</body>
</html