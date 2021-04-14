<?php 
include "includes/menu.php"
?>
<!DOCTYPE html>
<html>
<title>Contato | FID - Faculdade Internacional do Delta</title>
<header class="header-default t-center box-silver" style="padding: 130px 0 20px 0; margin: 0 0 0 0;">
	<h1 class="f-bold f-blue titlealt">Contato</h1>   
	<p class="f-light descalt">Deixe sua mensagem ou entre em contato conosco através dos meios abaixo:</p>

	<div class="container">
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-right">
			<form id="contact-form" method="post" action="contact_form/contato.php"> 
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
						<input class="form-control input-lg" id="inputsm" type="text" placeholder="Nome" name="name">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
						<input class="form-control input-lg" id="inputsm" type="email" placeholder="Email" name="email">
					</div>
				</div>
				<div class="form-group">
					<input class="form-control input-lg" id="inputsm" type="text" placeholder="Telefone" name="phone">
				</div>
				<div class="form-group">
					<textarea class="form-control input-lg" rows="6" placeholder="Mensagem" name="message"></textarea>
				</div>

				<div class="g-recaptcha" data-sitekey="6LdPSaAUAAAAACPkR6JZsHST8ZRpkdD-kYhc40dO"></div>

				<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12 col-right">
					<button class="btn btn-primary btn-lg" type="submit" name="BTEnvia">
						Enviar Mensagem <i class="fas fa-paper-plane"></i>
					</button>
				</div>
			</form>
		</div>

	</div>   
</header>

</html>
<?php 
include "includes/footer.php"
?>