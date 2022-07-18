
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Soccer SystemPro </title>
<meta name="description" content="">
<meta name="author" content="">
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<link id="default-css" href="css/style.css" rel="stylesheet" media="all" />
<link id="shortcodes-css" href="css/shortcodes.css" rel="stylesheet" media="all" />
<link id="skin-css" href="css/skins/green/style.css" rel="stylesheet" media="all" />
<link id="skin-css" href="dark/dark-skin.css" rel="stylesheet" media="all" />
<link id="fancy-box" href="css/jquery.fancybox.css" rel="stylesheet" media="all" />
<link href="css/prettyPhoto.css" rel="stylesheet" media="all" />

<link href="css/responsive.css" rel="stylesheet" media="all" />
<link href="css/pace-theme-loading-bar.css" rel="stylesheet" media="all" />

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/flaticon.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Crete+Round" rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/markerjs2.js?v=1.2"></script>

<script src="js/modernizr.custom.js"></script>
<script type="text/javascript">
	var mytheme_urls = {
 		stickynav : 'enable'
	};

    function showMarkerArea(target) {
      const markerArea = new markerjs2.MarkerArea(target);
      markerArea.addRenderEventListener((imgURL) => target.src = imgURL);
      markerArea.show();
      $('.__markerjs2_').css('z-index','10000');


	  var str = target.currentSrc; 
	  var f = str.search("futbol");

	  var str = target.currentSrc; 
	  var t = str.search("tenis");

	  var str = target.currentSrc; 
	  var b = str.search("basquet");	  

      if(f > 0){
		$('#imagen1').css('display','');
      }
      if(t > 0){
		$('#imagen2').css('display','');
      }
      if(b > 0){
		$('#imagen3').css('display','');
      }

      $('#btnCerrar').on('click',function(){
    	$('#imagen1').css('display','none');
    	$('#imagen2').css('display','none');
    	$('#imagen3').css('display','none');	
      })

    }

</script>
</head>
<body>
<div id="loader-wrapper">
<div class="loader">
<span class="fa fa-spinner fa-spin"></span>
</div>
</div>

<div class="wrapper">
<div class="inner-wrapper">

<div id="header-wrapper" style="position: fixed; top: 0px;">
<header id="header">

<div class="top-bar">
<div class="container">
<div class="top-right">
<ul>
<li><a title="Login" href="#"><span class="fa fa-sign-in"></span>Miembros Login</a></li>
</ul>
</div>
</div>
</div>
<div class="main-menu-container">
<div class="main-menu">
<div id="logo">
<a title="Travel" href="index.php"><img title="Fitness" alt="Fitness" src="images/logo.png?v=1.1"></a>
</div>
<div id="primary-menu">
<div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
<nav id="main-menu">
<ul id="menu-main-menu" class="menu">
<li class="menu-item-simple-parent menu-item-depth-0"><a href="index.php">Home</a>
<a class="dt-menu-expand">+</a>
</li>
<li class="menu-item-simple-parent menu-item-depth-0"><a href="generador.php">Generador de Ejercicios</a>
<a class="dt-menu-expand">+</a>
</li>
<li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"> <a href="#">Nuestros Entrenamientos</a>
	<div class="megamenu-child-container">
		<ul class="sub-menu">
			<li class="menu-item-fullwidth fill-four-columns">
				<div class="menu-item-widget-area-container">
				<ul>
				<li class="widget">
				<div class="dt-sc-programs">
				<div class="dt-sc-pro-thumb">
				<a href="package-detail.html"><img src="images/event1.jpg" alt="" title=""></a>
				<div class="programs-overlay">
				<div class="dt-sc-pro-title">
				<h3>Muscle Build Pro</h3>
				<span>1 yr training program</span>
				</div>
				</div>
				</div>
				<div class="dt-sc-pro-detail">
				<div class="dt-sc-pro-price">
				<a class="dt-sc-button small" href="#" data-hover="Iniciar Ahora">Iniciar Ahora</a>
				</div>
				</div>
				</div>
				</li>
				<li class="widget">
				<div class="dt-sc-programs">
				<div class="dt-sc-pro-thumb">
				<a href="package-detail.html"><img src="images/event3.jpg" alt="" title=""></a>
				<div class="programs-overlay">
				<div class="dt-sc-pro-title">
				<h3>Muscle Build Pro</h3>
				<span>1 yr training program</span>
				</div>
				</div>
				</div>
				<div class="dt-sc-pro-detail">
				<div class="dt-sc-pro-price">
				<a class="dt-sc-button small" href="#" data-hover="Iniciar Ahora">Iniciar Ahora</a>
				</div>
				</div>
				</div>
				</li>
				<li class="widget">
				<div class="dt-sc-programs">
				<div class="dt-sc-pro-thumb">
				<a href="package-detail.html"><img src="images/event2.jpg" alt="" title=""></a>
				<div class="programs-overlay">
				<div class="dt-sc-pro-title">
				<h3>Muscle Build Pro</h3>
				<span>1 yr training program</span>
				</div>
				</div>
				</div>
				<div class="dt-sc-pro-detail">
				<div class="dt-sc-pro-price">
				<a class="dt-sc-button small" href="#" data-hover="Iniciar Ahora">Iniciar Ahora</a>
				</div>
				</div>
				</div>
				</li>
				<li class="widget">
				<div class="dt-sc-programs">
				<div class="dt-sc-pro-thumb">
				<a href="package-detail.html"><img src="images/event4.jpg" alt="" title=""></a>
				<div class="programs-overlay">
				<div class="dt-sc-pro-title">
				<h3>Muscle Build Pro</h3>
				<span>1 yr training program</span>
				</div>
				</div>
				</div>
				<div class="dt-sc-pro-detail">
				<div class="dt-sc-pro-price">
				<a class="dt-sc-button small" href="#" data-hover="Iniciar Ahora">Iniciar Ahora</a>
				</div>
				</div>
				</div>
				</li>
				</ul>
				</div>
			</li>
		</ul>
	</div>
	<a class="dt-menu-expand">+</a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</header>

</div>
