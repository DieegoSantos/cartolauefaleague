<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div id="page-wrapper">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-lg-8">
					<h3> Cadastrar Time</h3>
					<form method="post" action="<?php echo base_url('index.php/Times/saveTime') ?>" enctype="multipart/form-data">
						<fieldset class="form-group">
					    	<label for="DSC_EMAIL">Nome Time(*)</label>
					    	<input required autofocus name="NOM_TIME" type="text" class="form-control" id="inputEmail" placeholder="Nome do Time" />
					  	</fieldset>
					  	<fieldset class="form-group">
					    	<label for="exampleInputPassword1">Nome(*)</label>
					    	<input required autofocus name="NOME" type="text" class="form-control" placeholder="Nome" />
						</fieldset>
						<fieldset class="form-group">
					    	<label for="exampleInputPassword1">Tipo Inscrição(*)</label>
					    	<select required autofocus name="TIPO_INSC" type="text" class="form-control">
					    		<option value=""> << Selecione >></option>
					    		<option value="A">Anual</option>
					    		<option value="M">Mensal</option>
					    		<option value="T">Ambos</option>
					    	</select>
						</fieldset>
						<fieldset class="form-group">
					    	<label for="exampleInputPassword1">Escudo(*)</label>
					    	<input autofocus name="ESCUDO" type="file" class="form-control" />
						</fieldset>
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>