<!-- Vista manifiestos/precaptura -->
<?= $menumain; ?>
<div class="container">
	<h3>Captura de Manifiestos</h3>
	<form autocomplete="off" method="post" id="frm_manifiesto">
		<div class="form-row"><div class="form-group">
			<label for="frm_manifiesto_identificador" class="col-sm-2 control-label">No. Manifiesto:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="frm_manifiesto_identificador" name="frm_manifiesto_identificador" value="" />
				<input type="hidden" class="form-control" id="frm_manifiesto_idmanifiesto" name="frm_manifiesto_idmanifiesto"/>
			</div>
			<div class="col-sm-1">
				<button type="button" class="btn btn-outline-secondary" onclick="Manifiesto.GetManifiestoPrecaptura()">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</div>
		<div class="form-row"><div class="form-group">
			<label for="frm_manifiesto_cliente" class="col-sm-2 control-label">Cliente</label>
			<div class="col-sm-1">
				<p class="form-control-static" id="frm_manifiesto_cliente_static"></p>
				<input type="hidden" id="frm_manifiesto_cliente" name="frm_manifiesto_cliente" value="" />
			</div>
			<div class="col-sm-9">
				<p class="form-control-static" id="frm_manifiesto_cliente_nombre_static"></p>
			</div>
		</div>
		<div class="form-row"><div class="form-group">
			<label for="frm_manifiesto_generador" class="col-sm-2 control-label">Generador</label>
			<div class="col-sm-1">
				<p class="form-control-static" id="frm_manifiesto_generador_static"></p>
				<input type="hidden" id="frm_manifiesto_generador" name="frm_manifiesto_generador" value="" />
			</div>
			<div class="col-sm-9">
				<p class="form-control-static" id="frm_manifiesto_generador_nombre_static"></p>
			</div>
		</div>
	</form>
	<hr />
	<div id="frmCapturaContainer"></div>
	<form autocomplete="off" id="frmConfirmButtons" style="display: none;" >
		<div class="form-row"><div class="form-group">
			<div class="col-sm-8"></div>
			<div class="col-sm-2">
                <button type="button" class="btn btn-success" onclick="Manifiesto.EjecutaPrecaptura()" >Guardar</button>
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-danger" onclick="Manifiesto.LimpiaFormPrecaptura()">Cancelar</button>
            </div>
		</div>
	</form>
</div>
<!-- Vista manifiestos/precaptura End -->