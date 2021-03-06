<?php echo form_open('cliente/edit/'.$cliente['id_cliente'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_empresa" class="col-md-4 control-label ">Empresa</label>
		<div class="col-md-4">
			<select id="id_empresa" aria-describedby="id_empresa" name="id_empresa" class="form-control">
				<option value="" selected="true">Selecione a empresa</option>  
				<?php foreach ($empresas as $key => $empresa) {
					echo "<option value=".$empresa['id_empresa'].">".$empresa['razao_social'].' - '.$empresa['uf']."</option>";
				} ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-4">
			<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $cliente['nome']); ?>" class="form-control" id="nome" />
		</div>
	</div>
	<div class="form-group">
		<label for="cpf_cnpj" class="col-md-4 control-label">CPF CNPJ</label>
		<div class="col-md-4">
			<input type="text" name="cpf_cnpj" value="<?php echo ($this->input->post('cpf_cnpj') ? $this->input->post('cpf_cnpj') : $cliente['cpf_cnpj']); ?>" class="form-control cpfOuCnpj" id="cpf_cnpj" />
		</div>
	</div>

	<div class="form-group">
		<label for="telefone" class="col-md-4 control-label">Telefone</label>
		<div class="col-md-4">
			<input type="text" name="telefone" value="<?php echo ($this->input->post('telefone') ? $this->input->post('telefone') : $cliente['telefone']); ?>" class="form-control telefone" id="telefone" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-4">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $cliente['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="cep" class="col-md-4 control-label">CEP</label>
		<div class="col-md-4">
			<input type="text" name="cep" value="<?php echo ($this->input->post('cep') ? $this->input->post('cep') : $cliente['cep']); ?>" class="form-control" id="cep" />
		</div>
	</div>
	<div class="form-group">
		<label for="endereco" class="col-md-4 control-label">Endere??o</label>
		<div class="col-md-4">
			<input type="text" name="endereco" value="<?php echo ($this->input->post('endereco') ? $this->input->post('endereco') : $cliente['endereco']); ?>" class="form-control" id="endereco" />
		</div>
	</div>
	<div class="form-group">
		<label for="numero" class="col-md-4 control-label">N??mero</label>
		<div class="col-md-4">
			<input type="text" name="numero" value="<?php echo ($this->input->post('numero') ? $this->input->post('numero') : $cliente['numero']); ?>" class="form-control" id="numero" />
		</div>
	</div>
	<div class="form-group">
		<label for="data_nascimento" class="col-md-4 control-label">Data de nascimento</label>
		<div class="col-md-4">
			<input type="text" name="data_nascimento" value="<?php echo ($this->input->post('data_nascimento') ? $this->input->post('data_nascimento') : $cliente['data_nascimento']); ?>" class="form-control" id="data_nascimento" />
		</div>
	</div>
	<div class="form-group">
		<label for="rg" class="col-md-4 control-label">RG</label>
		<div class="col-md-4">
			<input type="text" name="rg" value="<?php echo ($this->input->post('rg') ? $this->input->post('rg') : $cliente['rg']); ?>" class="form-control rg" id="rg" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>