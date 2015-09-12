<?php

// grab recaptcha library
require_once('../contact-form/recaptcha/recaptchalib.php');
// your secret key
$secret = "6LfQCQoTAAAAAAWAxJSp5yQtUixKx1f23wVg1Gxl";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
	$response = $reCaptcha->verifyResponse(
		$_SERVER["REMOTE_ADDR"],
		$_POST["g-recaptcha-response"]
	);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Since 06' we've helped people just like you leverage the web to boost their business. Try before you buy- get your free web assessment & learn what works.">
	<meta name="keywords" content="web assessment, web marketing, web site design"/>
	<meta property="og:title" content="The New Media Group"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.thenewmediagroup.ca"/>
	<meta property="og:image" content="http://www.thenewmediagroup.ca/images/tnmg-logo.jpg"/>

	<title>Your local web marketing superheroes</title>

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../css/grayscale.css" rel="stylesheet">
	<link href="../css/tnmg.css" rel="stylesheet">
	<link href="../css/jquery.mThumbnailScroller.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">
				The New Media Group
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			<ul class="nav navbar-nav">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li>
					<a class="page-scroll" href="/#services">services</a>
				</li>
				<li>
					<a class="page-scroll" href="/#about">about</a>
				</li>
				<!--<li>
					<a href="/grow">grow</a>
				</li>-->
				<li>
					<a href="http://blog.thenewmediagroup.ca/blog">blog</a>
				</li>
				<li>
					<a class="page-scroll" href="#contact">contact</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="grow">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 copy-bubble col-xs-offset-1 col-xs-offset-1">
					<h1>Frustrated?</h1>

					<div class="hr"></div>
					<p class="intro-text">It's time to change you approach to web marketing</p>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Change Section -->
<section class="container section-grow">
	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<h1>Change</h1>

			<div class="hr"></div>
			<p>If any of the following apply, it's time to change your approach to how you're marketing your business.
				Doctor orders.</p>
			<ul class="change-list">
				<li> You're worried about staying competitive
				<li> You're feeling frustrated with results
				<li> You're unsure of how to improve your effectiveness
			</ul>
			<p> You can stop worrying right now, you're in good hands. We're here to show you exactly how to benefit
				from free online tools
				to effectively market your businesses.</p>
		</div>
	</div>
</section>

<div class="grow intro-adapt" id="adapt">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 copy-bubble col-xs-offset-1">
					<h1>Adapt to consumer <br> behaviour.</h1>

					<div class="hr"></div>
					<p class="intro-text">and watch your business blast off</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Stats Section-->
<section class="container section-grow">
	<div class="row adapt-section">
		<div class="col-xs-11 col-sm-12 text-center">
			<h1>Customers decide to buy from you <br><em>well</em> before you hear from them</h1>

			<div class="hr-left"></div>
			<div class="hr-right"></div>
			<div id="circle-wrapper">
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber statNumberSmall">84%</p>

							<p class="statText">of Canadians are connected to the internet BDC 2013</p>
						</div>
					</div>
				</div>
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber statNumberSmall">2.6</p>

							<p class="statText">Internet connected devices is the average per household BDC 2013</p>
						</div>
					</div>
				</div>
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber statNumberSmall">2.5</p>

							<p class="statText">Hours is the average time Canadians spend online a day ComScore,
								2014</p>
						</div>
					</div>
				</div>
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber statNumberSmall">90%</p>

							<p class="statText">of Canadian consumers use their smartphone to conduct pre-shopping
								research BDC 2013)</p>
						</div>
					</div>
				</div>
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber statNumberSmall">20</p>

							<p class="statText">20 hours is the average time Canadians 50 and older are spending online
								each month.
								(Comscore, 2014)</p>
						</div>
					</div>
				</div>
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber statNumberSmall">70%</p>

							<p class="statText">
								Of Canadians online trust consumer reviews.
								(BDC, 2013) </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="intro intro-competitive" id="competitive">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 copy-bubble col-xs-offset-1">
					<h1>How we can help.</h1>

					<div class="hr"></div>
					<p class="intro-text">We empower entrepreneurs<br> to effectively market their<br> businesses
						online.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Strategy Section -->
<section class="container section-grow">
	<div class="row strategy-section">
		<div class="col-xs-11 col-sm-7">
			<h1>Keeping you competitive</h1>

			<div class="hr"></div>
		</div>
		<div class="col-sm-6">
			<p>Many business people simple aren't taking advantage of the tremendous opportunities free web marketing
				tools offer to attract new businesses.</p>

			<p>Whether the resistance stems from a lack of understanding or a lack of confidence, the result are the
				same.</p>

			<p>Businesses that have not adapted to the change in consumer behaviour and embraced the internet for their
				marketing will fail to remain competitive.</p>
		</div>
		<div class="col-sm-6">
			<p>We help by conducting entertaining, engaging, and informative workshops that demystify internet
				marketing.</p>

			<p>Attendees are empowered by the practical tools and ongoing support they receive, allowing them to succeed
				in today's economy.</p>
		</div>
</section>

<!--Workshops Section -->
<section class="border-top workshops">
	<div class="container">
		<div class="row section-grow">
			<div class="col-sm-4">
				<h1 class="text-center">Workshops</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p> Attendees learn through real-life case<br> studies while practicing learned <br>techniques
					in-the-moment on their<br> devices. Ideal for individuals,<br> companies and groups.</p>
			</div>
			<div class="col-sm-4">
				<h1 class="text-center">Speaking</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p>Informative, Engaging & Entertaining <br> presentations that focus on the<br> practical & tactical
					aspects of web<br> marketing. Ideal for conferences,<br> business associations and companies.</p>
			</div>
			<div class="col-sm-4">
				<h1 class="text-center">Training</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p>Learn by doing while you're supported <br>step-by-step. Ideal for individuals,<br> companies and
					groups.</p>
			</div>
		</div>
	</div>
</section>

<div class="intro intro-saying">
	<div class="saying">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8">
					<h1>What people<br> are saying</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Quotes Section-->
<section class="section-grow">
	<div class="container">
		<div class="row ">
			<div class="col-xs-12 logo">
				<div class="col-xs-12 col-sm-3">
					<img id="rru" style="margin:0px auto;" class="img-responsive" src="../images/RRU_Logo.png" alt="RRU"></a>
				</div>
				<div class="col-xs-12 col-sm-3">
					<img id="uw" style="margin:40px auto;" class="img-responsive" src="../images/Hand_Logo.png" alt="Hand">
				</div>
				<div class="col-xs-12 col-sm-3">
					<img id="sidney" style="margin:40px auto;" class="img-responsive" src="../images/Sidney_Logo.png" alt="Sidney">
				</div>
				<div class="col-xs-12 col-sm-3">
					<img id="social" style="margin:40px auto;" class="img-responsive" src="../images/Social_Logo.png" alt="Social"></a>
				</div>

				<img id="smc-quote" class="img-responsive" style="margin:0px auto;" src="../images/smc-quote.png" alt="Sidney Quote">

				<img id="sidney-quote" class="img-responsive" style="margin:0px auto;" src="../images/sbia-quote.png" alt="Sidney Quote">
				<img id="uw-quote" class="img-responsive" style="margin:0px auto;" src="../images/united-way-quote.png" alt="United Way Quote">
				<img id="rru-quote" class="img-responsive" style="margin:0px auto;" src="../images/rru-quote.png" alt="RRU Quote">


			</div>
		</div>
	</div>
</section>
<section class="container section-grow" style="margin-bottom:0px;">
	<div class="row">
		<div class="col-xs-6">
			<h1>Why Laurel?</h1>

			<div class="hr"></div>
		</div>
		<div class="col-xs-12">
			<p>Each presentation is designed to ensure your attendees leave with everything they need to start effective
				web marketing, right away.</p>
		</div>
	</div>
</section>
<div id="laurel-scroller" class="mThumbnailScroller scroller-ready" data-mts-axis="x">
	<ul>
		<li><a href="image-1-link"><img src="/images/scroller/1.jpg"/></a></li>
		<li><a href="image-2-link"><img src="/images/scroller/2.png"/></a></li>
		<li><a href="image-3-link"><img src="/images/scroller/3.jpg"/></a></li>
		<li><a href="image-4-link"><img src="/images/scroller/4.jpg"/></a></li>
		<li><a href="image-5-link"><img src="/images/scroller/5.jpeg"/></a></li>
		<li><a href="image-6-link"><img src="/images/scroller/6.jpg"/></a></li>
		<!-- and so on... -->
	</ul>
</div>
<!--Why Laurel Section -->
<section class="section-grow text-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h1 class="text-center">Expert</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p>Benefit from over 10 years <br>of hands-on, real world<br> business experience marketing<br> hundreds
					of businesses</p>
			</div>
			<div class="col-sm-4">
				<h1 class="text-center">Engaging</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p>Attendees learn by doing, practicing<br> what they've learned on the spot.</p>
			</div>
			<div class="col-sm-4">
				<h1 class="text-center">Practical</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p>Each concept is simplified into<br> digestibel, easy to understand<br> segments and practical,
					day-to-day<br>action steps.</p>
			</div>
			<div class="col-sm-4">
				<h1 class="text-center">Relevant</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p>Presentations feature up to date <br>information and materials that are <br>relevant to your
					audience's <br>experience levels - speaking directly <br>to their needs.</p>
			</div>
			<div class="col-sm-4">
				<h1 class="text-center">Supportive</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p>Attendees are given the space to have<br> their questions answered at the <br>conclusion of the
					presentation<br> segments of the workshop.</p>

				<p>Take-home and ongoing resources are<br>also provided, ensuring your<br>participants are fully
					supported while<br>implementing what they've learned.</p>
			</div>
			<div class="col-sm-4">
				<h1 class="text-center">Practical</h1>

				<div class="hr-left"></div>
				<div class="hr-right"></div>
				<p>Each concept is simplified into<br> digestibel, easy to understand<br> segments and practical,
					day-to-day<br>action steps.</p>
			</div>
		</div>
	</div>
</section>
<!--Stats Section-->
<section class="container section-grow" style="margin-bottom:0px;">
	<div class="bg-green">
		<h1>Topics</h1>
	</div>
</section>
<section class="bg-green">
	<div class="container">
		<div class="row adapt-section">
			<div id="circle-wrapper">
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber">17</p>

							<p class="statText">Social in 17 - Effectively market your business on social media in just 17 minutes a day</p>
						</div>
					</div>
				</div>
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber">101</p>
							<p class="statText">Web marketing 101 - Effectively market businesses online using today's cutting edge technology.</p>
						</div>
					</div>
				</div>
				<div class="statsWrap">
					<div class="stats">
						<div class="statDummy"></div>
						<div class="statInfo">
							<p class="statNumber">0</p>
							<p class="statText">Qualms designing a custom program, just for you. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="section-grow col-xs-11 col-xs-offset-1 as-seen-on">
	<h4>As seen on:</h4>

	<div class="col-xs-12 col-sm-2">
		<a href="/cnn-interview-social-proof-how-it-affects-consumer-buying-decisions/"><img style="margin:0 auto;" src="../images/cnn.jpg" alt="CNN"></a>
	</div>
	<div class="col-xs-12 col-sm-3">
		<a href="https://www.youtube.com/watch?v=VL7NAoh8cjs"><img style="margin:0 auto;" class="img-responsive" src="../images/entrepreneur.jpg" alt="Entrepreneur"></a>
	</div>
	<div class="col-xs-12 col-sm-3">
		<a href="https://www.youtube.com/watch?v=U7BfBCRBCUU"><img style="margin:0 auto;" class="img-responsive" src="../images/shaw.jpg" alt="Shaw"></a>
	</div>
	<div class="col-xs-12 col-sm-3">
		<a href="http://bit.ly/1f9LEsY"><img style="margin:0 auto;" width=97 height=57 class="img-responsive" src="../images/ctv.jpg" alt="CTV"></a>
	</div>
</div>
<div id="contact" class="col-xs-11 col-xs-offset-1 contact-us">
	<div class="row">
		<div class="col-xs-12 col-sm-5">
			<a href="https://www.youtube.com/channel/UCS7tvlvCU3rmRaZU_88NfBg"><img src="../images/youtube.jpg" alt="YouTube"></a>
			<a href="https://www.facebook.com/thenewmediagroup"><img src="../images/facebook.jpg" alt="Facebook"></a>
			<a href="https://twitter.com/new_media_group"><img src="../images/twitter.jpg" alt="Twitter"></a>
			<a href="https://plus.google.com/+ThenewmediagroupCa/posts"><img src="../images/google.jpg" alt="Google"></a>
			<a href="https://www.pinterest.com/newmediagroup/"><img src="../images/pinterest.jpg" alt="Pinterest"></a>

			<h3>Contact Us</h3>

			<div class="hr"></div>
			<div class="contact-us-phone">
				<h5>Phone/text</h5>

				<div>Calgary: (403) 614-6708</div>
				<div>Victoria: (250) 216-5039</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-5 col-sm-offset-1">
			<?php include('../contact-form/index.php'); ?>
		</div>
	</div>
</div>
</div>
</section>

<!-- Footer -->
<footer>
	<div class="container text-center">
		<p>Copyright &copy; The New Media Group 2015</p>
	</div>
</footer>

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../js/jquery.easing.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/grayscale.js"></script>

<!-- NMG Custom JavaScript -->
<script src="../js/nmg.js"></script>

<!-- Scroller -->
<script src="../js/jquery.mThumbnailScroller.min.js"></script>

</body>

</html>
