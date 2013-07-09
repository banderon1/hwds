<!doctype html>
<html lang="en" xmlns:ng="http://angularjs.org" id="ng-app" ng-app="hwds">
<head>
  <meta charset="utf-8">
  <meta name="fragment" content="!" />
  <title>HWDS and Associates, Inc.</title>
  <link rel="stylesheet" href="css/app.css">
  <!--[if lte IE 8]>
  	<script src="/js/json3.js"></script>
  	<link rel="stylesheet" href="css/ie8.css">
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
	<div id="wrapper"><div id="entirepage"><div id="innerwrap">
		<!--[if lte IE 8]>
		    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a target="_blank" href="http://browsehappy.com/">upgrade your browser</a> or <a target="_blank" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<div id="sections">
			<div id="logo"><a href="/"><img src="/images/logo.png" alt="HWDS Logo"></a></div>
			<ul id="nyMenu">
				<li>
					<div id="section1">The Firm</div>
					<ul id="section1drop">
						<li><a href="/ourfirm">The HWDS Team</a></li>
						<li><div rel="#clientspopup">Clients</div></li>
						<li><a href="/memberships">Memberships</a></li>
					</ul>
				</li>
				<li>
					<div id="section2">The Work</div>
					<ul id="section2drop">
						<li><a href="/publications">Printed Publications</a></li>
						<li><a href="/promotions">Promotional</a></li>
						<li><a href="/identity">Identity</a></li>
						<li><a href="/interactive">Interactive/Online</a></li>
						<li><a href="/editorial">Editorial/Illustrations</a></li>
						<li><a href="/newsletters">Newsletters</a></li>
						<li><div rel="#ecardspopup">E-Cards</div></li>
						<li><div rel="#imagspopup">iMags/e-Pubs</div></li>
						<li><a href="/events">Events</a></li>
						<li><a href="/bilingual">Bilingual Publications</a></li>
						<li><div rel="#timelesspopup">Multi-year Projects</div></li>
					</ul>
				</li>
				<li>
					<div id="section3">The Approach</div>
					<ul id="section3drop">
						<li><div rel="#advertisingpopup">Advertising</div></li>
						<li><div rel="#brandingpopup">Branding</div></li>
						<li><div rel="#promotingpopup">Promoting</div></li>
						<li><div rel="#webmarketingpopup">Web Marketing</div></li>
						<li><div rel="#greenpopup">Green Commitment</div></li>
					</ul>
				</li>
				<li>
					<a href="http://successfulcorporatecommunications.com/" target="_blank"><div id="section4">The Blog</div></a>
				</li>
				<li>
					<div id="section5">The Connection</div>
					<ul id="section5drop">
						<li><a href="/contact">Contact Us</a></li>
						<li><div rel="#contactuspopup">Request A Quote</div></li>
						<li><a href="/minisamplebooks">Mini Sample Books</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div id="floatingCirclesG">
			<div class="f_circleG" id="frotateG_01"></div>
			<div class="f_circleG" id="frotateG_02"></div>
			<div class="f_circleG" id="frotateG_03"></div>
			<div class="f_circleG" id="frotateG_04"></div>
			<div class="f_circleG" id="frotateG_05"></div>
			<div class="f_circleG" id="frotateG_06"></div>
			<div class="f_circleG" id="frotateG_07"></div>
			<div class="f_circleG" id="frotateG_08"></div>
		</div>
		
		<div ng-view></div>
		
		<div id="footer">
			<div id="contact-links">
				<div class="social">
					<a target="_blank" href="http://www.linkedin.com/in/harlanwest"><img alt="LinkedIn" src="/images/linked-in.png" width="30" height="25"/></a>
					<a target="_blank" href="https://twitter.com/HWDSInc"><img alt="Twitter" src="/images/twitter.png" width="25" height="25"/></a>
					<div><a target="_blank" href="http://visitor.r20.constantcontact.com/d.jsp?llr=7qnrezcab&p=oi&m=1102502737436"><img alt="Subscribe to Newsletter" src="/images/subscribe-to-newsletter.png" width="87" height="33"/></a></div>
					<div rel="#promotionspopup"><img alt="Current Promotions" src="/images/current-promotions.png" width="87" height="33"/></div>
				</div>
				<div class="personal">
					818.707.4455 <span class="green">&bull;</span> e-mail: <a href="mailto:hwdesign@west.net">hwdesign@west.net</a>
				</div>
			</div>
			<h1>
				HWDS is a full-service creative agency that provides innovative solutions for corporate, governmental and institutional clients.<br/>We design communication solutions for print, online, multi-media and event promotions.
			</h1>
			<div id="orange-bottom"></div>
			<div id="pages">
				<a href="/ourfirm">The HWDS Team</a>&nbsp;<span>&bull;</span>
				<div rel="#clientspopup">Clients</div>&nbsp;<span>&bull;</span>
				<a href="/memberships">Memberships</a>&nbsp;<span>&bull;</span>
				<a href="/publications">Printed Publications</a>&nbsp;<span>&bull;</span>
				<a href="/identity">Identity</a>&nbsp;<span>&bull;</span>
				<a href="/interactive">Interactive/Online</a>&nbsp;<span>&bull;</span>
				<a href="/editorial">Editorial/Illustrations</a>&nbsp;<span>&bull;</span>
				<a href="/newsletters">Newsletters</a>&nbsp;<span>&bull;</span>
				<div rel="#ecardspopup">E-cards</div>&nbsp;<span>&bull;</span>
				<div rel="#imagspopup">iMags/e-Pubs</div>&nbsp;<span>&bull;</span>
				<a href="/bilingual">Bilingual</a><br/>
				<a href="/events">Events</a>&nbsp;<span>&bull;</span>
				<div rel="#timelesspopup">Multi-year Projects</div>
				<div rel="#advertisingpopup">Advertising</div>&nbsp;<span>&bull;</span>
				<div rel="#brandingpopup">Branding</div>&nbsp;<span>&bull;</span>
				<div rel="#promotingpopup">Promoting</div>&nbsp;<span>&bull;</span>
				<div rel="#webmarketingpopup">Web Marketing</div>&nbsp;<span>&bull;</span>
				<div rel="#greenpopup">Green Commitment</div>&nbsp;<span>&bull;</span>
				<a href="http://successfulcorporatecommunications.com/">The Blog</a>&nbsp;<span>&bull;</span>
				<a href="/contact">Contact Us</a>&nbsp;<span>&bull;</span>
				<div rel="#contactuspopup">Request A Quote</div>&nbsp;<span>&bull;</span>
				<a href="/minisamplebooks">Mini Sample Books</a>
			</div>
		</div>
<?php include 'popups.php'; ?>
	</div></div></div>
</body>
</html>