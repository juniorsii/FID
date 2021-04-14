<?php 
include "includes/menu.php"
?>
<!DOCTYPE html>
<html>
<title>Inscrição | FID - Faculdade Internacional do Delta</title>
<header class="header-default t-center box-silver" style="padding: 130px 0 20px 0; margin: 0 0 0 0;">
	<h1 class="f-bold f-blue">Pré-Inscrição</h1>   
	<p class="f-light">Preencha os campos abaixo para realizar sua pré-inscrição</p>

	<div class="container">
		<div class="box-full box-silver padding-total-normal">
			<form id="contact-form" method="post" action="contact_form/form_inscricao_paragominas.php">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">Nome:</small>
					<input type="text" class="form input-form-larg radius-p" name="nome" required="" placeholder="Nome">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">Sobrenome:</small>
					<input type="text" class="form input-form-larg radius-p" name="sobrenome" required="" placeholder="Sobrenome">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">CPF:</small>
					<input type="text" class="form input-form-larg formCpf radius-p" name="cpf" required="" placeholder="CPF">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">E-mail:</small>
					<input type="email" class="form input-form-larg radius-p" name="email" required="" placeholder="E-mail">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">Nascimento:</small>
					<input type="text" class="form input-form-larg formAniver radius-p" name="nascimento" required="" placeholder="dd/mm/aaaa">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">Telefone:</small>
					<input type="text" class="form input-form-larg formFone radius-p" name="telefone" required="" placeholder="DDD + Número">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">Celular:</small>
					<input type="text" class="form input-form-larg formFone radius-p" name="celular" required="" placeholder="DDD + Número">
				</div>

				<div class="clear"></div>
				<div class="box box50" style="padding-left: 4px">
					<div class="box-diagram1 padding-total-small box-blue radius-p">
						<small class="small-titulo f-white f-medio">Curso de Interesse:</small>
						<select class="form input-form-larg radius-p" name="interesse" required="">
							<option value="" disabled="" selected="">Selecione um curso:</option>
							<option value="Frota de Máquinas Agrícolas">» Frota de Máquinas Agrícolas</option>
						</select>
					</div>
				</div>
				<div class="box box50" style="padding-right: 0">
					<div class="box-diagram1 padding-total-small box-yellow1 radius-p">
						<small class="small-titulo f-white f-medio">Como descobriu a Pós-Graduação da FID?</small>
						<select class="form input-form-larg radius-p" name="descobriu" required="">
							<option value="" disabled="" selected="">Selecione um área:</option>
							<option value="Aluno FID">Aluno FID</option>
							<option value="Facebook">Facebook</option>
							<option value="Google">Google</option>
							<option value="Instagram">Instagram</option>
							<option value="Anúncios de Jornal">Site</option>
						</select>
					</div>
				</div>  

				<div class="g-recaptcha" data-sitekey="6LdPSaAUAAAAACPkR6JZsHST8ZRpkdD-kYhc40dO"></div>

				<div style="padding-top: 20px;">
					<button class="btn btn-primary btn-lg" type="submit" name="BTEnvia">
						Enviar Mensagem <i class="fas fa-paper-plane"></i>
					</button>
				</div>
			</form>
		</div>
	</div>



</div>   
</header>

</html>
<?php 
include "includes/footer.php"
?>