<?php include "head.php" ?>

<div class="breadcrumb-wrapper">
<div class="container">
<h1>Sistema de Entrenamiento Mediante Inteligencia Artificial</h1>
<div class="breadcrumb">
<a href="index.html">Home</a>
<span class="default"> </span>
<h4>by Drexgen</h4>
</div>
</div>
</div>

<div id="main">

<div id="main-content">
<section id="primary" class="content-full-width">
<div class="dt-sc-hr-invisible"></div>
<div class="dt-sc-hr-invisible-small"></div>
<div class="container">
<img id="imagen1" style="width: 1185px;height: 711px;display: none" src="images/futbol.png">
<img id="imagen2" style="width: 1185px;height: 711px;display: none" src="images/tenis.png">
<img id="imagen3" style="width: 1185px;height: 711px;display: none" src="images/basquet.jpg">

<div class="dt-sc-sorting-container">
	<a class="first active-sort" data-filter="*" href="#">Todos</a>	
	<a data-filter=".futbol" href="#">Futbol</a>
	<a data-filter=".tenis" href="#">Tenis</a>
	<a data-filter=".basquet" href="#">Basquet</a>
</div>
<div class="dt-sc-portfolio-container">
<div class="portfolio dt-sc-one-third column futbol">
	<div class="portfolio-thumb">
	<img id="imagen" src="images/futbol.png" alt="" title="">
	<div class="image-overlay">
	<div class="fig-content-wrapper">
	<div class="fig-overlay">
	<p>
	<a href="#" onclick="showMarkerArea(document.getElementById('imagen1'));" ><span class="fa fa-plus"> </span></a>
	<a href="#" class="link"> <span class="fa fa-link"> </span> </a>
	</p>
	</div>
	</div>
	</div>
	</div>
	<div class="portfolio-detail">
	<div class="portfolio-title">
	<h4><a href="#">Cancha de Futbol</a></h4>
	</div>
	</div>
</div>
<div class="portfolio dt-sc-one-third column tenis">
	<div class="portfolio-thumb">
	<img src="images/tenis.png" alt="" title="">
	<div class="image-overlay">
	<div class="fig-content-wrapper">
	<div class="fig-overlay">
	<p>
	<a href="#" onclick="showMarkerArea(document.getElementById('imagen2'));" ><span class="fa fa-plus"> </span></a>
	<a href="#" class="link"> <span class="fa fa-link"> </span> </a>
	</p>
	</div>
	</div>
	</div>
	</div>
	<div class="portfolio-detail">
	<div class="portfolio-title">
	<h4><a href="#">Cancha de Tenis</a></h4>
	</div>
	</div>
</div>
<div class="portfolio dt-sc-one-third column basquet">
	<div class="portfolio-thumb">
	<img src="images/basquet.jpg" alt="" title="">
	<div class="image-overlay">
	<div class="fig-content-wrapper">
	 <div class="fig-overlay">
	<p>
	<a href="#" onclick="showMarkerArea(document.getElementById('imagen3'));" ><span class="fa fa-plus"> </span></a>
	<a href="#" class="link"> <span class="fa fa-link"> </span> </a>
	</p>
	</div>
	</div>
	</div>
	</div>
	<div class="portfolio-detail">
	<div class="portfolio-title">
	<h4><a href="#">Cancha de Basquet</a></h4>
	</div>
	</div>
</div>
</div>
</div>

<div class="dt-sc-hr-invisible-large"></div>
</section>
</div>

</div>

<?php include "foot.php" ?>


