<div class="pagina" id="calificarcalidad">
	<div class="page-header">
		<a href="#" class="pull-right linkayuda" rel="helpcalificarcalidad"><span class="glyphicon glyphicon-question-sign"></span></a>
		<h4>Aspecto del agua (1/3)</h4>
	</div>
	<form method="post" id="pregunta1" action="datos/aspecto1">
		<input type="hidden" class="next" value="paginas/calificafisica2"/>
		<div class="row">
			<div class="col-xs-12">
				<label>¿Cómo evaluarías el color de tu agua?</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<img src="themes/aguasmobile/images/vaso1.jpg" width="100"/>
			</div>
			<div class="col-xs-6">
				<input type="checkbox" value="1" class="sendonclick"/>
				Clara
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<img src="themes/aguasmobile/images/vaso2.jpg" width="100"/>
			</div>
			<div class="col-xs-6">
				<input type="checkbox" value="2" class="sendonclick"/>
				Turbia
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<img src="themes/aguasmobile/images/vaso3.jpg" width="100"/>
			</div>
			<div class="col-xs-6">
				<input type="checkbox" value="3" class="sendonclick"/>
				Muy turbia
			</div>
		</div>
		<div class="row" style="margin-top:15px">
			<div class="col-xs-12">
				<label>Escribe tu comentario:</label>
				<textarea id="txtComentario" class="form-control"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Comparte una fotografía:</label>
				<input type="file"/>
			</div>
		</div>
	</form>
</div>
