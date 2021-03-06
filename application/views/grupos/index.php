<?= $menumain; ?>
<div class="container">
	<div class="btn-toolbar float-right" role="toolbar">
		<div class="btn-group" role="group">
			<?php if($this->modsesion->hasPermisoHijo(110)): ?>
			<button type="button" class="btn btn-outline-secondary" title="Nuevo Grupo" onclick="location.href='<?= base_url('grupos/nuevo');?>';">
				<i class="far fa-file-alt"></i>
			</button>
			<?php endif; ?>
		</div>
	</div>
	<h3>Grupos</h3>
		<table class="table table-hover table-sm table-responsive-sm">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripción</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Nombre</th>
					<th>Descripción</th>
				</tr>
			</tfoot>
			<tbody>
				<?php if($grupos!==false) foreach($grupos as $grupo): ?>
					<tr>
						<td>
							<?php if($this->modsesion->hasPermisoHijo(111)): ?>
							<a href="<?= base_url('grupos/ver/'.$grupo["idgrupo"])?>">
							<?php endif; ?>
								<?= $grupo["nombre"]; ?>
							<?php if($this->modsesion->hasPermisoHijo(111)): ?>
							</a>
							<?php endif; ?>
						</td>
						<td><?= $grupo["descripcion"]; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
</div>