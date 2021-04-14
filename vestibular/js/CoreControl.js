
$(document).ready(function () {
    // SHADOWBOX
    Shadowbox.init();

    //FIXED HEADER
    $(window).scroll(function () {
        var heidhtHeader = $('.content-header').height();
        if ($(this).scrollTop() > heidhtHeader) {
            $('.header-fix').slideDown(300);
        } else {
            $('.header-fix').slideUp(300);
        }
    });

    // SEARCH BTN
    $('.j_search').click(function () {
        $('.redes-header .search input').fadeIn();
    });

    //SLIDE UNIDADES
    $('.menu-uni').click(function () {
        $('.content-unidades .nav ul').slideToggle(function () {
            $('.nav ul li a').click(function () {
                $('.content-unidades .nav ul').slideUp();
            });
        });
    });

    //TABS DEFAULT
    $('.nav ul li a').click(function (event) {
        event.preventDefault();

        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tabs").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    //TABS DEFAULT
    $('.tabs_nav ul li a').click(function (event) {
        event.preventDefault();

        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tabs").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    //TABS DEFAULT
    $('.content-box-cate nav a').click(function (event) {
        event.preventDefault();

        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tabs").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    // DISABLE/ENABLE SCROLL MAP
    $('.map_canvas1').addClass('scrolloff');
    $('.canvas1').on('click', function () {
        $('.map_canvas1').removeClass('scrolloff');
    });
    $(".map_canvas1").mouseleave(function () {
        $('.map_canvas1').addClass('scrolloff');
    });

    // CORE LINKS
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var rel = $(this).attr('rel');

        if (rel == 'core') {
            var target = this.hash;
            $('html, body').animate({
                scrollTop: $(target).offset().top - $('.header').height() // => SCROLL - ALTURA DO HEADER FIXO
            }, 900);
        }
    });

    // MENU MÓVEL
    $('.menu-anchor, .menu-anchor2').on('click touchstart', function (e) {
        $('html').toggleClass('menu-active');
        e.preventDefault();
        $(this).toggleClass('click');
    });

    // TAB TRANSFERÊNCIA
    $('.b_tabtrans1').click(function () {
        $('.result-box-trans').html('<div class="jbox-trans1"><div class="box-diagram2"><small class="small-titulo f-black t-upper f-normal"><i class="fa fa-arrow-circle-right"></i> Último Curso de Graduação</small><input type="text" class="form input-form-larg radius-p" name="trans_ult_grad" required placeholder="Último Curso de Graduação"></div><div class="box-diagram2 right-none"><small class="small-titulo f-black t-upper f-normal"><i class="fa fa-arrow-circle-right"></i> Curso de Interesse</small><select class="form input-form-larg radius-p" name="trans_curso_dest" required><option value="" selected disabled>Selecione um Curso</option><option value="Administração">Administração</option><option value="Biomedicina">Biomedicina</option><option value="Educação Física">Educação Física</option><option value="Enfermagem">Enfermagem</option><option value="Farmácia">Farmácia</option><option value="Fisioterapia">Fisioterapia</option><option value="Fonoaudiologia">Fonoaudiologia</option><option value="Nutrição">Nutrição</option><option value="Odontologia">Odontologia</option><option value="Engenharia Elétrica">Engenharia Elétrica</option><option value="Psicologia">Psicologia</option><option value="Serviço Social">Serviço Social</option><option value="Terapia Ocupacional">Terapia Ocupacional</option><option value="Direito">Direito</option><option value="Arquitetura">Arquitetura</option><option value="Medicina Veterinária">Medicina Veterinária</option><option value="Engenharia Civil">Engenharia Civil</option><option value="Engenharia Mecânica">Engenharia Mecânica</option></select></div></div>');
        $('.jbox-trans1').fadeIn();
        $('.jbox-trans2').remove();    
    });

    $('.b_tabtrans2').click(function () {
        $('.jbox-trans1').fadeOut();
        $('.jbox-trans1').remove();
        $('.result-box-trans').html('<div class="box-diagram2"><small class="small-titulo f-black t-upper f-normal"><i class="fa fa-arrow-circle-right"></i> Curso de Origem</small><input type="text" class="form input-form-larg radius-p" name="trans_curso_orig" required placeholder="Curso de Origem"></div><div class="box-diagram2 right-none"><small class="small-titulo f-black t-upper f-normal"><i class="fa fa-arrow-circle-right"></i> Curso de Destino</small><select class="form input-form-larg radius-p" name="trans_curso_dest" required><option value="" selected disabled>Selecione um Curso</option><option value="Administração">Administração</option><option value="Biomedicina">Biomedicina</option><option value="Educação Física">Educação Física</option><option value="Enfermagem">Enfermagem</option><option value="Farmácia">Farmácia</option><option value="Fisioterapia">Fisioterapia</option><option value="Fonoaudiologia">Fonoaudiologia</option><option value="Nutrição">Nutrição</option><option value="Odontologia">Odontologia</option><option value="Engenharia Elétrica">Engenharia Elétrica</option><option value="Psicologia">Psicologia</option><option value="Serviço Social">Serviço Social</option><option value="Terapia Ocupacional">Terapia Ocupacional</option><option value="Direito">Direito</option><option value="Arquitetura">Arquitetura</option><option value="Medicina Veterinária">Medicina Veterinária</option><option value="Engenharia Civil">Engenharia Civil</option><option value="Engenharia Mecânica">Engenharia Mecânica</option></select></div><div class="box-diagram2"><small class="small-titulo f-black t-upper f-normal"><i class="fa fa-arrow-circle-right"></i>Instituição de Ensino de Origem</small><input type="text" class="form input-form-larg radius-p" name="trans_ies_orig" required placeholder="Instituição de Ensino de Origem"></div><div class="box-diagram2 right-none"><small class="small-titulo f-black t-upper f-normal"><i class="fa fa-arrow-circle-right"></i> Instituição de Ensino de Destino</small><input type="text" class="form input-form-larg radius-p" name="trans_ies_dest" required placeholder="Instituição de Ensino de Destino"></div><div class="box-diagram2"><small class="small-titulo f-black t-upper f-normal"><i class="fa fa-arrow-circle-right"></i> Último Semestre Cursado</small><input type="text" class="form input-form-larg radius-p" name="trans_ies_seme" required placeholder="Último Semestre Cursado"></div><div class="box-diagram2 right-none"><small class="small-titulo f-black t-upper f-normal"><i class="fa fa-arrow-circle-right"></i> Valor da Última Mensalidade Paga na IES</small><input type="text" class="form input-form-larg radius-p" name="trans_ies_mens" required placeholder="Valor da última Mensalidade paga na IES"></div>');
        $('.jbox-trans2').fadeIn();
    });
});


// GESTÃO DE JANELA MODAL
$(document).ready(function () {
    //$('.content-modal').hide();
    //$('.mask-modal').hide();
    $('.loading-modal').hide();

    $("a[rel=modalServ]").click(function (ev) {
        ev.preventDefault();

        var id = $(this).attr("href");

        $('.mask-modal').fadeIn(200);
        $(id).fadeIn(200);
    });

    $('.mask-modal').click(function () {
        $('.mask-modal').fadeOut(300);
        $('.content-modal').fadeOut(300);
        $('.content-modal2').fadeOut(300);
    });

    $('.close-modal, .close-modal2').click(function () {
        $('.mask-modal').fadeOut(300);
        $('.content-modal').fadeOut(300);
        $('.content-modal2').fadeOut(300);
        $('.content-banner-modal').fadeOut(300);
    });

    //CLICK MODAL
    $('.btn_modal').click(function () {
        $('.mask-modal').fadeIn();
        $('.form_load').fadeIn(800, function () {
            $('.form_load').fadeOut();
            $('.content-modal').fadeIn();
        });

        $('.mask-modal').click(function () {
            $('.mask-modal').fadeOut(300);
            $('.content-modal').fadeOut(300);
            $('.content-modal2').fadeOut(300);
        });

        $('.close-modal, .close-modal2').click(function () {
            $('.mask-modal').fadeOut(300);
            $('.content-modal').fadeOut(300);
            $('.content-modal2').fadeOut(300);
        });
    });
});

// GESTÃO DE HELLOBAR
$(document).ready(function () {
    $('.mask-modal-home').fadeIn(300);
    $('.content-modal-home').addClass('open');

    $('.mask-modal-home').click(function () {
        $('.mask-modal-home').fadeOut(300);
        $('.content-modal-home').removeClass('open');
    });

    $('.close-modal-home').click(function () {
        $('.mask-modal-home').fadeOut(300);
        $('.content-modal-home').removeClass('open');
    });
});

