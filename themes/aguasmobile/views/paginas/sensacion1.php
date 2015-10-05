<div class="pagina" id="sensacionagua">
	<div class="page-header">
		<a href="#" class="pull-right linkayuda" rel="helpcalificarcalidad"><span class="glyphicon glyphicon-question-sign"></span></a>
		<h4>Sensación del agua</h4>
	</div>
	<form method="post" id="pregunta1" action="datos/aspecto1">
		<input type="hidden" class="next" value="paginas/percepcion"/>
		<div class="row">
			<div class="col-xs-12">
				<label>Con el dedo indice toca la superficie del agua en el vaso, ¿se siente ligosa?</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" class="btn btn-default sendonclick">Si</button>
				  <button type="button" class="btn btn-default sendonclick">No</button>
				</div>
			</div>
			<!--label>
				<input type="radio" class="sendonclick" name="ligosa" value="1"/>
				Si
			</label>
			<label>
				<input type="radio" class="sendonclick" name="ligosa" value="2"/>
				No
			</label-->
		</div>
		<div class="row">
			<div class="col-xs-12">
				<label>Al retirar el dedo de la superficie, ¿se observa alguna sustancia o residuo en la piel?</label>
				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" class="btn btn-default sendonclick">Si</button>
				  <button type="button" class="btn btn-default sendonclick">No</button>
				</div>
			</div>
			<!--label>
				<input type="radio" class="sendonclick" name="ligosa" value="1"/>
				Si
			</label>
			<label>
				<input type="radio" class="sendonclick" name="ligosa" value="2"/>
				No
			</label-->
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
