 <table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>UF</th>
		<th>Razao Social</th>
		<th>CNPJ</th>
		<th>Ações</th>
    </tr>
	<?php foreach($empresas as $e){ ?>
    <tr>
		<td><?php echo $e['id_empresa']; ?></td>
		<td><?php echo $e['uf']; ?></td>
		<td><?php echo $e['razao_social']; ?></td>
		<td><?php echo $e['cnpj']; ?></td>
		<td>
			
            <a href="<?php echo site_url('empresa/edit/'.$e['id_empresa']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('empresa/remove/'.$e['id_empresa']); ?>" class="btn btn-danger btn-xs">Delete</a>

        </td>

    </tr>

	<?php } ?>
</table>
<div class="text-center">
	  <a href="<?php echo site_url('empresa/add'); ?>" class="btn btn-success btn-lg">Adicionar uma nova empresa</a>
</div> 
