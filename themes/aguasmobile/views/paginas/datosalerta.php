<div id="pageCrearalerta" class="pagina">
	<div class="page-header">
		<a href="#" class="pull-right linkayuda" rel="helpcalificarcalidad"><span class="glyphicon glyphicon-question-sign"></span></a>
		<h4>Crear alerta</h4>
	</div>
	<form>
		<input type="hidden" class="next" value="paginas/calificafisica3"/>
		<div class="row">
			<div class="col-xs-12">
				<div class="input-group">
			      <span class="input-group-addon">
			        <input type="radio" aria-label="..."> 
			      </span>
			      <input type="text" class="form-control" aria-label="..." value="Tubería rota" readonly="readonly">
			    </div><!-- /input-group -->
				<div class="input-group">
			      <span class="input-group-addon">
			        <input type="radio" aria-label="...">
			      </span>
			      <input type="text" class="form-control" aria-label="..." value="Fuga de agua" readonly="readonly">
			    </div><!-- /input-group -->
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Descripción:</label>
				<textarea class="form-control" id="txtArea"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Cargar fotografía</label>
				<input type="file" name="foto"/>
			</div>
		</div>
		<div class="row" align="right">
			<div class="col-xs-12">
				<a href="#" class="btn btn-primary">Crear alerta<span style="margin-left:5px" class="glyphicon glyphicon-floppy-disk"></span></a>
			</div>
		</div>
	</form>
</div>