<?php 
include "includes/menu.php"
?>
<!DOCTYPE html>
<html>
<title>Pré-inscrição Youtube | FID - Faculdade Internacional do Delta</title>
<header class="header-default t-center box-silver" style="padding: 130px 0 20px 0; margin: 0 0 0 0;">
	<h1 class="f-bold f-blue">Pré-Inscrição Youtube</h1>   
	<p class="f-light">Preencha os campos abaixo para realizar sua pré-inscrição</p>

	<div class="container">
		<div class="box-full box-silver padding-total-normal">
			<form id="contact-form" method="post" action="contact_form/youtube.php">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">Nome:</small>
					<input type="text" class="form input-form-larg radius-p" name="nome" required="" placeholder="Nome">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">Sobrenome:</small>
					<input type="text" class="form input-form-larg radius-p" name="sobrenome" required="" placeholder="Sobrenome">
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">E-mail:</small>
					<input type="email" class="form input-form-larg radius-p" name="email" required="" placeholder="E-mail">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
					<small class="small-titulo f-silver f-light t-upper">Whatsapp:</small>
					<input type="text" class="form input-form-larg formFone radius-p" name="celular" required="" placeholder="DDD + Número">
				</div>
				<div class="clear"></div> 

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