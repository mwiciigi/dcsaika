
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DcSaika</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Lato|Nunito" rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Styles -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sea-green.css" title="sea-green" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/brown.css" title="brown" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bright-red.css" title="bright-red" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/yellow.css" title="yellow" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/green.css" title="green" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/hunter-green.css" title="hunter-green" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/light-pink.css" title="light-pink" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/orange.css" title="orange" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pink.css" title="pink" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/red.css" title="red" />

<script src="<?php echo base_url();?>assets/js/myscript.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery-2.2.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/perfect-scrollbar.js" type="text/javascript"></script>
<script src='<?php echo base_url();?>assets/js/bootstrap.js'></script>
<script src="<?php echo base_url();?>assets/js/html5lightbox.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src='<?php echo base_url();?>assets/js/jquery.counterup.min.js'></script>
<script src='<?php echo base_url();?>assets/js/script.js'></script>
<script src='<?php echo base_url();?>assets/js/styleswitcher.js'></script>
<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
<script defer src="<?php echo base_url();?>assets/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.downCount.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.customSelect.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.jigowatt.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.mixitup.min.js"></script><script src="<?php echo base_url();?>"></script>
<script src="<?php echo base_url();?>assets/js/testimonials.js"></script>
<script src="<?php echo base_url();?>assets/js/waypoints.js"></script>



<script>
$(window).load(function(){
	$('.countdown').downCount({
	/* ==== Month / Date / Year ===*/
	date: '10/17/2018 12:00:00',
	offset: +10
	});
	$('.countdown.time2').downCount({
	/* ==== Month / Date / Year ===*/
	date: '04/30/2018 12:00:00',
	offset: +10
	});
  $('.wide-project-carousel').flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: false,
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
  $('.sponsors-carousel').flexslider({
	animation: "fade",
	animationLoop: false,
	slideShow:false,
	controlNav: false,
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,
	slideshowSpeed: 7000,
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
});
</script>

<!-- Scripts For Layer Slider  -->
<script src="<?php echo base_url();?>assets/layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="<?php echo base_url();?>assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>


<script>
$(document).ready(function(){
jQuery("#layerslider").layerSlider({
	responsive: true,
	responsiveUnder: 1170,
	layersContainer: 870,
	skin: 'fullwidth',
	hoverPrevNext: true,
	skinsPath: 'layerslider/skins/'
});
});
</script>

<script>
$(window).load(function(){
$(".our-causes").flexslider({
animation: "slide",
animationLoop: false,
controlNav: true,
  maxItems: 1,
pausePlay: false,
mousewheel:false,
start: function(slider){
  $("body").removeClass("loading");
}
});


$(".slideshow").flexslider({
animation: "fade",
animationLoop: false,
slideShow:false,
controlNav: true,
  maxItems: 1,
pausePlay: false,
mousewheel:false,
start: function(slider){
  $("body").removeClass("loading");
}
});

});
</script>
<script type="text/javascript">
$(document).ready(function(){
$(function() {
  $("#carousel").carouFredSel({
    responsive: true,
    circular: false,
    auto: false,
    items: {
      visible: 1,
      width: 20,
    },
    scroll: {
      fx: "directscroll"
    }
  });
  $("#thumbs").carouFredSel({
    responsive: true,
    circular: false,
    infinite: false,
    auto: false,
    prev: "#prev",
    next: "#next",
    items: {
      visible: {
        min: 1,
        max: 6
      },
      width: 200,
      height: "80%"
    }
  });
  $("#thumbs a").click(function() {
    $("#carousel").trigger("slideTo", "#" + this.href.split("#").pop() );
    $("#thumbs a").removeClass("selected");
    $(this).addClass("selected");
    return false;
  });
});
});
</script>
<script>
$(document).ready(function(){
	$('.single-video > a').on('click',function(){
		$('.single-video').addClass('play-video');
		return false;
	});
	$('.video-closebtn').on('click',function(){
		$('.single-video').removeClass('play-video');
		return false;
	});
});
</script>
</head>
<body>
<div class="theme-layout boxed">
<div id="top-bar" class="modern">
	<div class="container">
		<ul>
			<li>
				<i class="fa fa-home"></i>
				P.o Box 7777
			</li>
			<li>
				<i class="fa fa-phone"></i>
				+254 (0) 725638360
			</li>
			<li>
				<i class="fa fa-envelope"></i>
				info@dcsaika.com
			</li>
		</ul>
		<div class="header-social">
			<ul>
				<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/rss.jpg"></a></li>
				<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/facebook.jpg"></a></li>
				<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/gplus.jpg"></a></li>
				<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/linked-in.jpg"></a></li>
				<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/pinterest.jpg"></a></li>
			</ul>
		</div>
	</div>
</div><!--top bar-->
<header class="header2 sticky">
	<div class="container">
		<div class="logo">
			<a href="#" title=""><img src="<?php echo base_url();?>photos/logo.png" width="63px" alt="Logo" /><h1>D<i></i>c-Saika</h1></a>
		</div><!-- Logo -->
		<a class="header-btn" href="#" title="">DONATE NOW</a>
		<nav class="menu">
			<ul id="menu-navigation">
					<li class="active"><a href="<?php echo base_url();?>home">Home</a></li>
					<li><a href="javascript:void(0)">About</a></li>
					<!-- <li><a href="<?php echo base_url();?>projectlist">Projects</a></li> -->
					<li><a href="javascript:void(0)">Blog</a></li>
					<li><a href="javascript:void(0)">Gallery</a></li>
					<li><a href="javascript:void(0)">Contact Us</a></li>
					</ul><!-- Drop Down -->
				</li>
			</ul>
		</nav><!-- Menu -->
	</div>
</header><!--header-->
<div class="responsive-header">
	<div class="responsive-topbar">
		<div class="responsive-topbar-info">
			<ul>
				<li><i class="fa fa-home"></i> Go to Home</li>
				<li><i class="fa fa-phone"></i> +254 (0) 724 439115</li>
				<li><i class="fa fa-envelope"></i> teenpregnancyawareness.com</li>
			</ul>
			<div class="container">
				<div class="responsive-socialbtns">
					<ul>
						<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/rss.jpg"></a></li>
						<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/facebook.jpg"></a></li>
						<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/gplus.jpg"></a></li>
						<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/linked-in.jpg"></a></li>
						<li><a title="" href="#"><img alt="" src="<?php echo base_url();?>assets/images/pinterest.jpg"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="responsive-logomenu logo">
		<div class="container">
			<a href="index.html" title=""><img src="<?php echo base_url();?>photos/logo.png" width="63px" alt="Logo" /><h1>D<i></i>c-Saika</h1></a>
			<span class="menu-btn"><i class="fa fa-th-list"></i></span>
		</div>
	</div>
	<div class="responsive-menu">
		<span class="close-btn"><i class="fa fa-close"></i></span>
		<ul>
			<li class="has-dropdown"><a href="home" title="">Home</a></li>
			<li><a href="<?php echo base_url();?>"><i class="icon-circle"></i>About</a></li>
			<li><a href="javascript:void(0)"><i class="icon-circle"></i>Projects</a></li>
			<li><a href="javascript:void(0)"><i class="icon-circle"></i>Blog</a></li>
			<li><a href="javascript:void(0)"><i class="icon-circle"></i>Gallery</a></li>
			<li><a href="javascript:void(0)"><i class="icon-circle"></i>Contact Us</a></li>
	</div>
	<button class="responsive-donate">Donate Now</button>
</div><!--Responsive header-->
