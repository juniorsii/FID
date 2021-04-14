<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Faculdade Internacional do Delta / Cursos de Graduação e Pós-Graduação">
<meta name="keywords" content="Faculdade, Graduação, Pós-Graduação" />
<meta name="author" content="Junior Silva Desenvolvedor">
<link rel="icon" href="images/favicon.ico">

<html>
<title>Inscrição | FID - Faculdade Internacional do Delta</title>

<!-- Bootstrap core CSS -->
<link href="libs/bootstrap.min.css" rel="stylesheet">

<!-- Re-Captcha Google -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- STYLES -->
<link rel="stylesheet" href="css/font-awesome.css">       
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">

<!-- ICONS AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- FONT -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<section class="box-full padding-default box-white" id="datas">
	<div class="box-center">
		<article class="box box33">
			<a href="https://vestibular.deltafaculdade.edu.br/">
				<div class="box-full padding-total-low box-silver t-center" style="border:1px solid rgba(0,0,0,.04)">
					<h1 class="f-elight f-black subtitle-page t-upper"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar <br><strong class="f-bold text-page">a Home</strong></h1>
				</a>
			</div>
		</article>

		<article class="box box33">
			<a href="https://deltafaculdade.edu.br/">
				<div class="box-full padding-total-low box-silver t-center" style="border:1px solid rgba(0,0,0,.04)">
					<h1 class="f-elight f-black subtitle-page t-upper"><i class="fa fa-university" aria-hidden="true"></i> Portal FID <br><strong class="f-bold text-page">Institucional</strong></h1></a>
				</div>
			</article>

			<article class="box box33">
				<a href="https://pos.deltafaculdade.edu.br/">
					<div class="box-full padding-total-low box-silver t-center" style="border:1px solid rgba(0,0,0,.04)">
						<h1 class="f-elight f-black subtitle-page t-upper"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Pós-Graduação <br><strong class="f-bold text-page">Novos Cursos</strong></h1></a>
					</div>
				</article>

				<header class="header-default t-center" style="margin-bottom: 0px;">
					<h1 class="f-thim f-black t-upper">Inscreva-se no <strong class="f-blue t-upper f-bold">Vestibular Agendado / <span class="f-yellow">2019.2</span></strong></h1>
					<p class="f-silver f-light">Preencha os campos abaixo para realizar sua inscrição</p>

				</div>
			</section>

			<header class="header-default t-center box-silver" style="padding: 130px 0 20px 0; margin: 0 0 0 0;">

				<div class="container">
					<div class="box-full box-silver padding-total-normal" style="margin-top: 50px;">
						<form id="contact-form" method="post" action="contact_form/form_inscricao.php">
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

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
								<small class="small-titulo f-silver f-light t-upper">Data da prova:</small>
								<input type="text" class="form input-form-larg formFone radius-p" name="data" required="" placeholder="dd/mm/aaaa">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
								<small class="small-titulo f-silver f-light t-upper">Horário da prova:</small>
								<input type="text" class="form input-form-larg formFone radius-p" name="hora" required="" placeholder="00:00">
							</div>

							<div class="clear"></div>
							<div class="box box50" style="padding-left: 4px">
								<div class="box-diagram1 padding-total-small box-blue radius-p">
									<small class="small-titulo f-white f-medio">Curso de Interesse:</small>
									<select class="form input-form-larg radius-p" name="interesse" required="">
										<option value="" disabled="" selected="">Selecione um curso:</option>
										<option value="Serviço Social">» Serviço Social</option>
										<option value="História">» História</option>
									</select>
								</div>
							</div>
							<div class="box box50" style="padding-right: 0">
								<div class="box-diagram1 padding-total-small box-yellow1 radius-p">
									<small class="small-titulo f-white f-medio">Como descobriu o Vestibular da FID?</small>
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
									Finalizar Inscrição <i class="fa fa-check-circle"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div> 
		</header>
