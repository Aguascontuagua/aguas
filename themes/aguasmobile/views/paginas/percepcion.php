<div class="pagina" id="olordeagua">
	<div class="page-header">
		<a href="#" class="pull-right linkayuda" rel="helpcalificarcalidad"><span class="glyphicon glyphicon-question-sign"></span></a>
		<h4>Olor del agua</h4>
	</div>
	<form method="post" id="pregunta1" action="datos/aspecto1">
		<input type="hidden" class="next" value="paginas/sensacion1"/>
		<div class="row">
			<div class="col-xs-12">
				<label>¿El agua tiene algún olor desagradable?</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" class="btn btn-default sendonclick">Si</button>
				  <button type="button" class="btn btn-default sendonclick">No</button>
				</div>
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
