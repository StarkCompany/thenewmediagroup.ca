<?php

// grab recaptcha library
require_once( 'contact-form/recaptcha/recaptchalib.php' );
// your secret key
$secret = "6LfQCQoTAAAAAAWAxJSp5yQtUixKx1f23wVg1Gxl";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha( $secret );

// if submitted check response
if ( $_POST["g-recaptcha-response"] ) {
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
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/grayscale.css" rel="stylesheet">
	<link href="css/tnmg.css" rel="stylesheet">

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
			<a href=" https://www.google.com/partners/?hl=en-US#a_profile;idtf=3839711645"><img id="googlepartner" src="/images/partnerbadge.png" class="img-responsive" width="100"/></a>
			<ul class="nav navbar-nav">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li>
					<a class="page-scroll" href="#services">services</a>
				</li>
				<li>
					<a class="page-scroll" href="#about">about</a>
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
<header class="intro">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h1>Welcome to the neighbourhood</h1>
					<div class="hr"></div>
					<p class="intro-text">Your community is about to get a whole lot bigger.</p>
				</div>
			</div>
		</div>
	</div>
</header>


<!-- Services Section -->
<section class="container" id="services" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-6 col-sm-4 col-xs-offset-1 title-bubble">
			<h1>Services</h1>
		</div>
	</div>
	<div class="row">
		<a href="#strategy" class="col-xs-12 col-sm-6 col-md-3 service-item page-scroll">
			<div class="avatar avatar-strategy"></div>
			<div class="title-wrapper">
				<div>Strategy</div>
			</div>
			<div class="content">The Internet is not a marketing plan. To succeed and grow you need a data-driven
				strategic plan designed for your market and your products and services.
			</div>
		</a>
		<a href="#management" class="col-xs-12 col-sm-6 col-md-3 service-item page-scroll">
			<div class="avatar avatar-marketing-management"></div>
			<div class="title-wrapper">
				<div>Marketing<br>Management</div>
			</div>
			<div class="content">Often a key to success is knowing what not to do. Why not leave your online marketing
				to the experts, so you can focus on what makes your business great?
			</div>
		</a>
		<a href="#search" class="col-xs-12 col-sm-6 col-md-3 service-item page-scroll">
			<div class="avatar avatar-search-marketing"></div>
			<div class="title-wrapper">
				<div>Search<br>Marketing</div>
			</div>
			<div class="content">Full service search marketing puts you right in front of the people that are looking
				for your products and services, and keeps you there, driving customers each day.
			</div>
		</a>
		<a href="#social" class="col-xs-12 col-sm-6 col-md-3 service-item page-scroll">
			<div class="avatar avatar-social-marketing"></div>
			<div class="title-wrapper">
				<div>Social<br>Marketing</div>
			</div>
			<div class="content">Social media sites have become so much more than pictures of cats. The power of
				“personal” recommendation and referral is a leading driver of new and repeat business today.
			</div>
		</a>
		<a href="#web" class="col-xs-12 col-sm-6 col-md-3 service-item page-scroll">
			<div class="avatar avatar-web-development"></div>
			<div class="title-wrapper">
				<div>Web<br>Development</div>
			</div>
			<div class="content">Don't let a bad website turn away your prospects. We create sites that capture the
				essence of your business, and give you credibility in the customer's mind before you've even met.
			</div>
		</a>
		<a href="#mobile" class="col-xs-12 col-sm-6 col-md-3 service-item page-scroll">
			<div class="avatar avatar-mobile-marketing"></div>
			<div class="title-wrapper">
				<div>Mobile<br>Marketing</div>
			</div>
			<div class="content">Mobile marketing is much more than a website that looks good on an iPhone. There is
				unmatched marketing potential because of the special relationship that people have with their phones.
			</div>
		</a>
		<a href="#training" class="col-xs-12 col-sm-6 col-md-3 service-item page-scroll">
			<div class="avatar avatar-training"></div>
			<div class="title-wrapper">
				<div>Training</div>
			</div>
			<div class="content">Most of us like learning new things. Once your online marketing strategy is in place
				and your website and social media is delivering results, we can show you how to keep it working.
			</div>
		</a>
		<a href="#team" class="col-xs-12 col-sm-6 col-md-3 service-item page-scroll">
			<div class="avatar avatar-the-team"></div>
			<div class="title-wrapper">
				<div>The Team</div>
			</div>
			<div class="content">We can provide white-glove service that delivers impressive results because of the
				people we've brought together. We have all of the elements of a world-class marketing team under one
				virtual roof.
			</div>
		</a>
	</div>
</section>

<div class="intro intro-strategy" id="strategy">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>When you don't know<br>what you don't know</h3>
					<div class="hr"></div>
					<p class="intro-text">We keep you informed so you can make better business decisions.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-strategy" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-strategy"></div>
			<div class="title-wrapper">
				<div>Strategy</div>
			</div>
		</div>
	</div>
	<div class="row strategy-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>Our strategic assessment creates the foundation upon which you business will grow.</h3>
			<div class="hr"></div>
			<p>Learn what it takes to establish and maintain your credibility. You'll learn how to be found online, how
				to communicate with your audience, and how to promote your business effectively -- you'll get new
				customers, and you'll delight the ones you have. We'll provide a comprehensive analysis of your
				competitive landscape and market demand for your products and services as part of a turnkey strategic
				marketing plan.</p>
		</div>
	</div>
</section>

<div class="intro intro-management" id="management">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>Trying to do everything<br>accomplishes nothing</h3>
					<div class="hr"></div>
					<p class="intro-text">Let us do what we do best so you keep doing what you do best.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-management" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-marketing-management"></div>
			<div class="title-wrapper">
				<div>Marketing<br>Management</div>
			</div>
		</div>
	</div>
	<div class="row strategy-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>We give your business the experience and skills of a seasoned, complete marketing team.</h3>
			<div class="hr"></div>
			<p>Full service marketing, done for you by a team of experts, means peace of mind. Once your marketing
				strategy is refined to clearly show what approaches and techniques are right for your business, we
				provide exactly what you need. From search engine ad campaigns to content creation to social media
				management, everything is measured by our performance reporting, so you can watch the needles move.</p>
		</div>
	</div>
</section>

<div class="intro intro-search" id="search">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>Get found</h3>
					<div class="hr"></div>
					<p class="intro-text">The Internet is a big place. We make sure you always get found.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-search" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-search-marketing"></div>
			<div class="title-wrapper">
				<div>Search<br>Marketing</div>
			</div>
		</div>
	</div>
	<div class="row search-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>You need to be found where your customers are searching for you.</h3>
			<div class="hr"></div>
			<p>Search marketing is a combination of exposure in the right places and the messaging that creates and
				maintains credibility in the eyes of your prospects. We've mastered the art of organic on-site and
				off-site search engine optimization so you can attract and engage your ideal customers. We cover all
				aspects of localized search and ad creation, monitoring and optimization.</p>
		</div>
	</div>
</section>

<div class="intro intro-social" id="social">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>Be a part of the<br>conversation</h3>
					<div class="hr"></div>
					<p class="intro-text">Your customers are social creatures. We make sure you speak their
						language.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-social" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-social-marketing"></div>
			<div class="title-wrapper">
				<div>Social<br>Marketing</div>
			</div>
		</div>
	</div>
	<div class="row social-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>Consumers look to social media and online communities to make nearly every purchase decision today.</h3>
			<div class="hr"></div>
			<p>Effective social media marketing engages customers in a conversation, and leverages the enormous power of
				online recommendation and referral. Success of both new and repeat business is enhanced significantly by
				“raving fans”, and your business will have them if you master the tone, consistency and friendly
				engagement style that a superior social media marketing campaign provides.</p>
		</div>
		<div class="col-xs-3 sub-bg sub-bg-social"></div>
	</div>
</section>

<div class="intro intro-web" id="web">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>Beef up your business<br>with a fresh website</h3>
					<div class="hr"></div>
					<p class="intro-text">Spinach won't lift your bottom line. A new website will.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-web" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-web-development"></div>
			<div class="title-wrapper">
				<div>Web<br>Development</div>
			</div>
		</div>
	</div>
	<div class="row web-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>A properly implemented website is your best performing salesperson.</h3>
			<div class="hr"></div>
			<p>A website makes a huge difference in how you are perceived, and that perception is typically generated in
				under three seconds. Your website tells your prospective customer how professional you are, how much you
				understand their needs, and even how smart you are. We provide professionally written, search engine
				optimized sites that tell your customer they've found what they're looking for.</p>
		</div>
	</div>
</section>

<div class="intro intro-mobile" id="mobile">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>Keep up</h3>
					<div class="hr"></div>
					<p class="intro-text">Your customers are on the go, and mobile marketing ensures you don't get left
						behind.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-mobile" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-mobile-marketing"></div>
			<div class="title-wrapper">
				<div>Mobile<br>Marketing</div>
			</div>
		</div>
	</div>
	<div class="row mobile-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>No other channel offers you a better relationship with your customers than the smartphone in their
				hands.</h3>
			<div class="hr"></div>
			<p>The numbers are staggering: studies show we look at our phones over 100 times each day! Almost all text
				messages get opened, and 91% of them are read within three minutes of being received. Email can't do
				that. Talk with us about how a mobile marketing campaign fits with your business, and how the unmatched
				intimacy this channel provides can keep you in a special place -- top of mind.</p>
		</div>
	</div>
</section>

<div class="intro intro-training" id="training">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>Educated guesses are<br>much better than guesses</h3>
					<div class="hr"></div>
					<p class="intro-text">We'll help you with your homework so you'll always have the answers.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-training" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-training"></div>
			<div class="title-wrapper">
				<div>Training</div>
			</div>
		</div>
	</div>
	<div class="row training-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>Once you get the hang of it, you may want to do your own online marketing. We'll show you how.</h3>
			<div class="hr"></div>
			<p>If you want a full service marketing team for the foreseeable future, we are here for you. However, if
				you want to learn the skills you'll need to monitor and manage your online presence, we'll share the
				knowledge with you. Our experts can help you learn how to keep things running smoothly by showing you
				the tricks of the trade and the tried-and-true methods of ongoing professional marketing execution.</p>
		</div>
	</div>
</section>

<div class="intro intro-team" id="team">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>Not your average<br>full service agency</h3>
					<div class="hr"></div>
					<p class="intro-text">Our team of marketing superheroes will lift your business to new heights.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-team" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-the-team"></div>
			<div class="title-wrapper">
				<div>The Team</div>
			</div>
		</div>
	</div>
	<div class="row team-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>We are a team of veteran leaders, online strategists, marketers, designers and technologists.</h3>
			<div class="hr"></div>
			<p>No-one is good at everything. The online world has some pretty complex nooks and crannies, too. We have
				been working in these places and learning the ropes for over 10 years, so now we have all the pieces in
				place to deliver expertly-informed, best-of-breed strategies, designs, campaigns and site, mobile and
				social programs for businesses of any size, in any market. </p>
		</div>
	</div>
</section>

<div class="intro intro-about" id="about">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-11 col-sm-6 col-md-4 col-xs-offset-1 copy-bubble">
					<h3>The full umbrella of web services since 2006</h3>
					<div class="hr"></div>
					<p class="intro-text">We harness the power of communication to strengthen and grow business.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="container content-section content-about" data-scroll-offset="-75">
	<div class="row">
		<div class="col-xs-7 col-sm-2 col-xs-offset-1 title-bubble">
			<div class="avatar avatar-about"></div>
			<div class="title-wrapper">
				<div>About Us</div>
			</div>
		</div>
	</div>
	<div class="row about-section">
		<div class="col-xs-11 col-md-8 col-xs-offset-1">
			<h3>We've helped hundreds of businesses leverage the power of the web to boost their sales.</h3>
			<div class="hr"></div>
			<p>But don't just take our word for it. Click any of the links below to hear it from our clients.</p>
			<ul>
				<li><a href="http://thenewmediagroup.ca/internet-marketing-service-results-case-studies-calgary/">Case
						Studies</a></li>
				<li><a href="https://ca.linkedin.com/in/laurellindsay">LinkedIn</a></li>
				<li><a href="/internet-marketing-service-results-calgary/">See All Recommendations</a></li>
			</ul>
		</div>
		<div class="col-xs-12 quotes">
			<div class="row">
				<div class="col-xs-11 col-sm-5 col-md-3 col-xs-offset-1 quote">
					<h4 class="quote-text">The impact on sales has been huge!</h4>
					<div class="quote-name">Jeff Nechka</div>
					<div class="quote-title">Owner/Gemologist Premier Gems Ltd.</div>
				</div>
				<div class="col-xs-11 col-sm-5 col-md-3 col-xs-offset-1 col-md-offset-0 quote">
					<h4>They've increased our sales drastically</h4>
					<div class="quote-name">Henry de Kok</div>
					<div class="quote-title">Co-Owner Premier Custom Homes &amp; Premier Woodworking</div>
				</div>
				<div class="col-xs-11 col-sm-5 col-sm-offset-1 col-md-3 col-xs-offset-1 col-md-offset-0 quote">
					<h4>It was surprising how fast we got the exposure we needed</h4>
					<div class="quote-name">Mike Gratton</div>
					<div class="quote-title">Owner B and F Auto Electric</div>
				</div>
			</div>
		</div>
</section>
<?php include('footer.php');?>