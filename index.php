<?php
if(empty($_COOKIE['mobileok'])) {
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
        header('Location: /mobile/');
    }
}
?>
<!doctype html>
<html lang="en" xmlns:ng="http://angularjs.org" id="ng-app" ng-app="hwds">
<head>
  <meta charset="utf-8">
  <meta name="fragment" content="!" />
  <title>HWDS and Associates, Inc.</title>

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">

  <link rel="stylesheet" href="css/app.css?v=5">
  <!--[if lte IE 8]>
  	<script src="/js/json3.js?v=5"></script>
  	<link rel="stylesheet" href="css/ie8.css?v=5">
  <![endif]-->
  <link rel="stylesheet" href="/css/awkward.css?v=5">
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
	<div id="wrapper"><div id="entirepage">
		<div id="howmany_years">
			<img src="/images/howmanyyears.png" alt="Celebrating 26 years serving corporate clients." width="200" height="137" />
		</div>
		<div id="innerwrap">
		<!--[if lte IE 8]>
		    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a target="_blank" href="http://browsehappy.com/">upgrade your browser</a> or <a target="_blank" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<div id="sections">
			<div id="logo"><a href="/"><img src="/images/logo.png" alt="HWDS Logo"/></a></div>
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
					<div id="green_arrow">
						<img src="/images/greenarrow.png" alt="Check this out!" width="140" height="126" />
					</div>
					<div id="section2">The Work</div>
					<ul id="section2drop">
						<li><a href="/publications">Printed Publications</a></li>
						<li><a href="/promotions">Advertising &amp; Promotions</a></li>
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
					<a href="https://successfulcorporatecommunications.com/" target="_blank"><div id="section4">The Blog</div></a>
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
			<h1>
                <b>HWDS, a full-service, award-winning creative firm, designs, prints and develops innovative<br/>marketing solutions for large corporate, governmental and institutional clients.</b>
            </h1>

            <div id="contact-links">
				<div class="graylink"><a target="_self" href="/uploads/">Send Us Files</a></div>
				<div class="graylink"><a target="_self" href="/downloads/">Downloads</a></div>
                <div class="personal">
                    818.707.4455 <span class="green">&bull;</span> e-mail: <a href="mailto:hwdesign@west.net">hwdesign@west.net</a>
                </div>
                <div class="social">
                    <a target="_blank" href="https://www.facebook.com/HWDSinc"><img style="margin-right:5px;" alt="Facebook" src="/images/facebook.png" width="25" height="25"/></a>
                    <a target="_blank" href="http://www.linkedin.com/in/harlanwest"><img alt="LinkedIn" src="/images/linked-in.png" width="30" height="25"/></a>
                    <a target="_blank" href="https://twitter.com/HWDSInc"><img alt="Twitter" src="/images/twitter.png" width="25" height="25"/></a>
                </div>
			</div>

			<div id="marquee-holder">
				<span id="marquee-start">Current Projects include:</span>
				<div id="marquee">
                    <span id="marquee-text"><nobr>2016 State of the Commute Report for Metropolitan Washington &bull; Elevator Wraps for Kaiser Permanente Baldwin Park Medical Center &bull; Old Towne Orange Map Update &bull; Quarterly City of Orange Recreation Magazine &bull; On the Go Rideshare eNewsmagazine &bull; Norwalk Transit Dial&ndash;A&ndash;Ride Brochure &bull; Kaiser Permanente Fontana/Ontario Focus Newsletter &bull; </nobr></span>
				</div>
			</div>
		</div>
		<div id="popups-container"></div>
	</div></div></div>
<script src="/js/all.js?v=1"></script>
</body>
</html>
