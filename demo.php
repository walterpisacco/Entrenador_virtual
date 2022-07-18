


<script type="text/javascript" src="js/markerjs2.js"></script>

<script type="text/javascript">
    function showMarkerArea(target) {
      const markerArea = new markerjs2.MarkerArea(target);
      markerArea.addRenderEventListener((imgURL) => target.src = imgURL);
      markerArea.show();
    }

</script>
</head>
<body>

	  <img  id="imagen" name="imagen" src="images/futbol1.jpg" style="max-width: 600px;" onclick="showMarkerArea(this);" />
	  <button onclick="showMarkerArea(document.getElementById('imagen'));">aceptar</button>
</body>	
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>