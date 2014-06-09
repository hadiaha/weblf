<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Life Line</title>
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





<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


<!-- Scripts -->
<script src="js/jquery.1.9.1.js" type="text/javascript"></script>
<script src='js/bootstrap.js'></script>
<script src="js/html5lightbox.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
<script src='js/script.js'></script>		
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>
	
<script>
$(window).load(function(){
  $('.our-causes').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
	
  $('.slideshow').flexslider({
	animation: "fade",
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

	
<!-- Scripts For Layer Slider  -->
<script src="layerslider/JQuery/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="layerslider/JQuery/jquery-transit-modified.js" type="text/javascript"></script>
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
		}); // LAYER SLIDER
		
$(function() {
	


	$('#carousel').carouFredSel({
		responsive: true,
		circular: false,
		auto: false,
		items: {
			visible: 1,
			width: 20,
		},
		scroll: {
			fx: 'directscroll'
		}
	});
	$('#thumbs').carouFredSel({
		responsive: true,
		circular: false,
		infinite: false,
		auto: false,
		prev: '#prev',
		next: '#next',
		items: {
			visible: {
				min: 1,
				max: 6
			},
			width: 200,
			height: '80%'
		}
	});
	$('#thumbs a').click(function() {
		$('#carousel').trigger('slideTo', '#' + this.href.split('#').pop() );
		$('#thumbs a').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	
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


<header>
	<div class="container">
		<div class="logo">
			<a href="#" title=""><img src="images/logo.png" alt="Logo" /><h1><i>L</i>ifeline</h1></a>
		</div><!-- Logo -->
		<nav class="menu">
			<ul id="menu-navigation">
				<li ><a>Home</a>
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
				<li class="active" ><a>Pages</a>
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
