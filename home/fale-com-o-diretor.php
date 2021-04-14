<?php 
include "includes/menu.php"
?>
<!DOCTYPE html>
<html>
<title>Fale com o Diretor | FID - Faculdade Internacional do Delta</title>
<body style="background-color: #f4f4f4;">
	<div class="detail-header detail-header-aboutus">
		<div class="container">
			<h1 class="f-bold">Fale com o Diretor</h1>

			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="">Deixe sua mensagem aqui ou envie por Whatsapp através do número</a></li>
				<li class="breadcrumb-item active">(86) 99593-2728</li>
			</ol>
		</div>
		<div class="background bg5"></div>
		<div class="pel"></div>
	</div>

	<div class="container" style="padding-top: 40px;">
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-right">
			<form id="contact-form" method="post" action="contact_form/fale-com-o-diretor.php"> 
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