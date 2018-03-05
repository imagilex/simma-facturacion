<!-- Vista prefacturacionlibre/index -->
<?= $menumain; ?>
<div class="container">
	<h3>Prefacturación Libre</h3>
		<div class="form-group">
			<label for="frm_prefer_identificador" class="col-sm-2 control-label">Núm. Cliente</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="frm_prefer_identificador" name="frm_prefer_identificador" value="<?= $filtros["identificador"]; ?>" />
			</div>
			<label for="frm_prefer_rfc" class="col-sm-2 control-label">Núm. Generador</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="frm_prefer_generador" name="frm_prefer_generador" value="<?= $filtros["generador"]; ?>" />
			</div>
			<div class="col-sm-2">
                <button type="button" class="btn btn-success" onclick="Cliente.Buscar()" >Buscar</button>
            </div>
		</div>
		
</div>
<script type="text/javascript">
	$(document).ready(function(){$("div.table-responsive table").DataTable();});
</script>