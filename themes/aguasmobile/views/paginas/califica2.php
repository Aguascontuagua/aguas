<div class="pagina" id="calificarcalidad2">
	<div class="page-header">
		<a href="#" class="pull-right linkayuda" rel="helpcalificarcalidad"><span class="glyphicon glyphicon-question-sign"></span></a>
		<h4>Aspecto del agua (2/3)</h4>
	</div>
	<form method="post" id="pregunta1" action="datos/aspecto1">
		<input type="hidden" class="next" value="paginas/calificafisica3"/>
		<div class="row">
			<div class="col-xs-12">
				<label>Después de 1 minuto, ¿se puede notar algún tipo de partícula flotando en el agua?  Las partículas son pedazos muy pequeños de algún material, incluso planta o residuos sólidos que a veces se pueden ver flotando.</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<img src="themes/aguasmobile/images/noparticulas.jpg" width="100"/>
			</div>
			<div class="col-xs-6">
				<input type="checkbox" value="1" class="sendonclick"/>
				No se ve asiento
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<img src="themes/aguasmobile/images/particulas.jpg" width="100"/>
			</div>
			<div class="col-xs-6">
				<input type="checkbox" value="2" class="sendonclick"/>
				Un poco
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
