$(function () {
    // AJAX SUBMIT DEFAULT
    $('.j_formajax').submit(function () {
        var form = $(this);
        var callback = form.find('input[name="callback"]').val();
        var url = form.find('input[name="url"]').val();

        if (typeof tinyMCE !== 'undefined') {
            tinyMCE.triggerSave();
        }

        if (url == 1) {
            var source = '../';
        }
        else {
            var source = '';
        }

        form.ajaxSubmit({
            url: source + '_ajax/ajax' + callback + '.php',
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                $('.form_load').fadeIn(300);
                $('.mask-modal').fadeIn(300);
                $('.trigger').fadeOut(500, function () {
                    $(this).remove();
                });
            },
            success: function (resposta) {
                console.clear();
                console.log(resposta);

                if (resposta.error) {
                    $('.trigger-box').html('<div class="trigger alert" style="display:none">' + resposta.error + ' <span class="trigger-close"><i class="fa fa-close"></i></span></div>');
                    $('.trigger').fadeIn();
                } else {
                    $('.trigger-box').html('<div class="trigger accept" style="display:none">' + resposta.accept + ' <span class="trigger-close"><i class="fa fa-close"></i></span></div>');
                    $('.trigger').fadeIn();

                    if (resposta.redirect) {
                        setTimeout(function () {
                            location.href = resposta.redirect;
                        }, resposta.time);
                    }

                    if (resposta.result) {
                        $(resposta.result).prependTo($('.j_newresult'));
                        $('.j_new').fadeIn();
                    }

                    if (resposta.replace) {
                        $('.j_replace').fadeOut(function () {
                            $(this).remove();
                        });

                        $('.j_replacebox').html(resposta.replace);
                        $('.j_replace').fadeIn();
                    }

                    if (resposta.clear) {
                        form.find('input[class!="noclear"], textarea').val('');
                    }
                }

                $('.form_load').fadeOut(300);
                if (!resposta.mask) {
                    $('.mask-modal').fadeOut(300);
                }

                $('.trigger .trigger-close').click(function () {
                    $('.trigger').fadeOut();
                });
            }
        });
        return false;
    });

    // AJAX CHANGE DEFAULT
    $('.j_formajax_c').change(function () {
        var form = $(this);
        var callback = form.find('input[name="callback"]').val();

        form.ajaxSubmit({
            url: '_ajax/ajax' + callback + '.php',
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                $('.form_load').fadeIn(300);
                $('.mask_load').fadeIn(300);
                $('.trigger-modal').fadeOut(500, function () {
                    $(this).remove();
                });
            },
            success: function (resposta) {
                console.clear();
                console.log(resposta);

                if (resposta.error) {
                    $('.trigger-box').html('<div class="trigger-modal"><div class="trigger alert">' + resposta.error + ' <span class="trigger-close"><i class="fa fa-close"></i></span></div></div>');
                    $('.trigger-modal').fadeIn();
                } else {
                    $('.trigger-box').html('<div class="trigger-modal"><div class="trigger accept">' + resposta.accept + ' <span class="trigger-close"><i class="fa fa-close"></i></span></div></div>');
                    $('.trigger-modal').fadeIn();

                    if (resposta.redirect) {
                        setTimeout(function () {
                            location.href = resposta.redirect;
                        }, resposta.time);
                    }

                    if (resposta.result) {
                        $(resposta.result).prependTo($('.j_newresult'));
                        $('.j_new').fadeIn();
                    }

                    if (resposta.replace) {
                        $('.j_replace').fadeOut(function () {
                            $(this).remove();
                        });

                        $('.j_replacebox').html(resposta.replace);
                        $('.j_replace').fadeIn();
                    }

                    if (resposta.clear) {
                        form.find('input[class!="noclear"], textarea').val('');
                    }
                }
                $('.form_load').fadeOut(300);
                $('.mask_load').fadeOut(300);

                $('.trigger-modal .trigger-close').click(function () {
                    $('.trigger-modal').fadeOut();
                });
            }
        });
        return false;
    });

    $('.j_formsocial').submit(function () {
        var form = $(this);
        var data = $(this).serialize();

        $.ajax({
            url: '../_ajax/ajaxSocial.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                form.find('.form_load').fadeIn(500);
                $('.trigger-modal').fadeOut(500, function () {
                    $(this).remove();
                });
            },
            success: function (resposta) {
                console.clear();
                console.log(resposta);

                if (resposta.error) {
                    $('.trigger-box').html('<div class="trigger-modal"><span class="close-modal"><i class="fa fa-close"></i></span><div class="trigger alert">' + resposta.error + '</div></div>');
                    $('.trigger-modal').fadeIn();
                } else {
                    $('.trigger-box').html('<div class="trigger-modal"><span class="close-modal"><i class="fa fa-close"></i></span><div class="trigger accept">' + resposta.accept + '</div></div>');
                    $('.trigger-modal').fadeIn();

                    //form.find('input[class!="noclear"], textarea').val('');
                }
                form.find('.form_load').fadeOut(500);

                $('.trigger-modal .close-modal').click(function () {
                    $('.trigger-modal').fadeOut();
                });
            }
        });
        return false;
    });

    $('.j_formcontato').submit(function () {
        var form = $(this);
        var data = $(this).serialize();

        $.ajax({
            url: '../_ajax/ajaxContato.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                form.find('.form_load').fadeIn(500);
                $('.trigger-modal').fadeOut(500, function () {
                    $(this).remove();
                });
            },
            success: function (resposta) {
                console.clear();
                console.log(resposta);

                if (resposta.error) {
                    $('.trigger-box').html('<div class="trigger-modal"><span class="close-modal"><i class="fa fa-close"></i></span><div class="trigger alert">' + resposta.error + '</div></div>');
                    $('.trigger-modal').fadeIn();
                } else {
                    $('.trigger-box').html('<div class="trigger-modal"><span class="close-modal"><i class="fa fa-close"></i></span><div class="trigger accept">' + resposta.accept + '</div></div>');
                    $('.trigger-modal').fadeIn();

                    //form.find('input[class!="noclear"], textarea').val('');
                }
                form.find('.form_load').fadeOut(500);

                $('.trigger-modal .close-modal').click(function () {
                    $('.trigger-modal').fadeOut();
                });
            }
        });
        return false;
    });

    $('.j_list').on('click', '.j_view', function () {
        var action = $(this).attr('role');
        var callback = $(this).attr('id');
        var id = $(this).attr('rel');

        $.ajax({
            url: '_ajax/ajax' + callback + '.php',
            data: {action: action, id: id},
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                $('.mask-modal').fadeIn();
                $('.form_load').fadeIn();
                $('.content-modal').fadeOut(500, function () {
                    $(this).remove();
                });
            },
            success: function (resposta) {
                console.clear();
                console.log(resposta);

                $('.content-ajax-box').html(resposta.result);
                $('.content-modal').fadeIn();
                $('.form_load').fadeOut();

                $('.mask-modal').click(function () {
                    $('.content-modal').fadeOut(function () {
                        $(this).remove();
                    });
                });
            }
        });
    });
});