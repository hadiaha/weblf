<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Latief Foundation Korda Wonosobo | Bersama kita cerdaskan bangsa!!</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>


<!-- Styles -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/sea-green.css" title="sea-green" />





<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


<!-- Scripts -->
<script src="js/jquery.1.9.1.js" type="text/javascript"></script>
<script src='js/testimonials.js'></script>

<script src='js/script.js'></script>
<script src='js/bootstrap.js'></script>
<script src="js/html5lightbox.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>
		
		
<!-- Scripts For Layer Slider  -->
<script src="layerslider/JQuery/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="layerslider/JQuery/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#layerslider').layerSlider({
			skinsPath : 'layerslider/skins/',
			skin : 'defaultskin',
			responsive: true,
			responsiveUnder: 1200,			
			pauseOnHover: false,
			showCircleTimer: false,
			navStartStop:false,
			navButtons:false,
		}); //LAYER SLIDER
		
		
		$('#layerslider2').layerSlider({
			skinsPath : 'layerslider/skins/',
			skin : 'defaultskin',
			responsive: true,
			pauseOnHover: false,
			showCircleTimer: false,
			navStartStop:false,
			navButtons:false,
		}); // LAYER SLIDER 2

		$('#layerslider3').layerSlider({
			skinsPath : 'layerslider/skins/',
			skin : 'defaultskin',
			responsive: true,
			pauseOnHover: false,
			showCircleTimer: false,
			navStartStop:false,
			navButtons:false,
		}); // LAYER SLIDER 3

		$('#post-carousel').carouFredSel({
		auto: false,
		prev: '#prev5',
		next: '#next5',
		items: {
			visible: 1,
		},
	});

	});		
	
</script>	
<script>
$(window).load(function(){
  $('.shop').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: false,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,	
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});

	$('.posts-carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: false,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,	
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
});
</script>
</head>
<body>
<div class="theme-layout">
<div id="top-bar">
	<div class="container">
		<ul>
			<li>
				<i class="icon-home"></i>
				425 Street Name, UK, London
			</li>
			<li>
				<i class="icon-phone"></i>
				(123) 456-7890
			</li>
			<li>
				<i class="icon-envelope"></i>
				contact@companymail.com
			</li>
		</ul> 
		<div class="search-box">
			<input class="submit-button" type="submit" value="" >
			<input class="search-input" type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';"  value="Search">
		</div>
	</div>
</div><!--top bar-->


<header class="sticky">
	<div class="container">
		<div class="logo">
			<a href="#" title=""><img src="images/logo.png" alt="Logo" /><h1><i>L</i>ifeline</h1></a>
		</div><!-- Logo -->
		<nav class="menu">
			<ul id="menu-navigation">
				<li class="active"><a>Home</a>
					<ul>
						<li><a href="index.html" title="">Home Simple 1</a></li>
						<li><a href="index2.html" title="">Home Modern Style</a></li>
						<li><a href="index3.html" title="">Home Simple 2</a></li>
						<li><a href="index4.html" title="">Home Simple 3</a></li>
						<li><a href="index7.html" title="">Home Traditional Style</a></li>
						<li><a href="index5.html" title="">Home With Video</a></li>
						<li><a href="index6.html" title="">Home With Portfolio</a></li>
						<li><a><strong>Header Styles</strong></a>
							<ul>
								<li><a href="sticky-menu.html" title="">Sticky Header</a></li>
								<li><a href="menu-below-slider.html" title="">Menu Below Slider</a></li>
								<li><a href="middle-logo.html" title="">With Logo In The Mid</a></li>
								<li><a href="index5.html" title="">Toggle Header</a></li>
						</ul>
						</li>
					</ul><!-- Drop Down -->
				</li>
				<li><a>Pages</a>
					<ul class="mega-menu">
						<li><a href="about.html" title="">About Wide</a></li>
						<li><a href="contact.html" title="">Contact Wide</a></li>
						<li><a href="profile-single-page.html" title="">Profile Single Page</a></li>
						<li><a>Events</a>
							<ul class="drop-right">
								<li><a href="events.html" title="">Right Sidebar</a></li>
								<li><a href="events-left-sidebar.html" title="">Left Sidebar</a></li>
								<li><a href="single-event-page.html" title="">Event Single Page</a></li>
							</ul>
						</li>
						<li><a href="successful-stories.html" title="">Successful Stories Wide</a></li>
						<li><a href="projects.html" title="">On Going Projects Wide</a></li>
						<li><a href="404.html" title="">404 Page Wide</a></li>
						<li><a href="causes.html" title="">Our Causes Wide</a></li>
						<li><a href="single-causes.html" title="">Causes Single Page</a></li>
						<li><a href="services-single.html" title="">Service Single Page</a></li>
						<li><a>Search With Right Sidebar</a>
							<ul>
								<li><a href="search-found.html" title="">Search Results Found</a></li>
								<li><a href="nothing-found.html" title="">Search Result Not Found</a></li>
							</ul>
						</li>
						<li><a>Search With Left Sidebar</a>
							<ul class="drop-right">
								<li><a href="search-found-left-sidebar.html" title="">Search Results Found</a></li>
								<li><a href="nothing-found-left-sidebar.html" title="">Search Result Not Found</a></li>
							</ul>
						</li>
					</ul><!-- Drop Down -->				
				</li>
				<li><a>Cart</a>
					<ul>
						<li><a>My Cart</a>
							<ul class="drop-right">
								<li><a href="cart.html" title="">Right Sidebar</a></li>
								<li><a href="cart-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>
						<li><a>Products</a>
							<ul class="drop-right">
								<li><a href="products.html" title="">Right Sidebar</a></li>
								<li><a href="products-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>
						<li><a>Checkout</a>
							<ul class="drop-right">
								<li><a href="checkout.html" title="">Right Sidebar</a></li>
								<li><a href="checkout-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>
						<li><a>Order Recieved</a>
							<ul class="drop-right">
								<li><a href="order-recieved.html" title="">Right Sidebar</a></li>
								<li><a href="order-recieved-left-sidebar.html" title="">Left Sidebar</a></li>
							</ul>
						</li>
						<li><a href="single-product.html"  title="">Product Single Page</a></li>
					</ul>
				</li>
				<li><a>Portfolio</a>
					<ul>
						<li><a href="portfolio-2-column.html" title="">2 Column Wide</a></li>
						<li><a href="portfolio-3-column.html" title="">3 Column Wide</a></li>
						<li><a href="portfolio-4-column.html" title="">4 Column Wide</a></li>
					</ul>
				</li>
				<li><a>Gallery</a>
					<ul>
						<li><a href="gallery-one-column.html" title="">1 Column Wide</a></li>
						<li><a href="gallery-two-column.html" title="">2 Column Wide</a></li>
						<li><a href="gallery-three-column.html" title="">3 Column Wide</a></li>
						<li><a href="gallery-four-column.html" title="">4 Column Wide</a></li>
						<li><a>Right Sidebar</a>
							<ul class="drop-right">
								<li><a href="gallery-one-column-with-sidebar.html" title="">1 Column</a></li>
								<li><a href="gallery-two-column-with-sidebar.html" title="">2 Column</a></li>
								<li><a href="gallery-three-column-with-sidebar.html" title="">3 Column</a></li>
							</ul>
						</li>
						<li><a>Left Sidebar</a>
							<ul class="drop-right">
								<li><a href="gallery-one-column-with-left-sidebar.html" title="">1 Column</a></li>
								<li><a href="gallery-two-column-with-left-sidebar.html" title="">2 Column</a></li>
								<li><a href="gallery-three-column-with-left-sidebar.html" title="">3 Column</a></li>
							</ul>
						</li>
					</ul><!-- Drop Down -->
				</li>
				<li><a>Blog</a>
					<ul>
						<li><a href="blog-without-sidebar.html" title="">Blog Wide</a></li>
						<li><a href="blog-with-sidebar.html" title="">Blog With Left Sidebar</a></li>
						<li><a href="blog-with-left-sidebar.html" title="">Blog With Right Sidebar</a></li>
						<li><a>Single Posts Right Sidebar</a>
							<ul class="drop-right">
								<li><a href="single-post-image.html" title="">Single Post With Image</a></li>
								<li><a href="single-post-video.html" title="">Single Post With Video</a></li>
								<li><a href="single-post-slider.html" title="">Single Post With Slider</a></li>
								<li><a href="single-post-project.html" title="">Project Single Post</a></li>
							</ul>
						</li>
						<li><a>Single Posts Left Sidebar</a>
							<ul class="drop-right">
								<li><a href="single-post-image-left-sidebar.html" title="">Single Post With Image</a></li>
								<li><a href="single-post-video-left-sidebar.html" title="">Single Post With Video</a></li>
								<li><a href="single-post-slider-left-sidebar.html" title="">Single Post With Slider</a></li>
								<li><a href="single-post-project-left-sidebar.html" title="">Project Single Post</a></li>
							</ul>
						</li>
						
					</ul><!-- Drop Down -->
				</li>
				<li><a href="elements.html">Features</a>
					<ul class="drop-right">
						<li><a href="elements.html#tabs-style">4 Tabs Style</a></li>
						<li><a href="elements.html#accordions-style">2 Accordions</a></li>
						<li><a href="elements.html#blockquotes-style">2 Block Qoutes</a></li>
						<li><a href="elements.html#highlightedtext">HighLighted Text</a></li>
						<li><a href="elements.html#buttons-style">6 Buttons Sets</a></li>
						<li><a href="elements.html#list-styles">List Styles</a></li>
						<li><a href="elements.html#alertboxes">Alert Boxes</a></li>
						<li><a href="elements.html#dropcap">Dropcap Variations</a></li>
						<li><a href="elements.html#socialicons">Social Icons</a></li>
						<li><a href="elements.html#alignedimages">Aligned Images</a></li>
						<li><a href="elements.html#progressbars">2 Progress Bars</a></li>
						<li><a href="elements.html#pricetable">Price Tables</a></li>
						<li><a href="elements.html#columnsstyle">Columns Style</a></li>
					</ul>
				</li>
			</ul>   
		</nav><!-- Menu -->
			
	<select class="ipadMenu">
		<option value="">Menu</option>
		<option value="index.html">Home Simple 1</option>
		<option value="index2.html">Home Modern Style</option>
		<option value="index3.html">Home Simple 2</option>
		<option value="index4.html">Home Simple 3</option>
		<option value="index7.html">Home Traditional Style</option>
		<option value="index5.html">Home With Video</option>
		<option value="index6.html">Home With Portfolio</option>
		<option value="sticky-menu.html">Sticky Header</option>
		<option value="menu-below-slider.html">Menu Below Slider</option>
		<option value="middle-logo.html">With Logo In The Mid</option>
		<option value="index5.html">Toggle Header</option>
		<option value="about.html">About Wide</option>
		<option value="contact.html">Contact Wide</option>
		<option value="events-left-sidebar.html">Events With Left Sidebar</option>
		<option value="events.html">Events With Right Sidebar</option>
		<option value="single-event-page.html">Events Single Page</option>
		<option value="successful-stories.html">Successful Stories Wide</option>
		<option value="projects.html">On Going Project Wide</option>
		<option value="404.html">404 Page Wide</option>
		<option value="causes.html">Our Causes Wide</option>
		<option value="single-causes.html">Our Causes Single</option>
		<option value="services-single.html">Services Single Page</option>
		<option value="search-found.html">Search Found With R.Sidebar</option>
		<option value="search-found-left-sidebar.html">Search Found With L.Sidebar</option>
		<option value="nothing-found.html">Nothing Found With R.Sidebar</option>
		<option value="cart.html">My Cart With R.Sidebar</option>
		<option value="cart-left-sidebar.html">My Cart With L.Sidebar</option>
		<option value="products.html">Products With R.Sidebar</option>
		<option value="products-left-sidebar.html">Products With L.Sidebar</option>
		<option value="checkout.html">Checkout With R.Sidebar</option>
		<option value="checkout-left-sidebar.html">Checkout With L.Sidebar</option>
		<option value="order-recieved.html">Order Recieved With R.Sidebar</option>
		<option value="order-recieved-left-sidebar.html">Order Recieved With L.Sidebar</option>
		<option value="single-product.html">Products Single Page</option>
		<option value="portfolio-2-column.html">Portfolio 2 Col</option>
		<option value="portfolio-3-column.html">Portfolio 3 Col</option>
		<option value="portfolio-4-column.html">Portfolio 4 Col</option>
		<option value="gallery-one-column.html">Gallery 1 Col Wide</option>
		<option value="gallery-two-column.html">Gallery 2 Col Wide</option>
		<option value="gallery-three-column.html">Gallery 3 Col Wide</option>
		<option value="gallery-four-column.html">Gallery 4 Col Wide</option>
		<option value="gallery-one-column-with-sidebar.html">Gallery 1 Col With R.Sidebar</option>
		<option value="gallery-one-column-with-left-sidebar.html">Gallery 1 Col With L.Sidebar</option>
		<option value="gallery-two-column-with-sidebar.html">Gallery 2 Col With R.Sidebar</option>
		<option value="gallery-two-column-with-left-sidebar.html">Gallery 2 Col With L.Sidebar</option>
		<option value="gallery-three-column-with-sidebar.html">Gallery 3 Col With R.Sidebar</option>
		<option value="gallery-three-column-with-left-sidebar.html">Gallery 3 Col With L.Sidebar</option>
		<option value="blog-without-sidebar.html">Blog With Out Sidebar</option>
		<option value="blog-with-left-sidebar.html">Blog With L.Sidebar</option>
		<option value="blog-with-sidebar.html">Blog With R.Sidebar</option>
		<option value="single-post-image-left-sidebar.html">Single Post With Image L.Sidebar</option>
		<option value="single-post-image.html">Single Post With Image R.Sidebar</option>
		<option value="single-post-video-left-sidebar.html">Single Post With Video L.Sidebar</option>
		<option value="single-post-video.html">Single Post With Video R.Sidebar</option>
		<option value="single-post-slider-left-sidebar.html">Single Post With Slider L.Sidebar</option>
		<option value="single-post-slider.html">Single Post With Slider R.Sidebar</option>
		<option value="project-single-post-left-sidebar.html">Project Single Post L.Sidebar</option>
		<option value="project-single-post.html">Project Single Post R.Sidebar</option>
		<option value="elements.html">Features</option>
	</select>
	</div>		
</header><!--header-->

<div id="layerslider-container-fw">
	<div id="layerslider" style="width: 100%; height: 600px; margin: 0px auto; ">
	
		<div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >			
			<img src="http://placehold.it/1366x640" class="ls-bg" alt="Slide background">
				<h3 class="ls-s-1" style="top: 223px; left:248px; background: url(images/slider1-img2.png) no-repeat scroll 0 0 / auto 100% transparent; font-family:roboto; font-size:34px; font-weight:bold; color:#4c4c4c; line-height:56px; padding:0 60px 0 60px; ; border-radius:3px; delayin:500; scaleout:.5; slidedirection:fade;" ><i>SAVE</i> <span>ENVIRONMENT</span></h3>
				<span class="ls-s-1"	style="top: 300px; left:248px; font-family:roboto; font-size:24px; font-weight:600; color:#000; padding:10px 20px 10px 50px; background:rgba(255,255,255,0.9); border-radius:4px 0 0px 4px; border-left:2px solid #93b631; position:relative; line-height:22px; float:left; delayin:1000; scalein:0; slidedirection:left; durationin : 2500;">BE READY TO WORK <i>WITH US</i></span>
				<p class="ls-s-1"	style="top: 360px; left:248px; font-family:roboto; font-size:13px; color:#fefefe; delayin:2000; scalein:4; slidedirection:fade; durationin : 2000;">Sed interdum, lacus et vulputate pellentesque, velit nulla commodo <br/> sem, at egestas nulla metus vel sapien! Lorem ipsum dolor</p>
		</div><!-- Slide1 -->

		<div class="ls-layer" style="transition2d: 45; slidedelay: 8000;" >			
			<img src="http://placehold.it/1366x640" class="ls-bg" alt="Slide background">
				<h3 class="ls-s-3 slide3-first" style="top:296px; left:100px; font-family: roboto; color: #FFFFFF; line-height:22px; font-size:32px; background:rgba(0,0,0,0.85); padding:18px 30px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5;  durationin :2000; delayin:500; showuntil:3000; slideoutdirection:right; easingin : easeOutQuad;">
						HELP <i>US</i> TO HELP OTHERS</h3>
						
				<h4 class="ls-s-3 slide3-second" style="top:365px; left:100px; background:rgba(152,212,96,0.85); font-family: roboto; color: #FFFFFF; font-size:28px; line-height:26px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1000; showuntil:3500; slideoutdirection:right; easingin : easeOutQuad; ">
						RESPONSIVE <span>TEMPLATE</span></h4>
			
				<h5 class="ls-s-3 slide3-third" style="top:419px; left:100px; background:rgba(255,255,255,0.85); color:#595858; font-family:roboto; font-size:24px; line-height: 20px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1500;  showuntil:4000; slideoutdirection:right; easingin : easeOutQuad;">
						CREATIVE <span>IDEAS</span></h5>
			
		</div><!-- Slide2 -->
		
		<div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >			
			<img src="http://placehold.it/1366x640" class="ls-bg" alt="Slide background">
				<h3 class="ls-s-2" style="top: 260px;left:230px; font-family:roboto; font-size:72px; font-weight:bold; color:#fff; line-height:60px; delayin:500; scaleout:.5; slidedirection:fade;" >I WANNA SAY <span>SOMETHING</span></h3>
				
				<span class="ls-s-2" style="top: 348px; left:230px; background:#9bd362; padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1000; showuntil:3000; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">Please Feel My <i style="font-style:normal; color:#373737;">Tension</i></span>

				<span class="ls-s-2" style="top: 348px; left:807px; background:rgba(0,0,0,0.8); padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1500; showuntil:3500; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">We <i style="font-style:normal; color:#98d460;">Need</i> Your Help</span>
		</div><!-- Slide3 -->

		
		<div class="ls-layer" style="transition2d: 32; slidedelay: 8000;" >			
			<img src="http://placehold.it/1366x640" class="ls-bg" alt="Slide background">
			
			<h3 class="ls-s-4" style="top:280px; left:180px; background:rgba(0,0,0,0.9); font-family:roboto; font-size:36px; font-weight:bold; color:#fefefe; padding:20px 60px 20px; border-radius:4px; slidedirection:bottom; scalein :0; easingin : easeOutQuad; durationin :2000; delayin:500;">
				SAVE THE <i>WORLD</i></h3>

			<span class="ls-s-4" style="top:380px; left:245px; background: none repeat scroll 0 0 #95D05E;border-radius: 4px 4px 0 0; color: #FFFFFF;font-family: open sans;font-size: 13px;font-weight: bold; padding: 5px 10px; slidedirection:top; scalein :0; durationin :2500;">Want To Know Why And How We Do It?</span>
				
			<h4 class="ls-s-4" style="top:415px; left:130px; color:#030303; font-family:source sans pro; font-size:20px; font-weight:700; slidedirection:fade; scalein :0; durationin :2000; delayin:2000;">OUR CHARITY HELPS THOSE PEOPLE WHO HAVE NO HOPE</h4>
			
			<p class="ls-s-4" style="top:450px; left:70px; font-family:roboto; font-size:14px; color:#030303; slidedirection:fade; scalein :2; durationin :2000; delayin:4000;">Sed interdum, lacus et vulputate pellentesque, velit nulla commodo sem, at egestas nulla metus.</p>
			
		</div><!-- Slide4 -->
		
	</div>

	
</div><!-- Layer Slider -->			

<section>
	<div class="container">
		<div class="services">
			<div class="row">
				<div class="col-md-2">
					<div class="box">
						<i class="icon-heart"></i>
						<h4>Donate For Future</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="box">
						<i class="icon-tags"></i>
						<h4>Women's Rights</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="box">
						<i class="icon-tint"></i>
						<h4>Health & Education</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="box">
						<i class="icon-key"></i>
						<h4>Climate Change</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="box">
						<i class="icon-bullhorn"></i>
						<h4>Speaking For Justice</h4>
					</div>
				</div>
				<div class="col-md-2">
					<div class="box">
						<i class="icon-briefcase"></i>
						<h4>Business & Poverty</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="parallax">
		<div class="fixed-bg" style="background:url(images/moving-bg.png) no-repeat scroll 0 0 transparent; background-attachment:fixed; background-size:cover;"></div>
		<div class="container">
				<div class="sec-heading">
					<h2><strong>Our </strong>Causes</h2>
				</div>			
				<div class="posts-carousel">
					<ul class="slides">
						<li>
						<div class="row">
							<div class="col-md-3">
								<div class="carou-post">
									<div class="carou-post-img">
										<img src="http://placehold.it/270x235" alt="" />
										<a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
									</div>
									<h4>Development</h4>
									<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
									<a href="single-post-video.html" title="">Read More</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="carou-post">
									<div id="layerslider-container-fw">
										<div id="layerslider2" style="width: 100%; height: 100%;">
											<div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >			
												<img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
											</div><!-- Slide1 -->
											<div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >			
												<img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
											</div><!-- Slide2 -->
										</div>
									</div><!-- Layer Slider -->		
									<h4>Women's Right</h4>
									<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
									<a href="single-post-slider.html" title="">Read More</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="carou-post">
									<div class="carou-post-img">
										<img src="http://placehold.it/270x235" alt="" />
										<a title="" href="images/blank-image.jpg" class="html5lightbox"><i class="icon-picture"></i></a>
									</div>
									<h4>Food</h4>
									<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
									<a href="single-post-image.html" title="">Read More</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="carou-post">
									<div class="carou-post-img">
										<img src="http://placehold.it/270x235" alt="" />
										<a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
									</div>
									<h4>Education</h4>
									<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
									<a href="single-post-video.html" title="">Read More</a>
								</div>
							</div>
						</div>
						</li>
						<li>
						<div class="row">
							<div class="col-md-3">
								<div class="carou-post">
									<div class="carou-post-img">
										<img src="http://placehold.it/270x235" alt="" />
										<a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
									</div>
									<h4>Development</h4>
									<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
									<a href="single-post-video.html" title="">Read More</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="carou-post">
									<div id="layerslider-container-fw">
										<div id="layerslider3" style="width: 100%; height: 100%;">
											<div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >			
												<img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
											</div><!-- Slide1 -->
											<div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >			
												<img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
											</div><!-- Slide2 -->
										</div>
									</div><!-- Layer Slider -->		
									<h4>Women's Right</h4>
									<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
									<a href="single-post-slider.html" title="">Read More</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="carou-post">
									<div class="carou-post-img">
										<img src="http://placehold.it/270x235" alt="" />
										<a title="" href="images/blank-image.jpg" class="html5lightbox"><i class="icon-picture"></i></a>
									</div>
									<h4>Food</h4>
									<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
									<a href="single-post-image.html" title="">Read More</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="carou-post">
									<div class="carou-post-img">
										<img src="http://placehold.it/270x235" alt="" />
										<a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
									</div>
									<h4>Education</h4>
									<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
									<a href="single-post-video.html" title="">Read More</a>
								</div>
							</div>
						</div>
						</li>
					</ul>
				</div>
			
		</div>
</section>

<section class="block">
	<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="sec-heading">
						<h2><strong>Shop Online For</strong> Donation</h2>
					</div>			
					<div class="shop">
						<ul class="slides">
							<li>
								<div class="item">
									<img src="http://placehold.it/570x291" alt="" />
									<div class="item-detail">
										<h3>Men's Coats & Jackets</h3>
										<span><i>$11.99</i><span>$</span>10.99</span>
										<a href="checkout.html" title="">ADD TO CART</a>
									</div>
								</div>
							</li>
							<li>
								<div class="item">
									<img src="http://placehold.it/570x291" alt="" />
									<div class="item-detail">
										<h3>Men's Coats & Jackets</h3>
										<span><i>$11.99</i><span>$</span>10.99</span>
										<a href="checkout.html" title="">ADD TO CART</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="sec-heading">
						<h2><strong>Start Regular</strong> Donation</h2>
					</div>		

					<div class="donate-message">
						<img src="http://placehold.it/270x155" alt="" />
						<h5>Donated to charity through</h5>
						<p><span>$2</span> a month can help people around the world fight the way out of poverty and change their lives.</p>
						<a href="cart.html" title="">please give us $2 a month</a>
					</div>	
				
				</div>
				<div class="col-md-3">
					<div class="sec-heading">
						<h2><strong>Upcoming</strong> Events</h2>
					</div>			
					<div class="upcoming-event">
						<img src="http://placehold.it/270x155" alt="" />
						<h5>Zombie Evacuation Race</h5>
						<ul>
							<li><a href="#" title=""><i class="icon-twitter"></i>Twitter Updates</a></li>
							<li><a href="#" title=""><i class="icon-calendar"></i>Oct 15 2013</a></li>
							<li><a href="#" title=""><i class="icon-pencil"></i>Alzheimer's Society Memory</a></li>
						</ul>
					</div>	
				
				</div>
		
			</div>
	</div>
</section>

</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="footer-widget-title">
					<h4><strong><span>P</span>eople</strong> Reviews</h4>
				</div>
				<div class="footer_carousel">
					<ul class="slides">
						<li>
							<div class="review">
								<i>L</i><p><span>ifeline</span> is clean and modern responsive Template built with HTML5 & CSS3 coding and easy to use Shortcodes with load of features in it. We have implemented many features in this theme which makes your project easier and better than before and can be used for multipurpose. </p>
							</div>						
							<div class="from">
								<h6>Thoms gomz britian</h6>
								<span>CE0, Australia</span>
							</div>
						</li>
						<li>
							<div class="review">
								<i>L</i><p><span>ifeline</span> is clean and modern responsive Template built with HTML5 & CSS3 coding and easy to use Shortcodes with load of features in it. We have implemented many features in this theme which makes your project easier and better than before and can be used for multipurpose. </p>
							</div>						
							<div class="from">
								<h6>Thoms gomz britian</h6>
								<span>CE0, Australia</span>
							</div>
						</li>
					</ul>
				</div>
			</div><!-- Reviews Widget -->
			<div class="col-md-3">
				<div class="footer-widget-title">
					<h4><strong><span>F</span>lickr</strong> Feed</h4>
				</div>
				<div class="flickr-images">
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
					<a href="#" title=""><img src="http://placehold.it/77x75" alt="" /></a>
				</div>
			</div><!-- Flickr Widget -->
			<div class="col-md-3">
				<div class="footer-widget-title">
					<h4><strong><span>C</span>ontact</strong> Us</h4>
				</div>
				<ul class="contact-details">
					<li>
						<span><i class="icon-home"></i>ADDRESS</span>
						<p>#8901 Marmora Road Chi Minh City, Vietnam</p>
					</li>
					<li>
						<span><i class="icon-phone-sign"></i>PHONE NO</span>
						<p>+00 035 835 282 / +00 034 965 353</p>
					</li>
					<li>
						<span><i class="icon-envelope-alt"></i>EMAIL ID</span>
						<p>#8901 Marmora Road Chi Minh City, Vietnam</p>
					</li>
					<li>
						<span><i class="icon-link"></i>WEB ADDRESS</span>
						<p>http://www.yourwebsite.com</p>
					</li>
				</ul>
			</div><!-- Contact Us Widget -->
			<div class="col-md-3">
				<div class="newsletter">
					<h4><strong>SIGNUP</strong> NEWSLETTER</h4>
					<p>Quisque volutpat mattis eros. Nullamma lesuada erat ut turpis. Suspendisse.</p>
					<input class="form-control" type="email" placeholder="Email" />
				</div>
				<ul class="social-bar">
					<li><a href="#" title=""><img src="images/rss.jpg" alt="" /></a></li>
					<li><a href="#" title=""><img src="images/facebook.jpg" alt="" /></a></li>
					<li><a href="#" title=""><img src="images/gplus.jpg" alt="" /></a></li>
					<li><a href="#" title=""><img src="images/linked-in.jpg" alt="" /></a></li>
					<li><a href="#" title=""><img src="images/pinterest.jpg" alt="" /></a></li>
				</ul>
				<div class="newsletter-btn">
					<input type="button" value="Submit" />
				</div>
			</div>	<!-- News Letter SignUp -->		
		</div>
	</div>
</footer><!-- Footer -->


<div class="footer-bottom">
	<div class="container">
		<p>Copyright © 2013 Global News. <span>All rights reserved.</span> </p>
		<ul>
			<li><a href="index.html" title="">HOME</a></li>
			<li><a href="about.html" title="">ABOUT</a></li>
			<li><a href="elements.html" title="">ELEMENTS</a></li>
			<li><a href="blog-with-sidebar.html" title="">BLOG</a></li>
			<li><a href="events.html" title="">EVENTS</a></li>
			<li><a href="contact.html" title="">CONTACT</a></li>
		</ul>
	
	</div>
</div><!-- Bottom Footer Strip -->


</body>
</html>
