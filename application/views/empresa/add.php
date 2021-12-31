<?php echo form_open('empresa/add',array("class"=>"form-horizontal")); ?>
	<div class="form-group">
		<label for="uf" class="col-md-4 control-label">UF</label>
			<div class="col-md-4">
				<select id="inputuf" aria-describedby="ufHelp" name="uf" class="form-control" required="true">
	                <option value="" selected="true">Selecione o Estado</option>  
	                <option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
            	</select>
			</div>
	</div>
	
	<div class="form-group">
		<label for="razao_social" class="col-md-4 control-label">Razao Social</label>
		<div class="col-md-4">
			<input type="text" name="razao_social" value="<?php echo $this->input->post('razao_social'); ?>" class="form-control" id="razao_social" />
		</div>
	</div>
	<div class="form-group">
		<label for="cnpj" class="col-md-4 control-label">CNPJ</label>
		<div class="col-md-4">
			<input type="text" name="cnpj" value="<?php echo $this->input->post('cnpj'); ?>" class="form-control cnpj" id="cnpj" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Salvar</button>
        </div>
	</div>

<?php echo form_close(); ?>