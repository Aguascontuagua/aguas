<div id="inicio" class="pagina">
	<div id="inicio1">  
  <div class="row">
  	<div class="col-xs-12 bg-success" id="ubicacion">
		<span class="glyphicon glyphicon-map-marker"></span><label>Tu ubicación:</label>Cobán, Alta Verapaz<a style="margin-left:5px" href="#" id="btnMapa">ver mapa</a></p>
  	</div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <h2 style="background-color:#eee">Alertas</h2>
      <div class="row">
      	<div class="col-xs-6 col-md-6">
      		<p align="center"><span class="badge">1</span> alerta en tu área</p>
      		<p align="center"><a style="margin-left:5px" href="paginas/detallealerta" class="linkpagina">ver</a></p>
      	</div>
      	<div class="col-xs-6 col-md-6" align="center">
      		<a href="paginas/crearalerta" class="btn btn-danger linkpagina">Crear Alerta</a>
      	</div>
      </div>
    </div>
    <div class="col-md-4">
      <h2 style="background-color:#eee">Situación actual</h2>
      <div class="row">
      	<div class="col-xs-6" id="kpi1" style="">
      		<h4>Calidad de Agua</h4>
      		<p align="center"><span class="label label-warning kpi">Media</span></p>
      		<p style="margin-top:10px;"><a href="paginas/preparacion" class="linkpagina">evaluar<span style="margin-left:5px" class="glyphicon glyphicon-play-circle"></span></a></p>
      	</div>
      	<div class="col-xs-6">
      		<h4>Contaminación</h4>
      		<p align="center"><span class="label label-danger kpi">Alta</span></p>
      		<p style="margin-top:10px;"><a href="paginas/contaminacion" class="linkpagina">evaluar<span style="margin-left:5px" class="glyphicon glyphicon-play-circle"></span></a></p>
      	</div>
      </div>
      <div class="row">
      	<div class="col-xs-6">
      		<h4>Amenazas</h4>
      		<p align="center">No se ha evaluado</p>
      		<p style="margin-top:10px;"><a href="index.php?r=site/amenazas">evaluar<span style="margin-left:5px" class="glyphicon glyphicon-play-circle"></span></a></p>
      	</div>
      	<div class="col-xs-6" id="kpi4">  
      		<h4>Conciencia</h4>
      		<p align="center"><span class="badge">2</span> ciudadanos</p>
      		<p style="margin-top:10px;"><a href="paginas/conciencia" class="linkpagina">evaluar<span style="margin-left:5px" class="glyphicon glyphicon-play-circle"></span></a></p>
      	</div>
      </div>
   </div>
  </div>
	</div>
	<div id="inicio2" style="display:none">
    	<div class="row" id="btnBackArea2" style="display:none;">
    		<ul class="pager">
    			<li class="previous">
    				<a href="#" id="btnBack2"><span aria-hidden="true">&larr;</span>Atrás</a>
    			</li>
    		</ul>
    	</div>
	<div id="mapa"></div>
	</div>
</div>