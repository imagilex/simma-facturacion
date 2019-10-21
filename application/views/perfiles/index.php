<?= $menumain; ?>
<div class="container">
	<div class="btn-toolbar float-right" role="toolbar">
		<div class="btn-group" role="group">
			<?php if($this->modsesion->hasPermisoHijo(83)): ?>
			<button type="button" class="btn btn-outline-secondary" title="Nuevo Perfil" onclick="location.href='<?= base_url('perfiles/nuevo');?>';">
				<i class="far fa-file-alt"></i>
			</button>
			<?php endif; ?>
		</div>
	</div>
	<h3>Perfiles</h3>
		<table class="table table-striped table-hover table-responsive-sm">
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
				<?php if($perfiles!==false) foreach($perfiles as $perfil): ?>
					<tr>
						<td>
							<?php if($this->modsesion->hasPermisoHijo(84)): ?>
							<a href="<?= base_url('perfiles/ver/'.$perfil["idperfil"])?>">
							<?php endif; ?>
								<?= $perfil["nombre"]; ?>
							<?php if($this->modsesion->hasPermisoHijo(84)): ?>
							</a>
							<?php endif; ?>
						</td>
						<td><?= $perfil["observaciones"]; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
</div>