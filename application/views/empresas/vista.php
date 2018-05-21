<!-- Vista empresas/vista -->
<?= $menumain; ?>
<div class="container">
	<div class="btn-toolbar float-right" role="toolbar">
		<div class="btn-group" role="group">
			<?php if($this->modsesion->hasPermisoHijo(6)): ?>
			<button type="button" class="btn btn-outline-secondary" title="Ver todas las Empresas" onclick="location.href='<?= base_url('empresas'); ?>';">
				<i class="fas fa-th-list"></i>
			</button>
			<?php endif;
			if($this->modsesion->hasPermisoHijo(69)):?>
			<button type="button" class="btn btn-outline-secondary" title="Actualizar Empresa" onclick="location.href='<?= base_url('empresas/actualizar/'.$objeto->getIdempresa()); ?>';">
				<i class="far fa-edit"></i>
			</button>
			<?php endif;
			if($this->modsesion->hasPermisoHijo(70)):?>
			<button type="button" class="btn btn-outline-secondary" title="Borrar Empresa" onclick="Empresa.Eliminar(<?= $objeto->getIdempresa(); ?>)">
				<i class="far fa-trash-alt"></i>
			</button>
			<?php endif; ?>
		</div>
	</div>
	<h3>Empresas <small class="text-muted"><?= $objeto->getRazonsocial(); ?></small></h3>
	<form autocomplete="off" method="post" id="frm_empresas">
		<div class="form-row"><div class="form-group">
			<label class="col-sm-2 control-label">Razón Social</label>
			<div class="col-sm-10">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getRazonsocial(); ?></p>
			</div>
		</div>
		<div class="form-row"><div class="form-group">
			<label class="col-sm-2 control-label">Registro Federal de Contribuyentes</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getRfc(); ?></p>
			</div>
			<label for="frm_empresa_regimen_fiscal" class="col-sm-2 control-label">Regimen fiscal</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="
					<?php 
						if($regimen_fiscal["opciones"]!==false) 
							foreach($regimen_fiscal["opciones"] as $opc)
								if($opc["idcatalogodet"]==$objeto->getRegimenfiscal())
									echo $opc["descripcion"];
					?>
				</p>
			</div>
		</div>
		<h5>Dirección</h5>
		<div class="form-row"><div class="form-group">
			<label class="col-sm-2 control-label">Calle</label>
			<div class="col-sm-10">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getCalle(); ?></p>
			</div>
		</div>
		<div class="form-row"><div class="form-group">
			<label class="col-sm-2 control-label">Número Exterior</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getNumexterior(); ?></p>
			</div>
			<label class="col-sm-2 control-label">Número Interior</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getNuminterior(); ?></p>
			</div>
		</div>
		<div class="form-row"><div class="form-group">
		    <label class="col-sm-2 control-label">Código Postal</label></span>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getCp(); ?></p>
			</div>
			<label class="col-sm-2 control-label">Colonia</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getColonia(); ?></p>
			</div>
		</div>
		<div class="form-row"><div class="form-group">
			<label class="col-sm-2 control-label">Delegación o Municipio</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getMunicipio(); ?></p>
			</div>
			<label class="col-sm-2 control-label">Estado</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getEstado(); ?></p>
			</div>
		</div>
		<h5>Contacto</h5>
		<div class="form-row"><div class="form-group">
			<label class="col-sm-2 control-label">Representante</label>
			<div class="col-sm-10">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getRepresentante(); ?></p>
			</div>
		</div>
		<div class="form-row"><div class="form-group">
			<label class="col-sm-2 control-label">Cargo</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getCargorepresentante(); ?></p>
			</div>
			<label class="col-sm-2 control-label">Teléfono</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getTelefono(); ?></p>
			</div>
		</div>
		<h5>Legal</h5>
		<div class="form-row"><div class="form-group">
			<label class="col-sm-2 control-label">Número de Autorización SEMARNAT</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getAutsemarnat(); ?></p>
			</div>
			<label class="col-sm-2 control-label">Número de Registro SCT</label>
			<div class="col-sm-4">
				<input class="form-control" disabled="disabled" value="<?= $objeto->getRegistrosct(); ?></p>
			</div>
		</div>
		<h5>Otros</h5>
		<div class="form-row"><div class="form-group">
			<div class="col-sm-2"></div>
			<div class="col-sm-3">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="frm_empresa_coorporativo" name="frm_empresa_coorporativo" value="1" disabled="disabled" <?= ($objeto->getCoorporativo()==1?'checked="checked"':''); ?> />
						Empresa Coorporativo
					</label>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="frm_empresa_transportista" name="frm_empresa_transportista" value="1" disabled="disabled" <?= ($objeto->getTransportista()==1?'checked="checked"':''); ?> />
						Empresa Transportista
					</label>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="frm_empresa_destinofinal" name="frm_empresa_destinofinal" value="1" disabled="disabled" <?= ($objeto->getDestinofinal()==1?'checked="checked"':''); ?> />
						Empresa de Destino Final
					</label>
				</div>
			</div>
		</div>
		<?php if($this->modsesion->hasPermisoHijo(7)): ?>
			<h5>Sucursales</h5>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Sucursal</th>
							<th>Representante</th>
							<th>Ubicación</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Sucursal</th>
							<th>Representante</th>
							<th>Ubicación</th>
						</tr>
					</tfoot>
					<tbody>
						<?php if($sucursales!==false) foreach($sucursales as $sucursal): ?>
						<tr>
							<td><a href="<?= base_url('sucursales/ver/'.$sucursal["idsucursal"]); ?>"><?= $sucursal["nombre"]; ?></a></td>
							<td><?= $sucursal["representante"]; ?></td>
							<td>
								<?= $sucursal["municipio"]; ?>,
								<?= $sucursal["estado"]; ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		<?php endif; ?>
	</form>
</div>
<!-- Vista empresas/vista End -->