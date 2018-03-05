<?= $menumain; ?>
<div class="container">
	<div class="btn-toolbar pull-right" role="toolbar">
		<div class="btn-group">
		</div>
	<h3>Prefacturación Automática</h3>
	<form class="form-horizontal" role="form" method="post" id="frm_">
		<div class="form-group">
			<label for="frm_identificador" class="col-sm-2 control-label">Cliente Inicial:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="frm__identificador" name="frm_identificador" value="<?= $filtros[" identificador  "]; ?>" />
			</div>
			<label for="frm_prefer_" class="col-sm-2 control-label">Cliente Final:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="frm_prefer_identificador" name="frm_prefer_identificador" value="<?= $filtros[" identificador  "]; ?>" />
			</div>
		</div>
		<div class="form-group">
			<label for="frm_prefer_" class="col-sm-2 control-label">Fecha Programada Inicial:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="frm_prefer_" name="frm_prefer_" value="<?= $filtros["  "]; ?>" />
			</div>
			<label for="frm_prefer_" class="col-sm-2 control-label">Fecha Programada Final:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="frm_prefer_" name="frm_prefer_" value="<?= $filtros["  "]; ?>" />
			</div>
		</div>
		<div class="form-group">
			<label for="frm_prefer_" class="col-sm-2 control-label">Fecha Embarque Inicial:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="frm_prefer_" name="frm_prefer_" value="<?= $filtros["  "]; ?>" />
			</div>
			<label for="frm_prefer_" class="col-sm-2 control-label">Fecha Embarque Final:</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="frm_prefer_" name="frm_prefer_" value="<?= $filtros["  "]; ?>" />
			</div>
		</div>
		<div class="form-group">
			<label for="frm_cliente_categoria" class="col-sm-2 control-label">Categotia del cliente:</label>
			<div class="col-sm-10">
				<select class="form-control" id="frm_cliente_categoria" name="frm_cliente_categoria" onchange="location.href=baseURL+'clientes/index/'+$('#frm_cliente_categoria').val();">
					<?php if( $categorias !== false ) foreach( $categorias[ "opciones" ] as $opc): ?>
						<?= ( $opc[ "idcatalogodet" ] == $objeto->getCategoria() ? $opc[ "descripcion" ] : '' ); ?>
					<?php endforeach; ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10"></div>
			<div class="col-sm-2">
				<input type="hidden" name="action" id="action" value="" />
                <button type="button" class="btn btn-success" onclick="     .Buscar()">Buscar</button>
            </div>
		</div>
	</form>	
	</div>
</div>