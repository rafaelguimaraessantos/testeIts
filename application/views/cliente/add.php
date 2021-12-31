<?php echo form_open('cliente/add',array("class"=>"form-horizontal")); ?>
<form >
	<div class="form-group">
		<label for="id_empresa" class="col-md-4 control-label ">Empresa</label>
		<div class="col-md-4">
			<select id="id_empresa" aria-describedby="id_empresa" name="id_empresa" class="form-control" required="true">
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
			<input type="text" name="nome" placeholder="Nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
		</div>
	</div>
	<div class="form-group">
		<label for="cpf_cnpj" class="col-md-4 control-label">Cpf/Cnpj</label>
		<div class="col-md-4">
			<input type="text"  name="cpf_cnpj" placeholder="Cpf/Cnpj" value="<?php echo $this->input->post('cpf_cnpj'); ?> cpf" class="form-control cpfOuCnpj" id="cpf_cnpj" />
		</div>
	</div>
	<div class="form-group">
		<label for="telefone" class="col-md-4 control-label">Telefone</label>
		<div class="col-md-4">
			<input type="text" name="telefone" placeholder="Telefone" value="<?php echo $this->input->post('telefone'); ?>" class="form-control telefone" id="telefone" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">E-mail</label>
		<div class="col-md-4">
			<input type="text" name="email" placeholder="E-mail" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="cep" class="col-md-4 control-label">CEP</label>
		<div class="col-md-4">
			<input type="text" id="cep" name="cep" placeholder="CEP" value="<?php echo $this->input->post('cep'); ?>" class="form-control cep" id="cep" />
		</div>
	</div>
	<div class="form-group">
		<label for="endereco"  id="endereco" class="col-md-4 control-label">Endereço</label>
		<div class="col-md-4">
			<input type="text" id='rua' name="endereco" placeholder="Endereço" value="<?php echo $this->input->post('endereco'); ?>" class="form-control" id="endereco" />
		</div>
	</div>
	<div class="form-group">
		<label for="numero" class="col-md-4 control-label">Número</label>
		<div class="col-md-4">
			<input type="text" name="numero" id="numero" placeholder="Número" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
		</div>
	</div>
	<div class="form-group">
		<label for="estado" class="col-md-4 control-label">Estado</label>
		<div class="col-md-4">
			<input type="text" name="estado" id="estado" placeholder="Estado" value="<?php echo $this->input->post('estado'); ?>" class="form-control" id="estado" />
		</div>
	</div>
	<div class="form-group">
		<label for="cidade" class="col-md-4 control-label">Cidade</label>
		<div class="col-md-4">
			<input type="text" name="Cidade" placeholder="Cidade" value="<?php echo $this->input->post('cidade'); ?>" class="form-control" id="cidade" />
		</div>
	</div>
	<div class="form-group">
		<label for="bairro" class="col-md-4 control-label">Bairro</label>
		<div class="col-md-4">
			<input type="text" name="bairro" placeholder="Bairro" value="<?php echo $this->input->post('bairro'); ?>" class="form-control" id="bairro" />
		</div>
	</div>
	<!-- <div class="form-group">
		<label for="data_cadastro" class="col-md-4 control-label">Data de cadastro</label>
		<div class="col-md-4">
			<input type="text" name="data_cadastro" placeholder="Data de cadastro" value="<?php echo $this->input->post('data_cadastro'); ?>" class="form-control date_time" id="Data de Nascimento" />
		</div>
	</div> -->
	<div class="form-group">
		<label for="data_nascimento" class="col-md-4 control-label">Data de nascimento</label>
		<div class="col-md-4">
			<input type="text" name="data_nascimento" placeholder="Data de nascimento" value="<?php echo $this->input->post('data_nascimento'); ?>" class="form-control date" id="Data de Nascimento" />
		</div>
	</div>
	<div class="form-group">
		<label for="rg" class="col-md-4 control-label">RG</label>
		<div class="col-md-4">
			<input type="text" name="rg" placeholder="RG" value="<?php echo $this->input->post('rg'); ?>" class="form-control rg" id="rg" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
</form>
<?php echo form_close(); ?>