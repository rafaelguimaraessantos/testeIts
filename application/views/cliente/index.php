<form action="<?= base_url('cliente') ?>" method="get" class="mt-2">
	<div class="row col-md-8">
	<div class="form-group col-2 col-sm-12 col-md- col-lg-3">
		<label></label>
		<div class="input-group">
		<input type="text" id="botao" name="termo" class="form-control" value="<?=isset($_GET['termo'])?$_GET['termo']:'';?>" value="<?=(isset($filter['termo'])?$filter['termo']:'')?>" placeholder="Data, CPF ou CNPJ"/>            
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-2">
		<label></label>
		<div class="input-group">
			<input type="date" name="data_cadastro" class="form-control" value="<?=isset($_GET['termo'])?$_GET['data_cadastro']:'';?>"/>
		</div>
	</div>
	<div class="form-group col-2 col-sm-12 col-md-3 col-lg-1">
		<label></label>
		<button type="submit" class='form-control btn btn-primary' id='select' value='Buscar'>
		<i class="glyphicon glyphicon-search" title="filtrar"></i>
		</button>
	</div>
	</div>
</form>  
<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Empresa</th>
		<th>Nome</th>
		<th>CPF/CNPJ</th>
		<th>Data Cadastro</th>
		<th>Telefone</th>
		<th>E-mail</th>
		<th>CEP</th>
		<th>Endereco</th>
		<th>Número</th>
		<th>Data de nascimento</th>
		<!-- <th>RG</th> -->
		<th>Ações</th>
    </tr>
	<?php foreach($clientes as $c){ ?>
    <tr>
		<td><?php echo $c['id_cliente']; ?></td>
		<td><?php echo $c['id_empresa']; ?></td>
		<td><?php echo $c['nome']; ?></td>
		<td><?php echo $c['cpf_cnpj']; ?></td> 
		<td><?=MY_Controller::dataHoraBR($c['data_cadastro'])?></td>
		<td><?php echo $c['telefone']; ?></td>
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['cep']; ?></td>
		<td><?php echo $c['endereco']; ?></td>
		<td><?php echo $c['numero']; ?></td>
		<td><?=MY_Controller::dataBR($c['data_nascimento'])?></td>
		<!-- <td><?php echo $c['rg']; ?></td> -->
		<td>			
            <a href="<?php echo site_url('cliente/edit/'.$c['id_cliente']); ?>" class="btn btn-info btn-xs">Editar</a> 
            <a href="<?php echo site_url('cliente/remove/'.$c['id_cliente']); ?>" class="btn btn-danger btn-xs">Deletar</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
	<?php echo $this->pagination->create_links(); ?>
</div>
<div class="text-center">
	  <a href="<?php echo site_url('cliente/add'); ?>" class="btn btn-success btn-lg">Adicionar um novo cliente</a>
</div>
