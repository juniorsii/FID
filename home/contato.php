<?php 
include 'includes/menu.php'
?>
<title>Ouvidoria | FID - Faculdade Internacional do Delta</title>
<div class="detail-header detail-header-contact">
    <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Avenida%20Primeiro%20de%20Maio%20Bairro%20Canta%20Galo%2C%20Parna%C3%ADba-PI+(Faculdade%20Internacional%20do%20Delta)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</header>    
<!-- end of banner header -->
<main>    
    <div class="container">
        <div class="home-contact">

            <div class="container content">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-left">
                    <h3 class="f-bold">Fale Conosco</h3>
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img src="images/icon-address.png">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="description">
                                Avenida Primeiro de Maio, Bairro Canta Galo <br>Parnaíba-PI <b>CEP: 64202-740</b>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img src="images/icon-phone.png">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="description">
                                +55 86 3322.5062<br>+55 86 9 8825.2541
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img src="images/icon-email.png">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="description">
                                <a href="mailto:ouvidoria@deltafaculdade.edu.br">ouvidoria@deltafaculdade.edu.br</a>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img src="images/icon-skype.png">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="description">
                                <a href="">khoipng</a><br>
                                Online 27/7
                            </div>
                        </div>
                    </div>-->

                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-right">
                    <form id="contact-form" method="post" action="contact_form/ouvidoria.php"> 
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

                        <div class="form-group">
                            <button class="btn btn-primary btn-lg" type="submit" name="BTEnvia">
                                Enviar Mensagem <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>

    </div>

</main>
<?php 
include 'includes/footer.php'
?>