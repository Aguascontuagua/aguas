<html>
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>¡Aguas! con tu Agua</title>
		<link rel="stylesheet" href="themes/aguasmobile/css/bootstrap.css" type="text/css"/>
		<link rel="stylesheet" href="http://openlayers.org/en/v3.4.0/css/ol.css" type="text/css">
		<script src="themes/aguasmobile/js/jquery.js"></script>
		<script type="text/javascript" src="themes/aguasmobile/js/bootstrap.js"></script>
		<script src="http://openlayers.org/en/v3.4.0/build/ol.js" type="text/javascript"></script>
		<link rel="stylesheet"  type="text/css" href="themes/aguasmobile/css/aguas.css"/>
	</head>
	<body>
	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>   
	          </button>
	          <a class="navbar-brand" href="#">¡Aguas! con tu Agua</a>
	        </div>
			<div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Inicio</a></li>
	            <li><a href="#about">Alertas</a></li>
	            <li><a href="#contact">Evaluar</a></li>
	            <li><a href="#contact">Acerca de</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>
	    <div class="container" id="principal">
	    	<div class="row" id="btnBackArea" style="display:none;">
	    		<ul class="pager">
	    			<li class="previous">
	    				<a href="#" id="btnBack"><span aria-hidden="true">&larr;</span>Atrás</a>
	    			</li>
	    		</ul>
	    	</div>
			<?php 
				echo $content;
			?>
	      <hr>
	      <footer>
	        <p>&copy; Aguas con tu Agua 2015</p>
	      </footer>
	    </div> <!-- /container -->
		<div class="modal" id="cargando" data-backdrop="static" data-keyboard="false">
	        <div class="modal-body" align="center">
	            <img src="themes/aguasmobile/images/loader.gif"/>
	        </div>
    	</div>
		<div class="modal fade" id="help">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-body">
		        <p>Acá se mostrará una sección de ayuda que varía dependiendo de la sección en la que se encuentre.</p>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		<a id="geolocation_marker" href="#"><img src="themes/aguasmobile/images/geolocation_marker.png" /></a>
		<div id="popup" title="Ubicación Actual"></div>
		<script type="text/javascript" src="themes/aguasmobile/js/aguas.js"></script>
	</body>
</html>

