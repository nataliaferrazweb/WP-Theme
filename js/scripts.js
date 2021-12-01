$(document).ready(function(){
    $('.alturaVariavel').css('height', $(window).height() - 40+'px');
    var altura = $(window).height();
    altura = (altura/1.1) - 40;
    $('.modal-content').css('height', ($(window).height()/1.1)+'px');
    $('.modal-body').css('height', (($(window).height()/1.1) - 55)+'px');
    //$('.alturaVariavelModal').css('height', altura+'px');

    $content = $("#modalBts .modal-body");
    $('.membro a').on('click', function() {
        var title_page = $(this).data('pagina');

        var datasend = {action: 'load_input_post', title:title_page};
        $.ajax({
            type: "POST",
            data: datasend,
            dataType: "json", //Esse retorno pode ser em HTML tbm
            url: ajaxurl,
            beforeSend: function() {
                $content.html(loader).fadeIn();
            },
            success: function(data) {
                console.log(data);
                if(typeof data != "undefined" && typeof data !== null) {
                    if(typeof data.conteudo1 != "undefined" && typeof data.conteudo1 !== null) {
                        $content.html(data.conteudo1).fadeIn();
                        const el = new SimpleBar(document.getElementById('modalConteudoBTS'));
                        el.getContentElement();
                    }
                } else {
                    /* remover loader */
                }
            }
        });
    });

    $('.paginaAjax').on('click', function() {
        var title_page = $(this).data('pagina');
        $content.html(loader).fadeIn();
        var dados = {
            'action': 'load_tags_by_ajax',
            'title': title_page
        };

        $.post(ajaxurl, dados, function (response) {
            console.log('ajax');
            $content.html(response).fadeIn();
            const el = new SimpleBar(document.getElementById('modalConteudoBTS'));
            el.getContentElement();
        });

    });

    $('body').on('click', '.postAjax', function() {
        var title_page = $(this).data('pagina');
        $content.html(loader).fadeIn();
        var dados = {
            'action': 'load_posts_modal',
            'title': title_page
        };

        $.post(ajaxurl, dados, function (response) {
            $content.html(response).fadeIn();
            const el = new SimpleBar(document.getElementById('modalConteudoBTS'));
            el.getContentElement();
        });

    });

    // $('.carousel').carousel({
    //     interval: 4000
    // });
    // $('#carouselVitrine').on('slide.bs.carousel', function () {
    //     if(!($('.carousel-item').hasClass('active'))){
    //         $('#postsFixados #carouselVitrine .carousel-item:first-child').addClass('active');
    //     }
    // });




var offset = $('.navbar-fixed-top').offset().top;
var $menu = $('.navbar-fixed-top');
var $sombra = $('.sombraMenu');
$(document).on('scroll', function () {
    if ((offset + 2) <= ($(window).scrollTop())) {
        $menu.addClass('fixar');
        $sombra.addClass('fixar');
    } else {
        $menu.removeClass('fixar');
        $sombra.removeClass('fixar');
    }
});

    //slides


    $('#postsFixados .bannerSlider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        cssEase: 'linear',
        swipeToSlide: true,
        useTransform: true,
        speed: 100
        // mobileFirst: true,
        // responsive: [
        //     {
        //         breakpoint: 319,
        //         settings: {
        //             slidesToShow: 1,
        //             slidesToScroll: 1
        //         }
        //     },
        //     {
        //         breakpoint: 467,
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 2
        //         }
        //     },
        //     {
        //         breakpoint: 767,
        //         settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 3,
        //             dots: false
        //         }
        //     },
        //     {
        //         breakpoint: 1199,
        //         settings: "unslick"
        //     }
        // ]
    });

$('#membros').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    dots: false,
    arrows: false,
    autoplay: false,
    cssEase: 'linear',
    swipeToSlide: true,
    useTransform: true,
    speed: 100,
    mobileFirst: true,
    responsive: [
    {
        breakpoint: 319,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 413,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 479,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 4
        }
    },
    {
        breakpoint: 1023,
        settings: {
            slidesToShow: 7,
            slidesToScroll: 3
        }
    },
    {
        breakpoint: 1199,
        settings: "unslick"
    }


            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
        });

    // $('#imagensGaleria').slick({
    //     infinite: true,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     autoplay: false,
    //     cssEase: 'linear',
    //     centerMode: true,
    //     swipeToSlide: true,
    //     useTransform: true,
    //     speed: 100,
    //     mobileFirst: true,
    //     responsive: [
    //         {
    //             breakpoint: 319,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 2
    //             }
    //         },
    //         {
    //             breakpoint: 413,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 3
    //             }
    //         },
    //         {
    //             breakpoint: 479,
    //             settings: {
    //                 slidesToShow: 5,
    //                 slidesToScroll: 5
    //             }
    //         },
    //         {
    //             breakpoint: 767,
    //             settings: {
    //                 slidesToShow: 7,
    //                 slidesToScroll: 7
    //             }
    //         },
    //
    //         {
    //             breakpoint: 959,
    //             settings: {
    //                 slidesToShow: 9,
    //                 slidesToScroll: 9
    //             }
    //         },
    //         {
    //             breakpoint: 1449,
    //             settings: {
    //                 slidesToShow: 11,
    //                 slidesToScroll: 11
    //             }
    //         },
    //         {
    //             breakpoint: 1758,
    //             settings: {
    //                 slidesToShow: 13,
    //                 slidesToScroll: 13
    //             }
    //         }
    //
    //
    //         // You can unslick at a given breakpoint now by adding:
    //         // settings: "unslick"
    //         // instead of a settings object
    //     ]
    // });

$('#pills-tab').slick({
    infinite: false,
    variableWidth: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: false,
    swipeToSlide: true,
        // cssEase: 'linear',
        useTransform: true,
        speed: 100,
        mobileFirst: true,
        responsive: [
        {
            breakpoint: 319,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 413,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },

        {
            breakpoint: 959,
            settings: {
                slidesToShow: 8,
                slidesToScroll: 8
            }
        },
        {
            breakpoint: 1199,
            settings: "unslick"
        }
            // {
            //     breakpoint: 1758,
            //     settings: {
            //         slidesToShow: 6,
            //         slidesToScroll: 6
            //     }
            // }


            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
        });

    // $('#parceiros').slick({
    //     infinite: true,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     autoplay: true,
    //     autoplaySpeed: 3000,
    //     fade: true,
    //     cssEase: 'linear'
    // });

$('.menuMobile').on('click touchstart', function(e){
    $('#menuLateral').removeClass('naoativo');
    $('#menuLateral').addClass('ativo');
    e.preventDefault();
});
$('.fecharMenu').on('click touchstart', function(e){
    $('#menuLateral').removeClass('ativo');
    $('#menuLateral').addClass('naoativo');
    e.preventDefault();
});

    // $(document).ready(function(){
    //    // $("#menuLateral ul.sub-menu").parent().addClass("dropdown");
    //     $("#menuLateral ul.sub-menu").addClass("dropdown");
    //     //$("#menuLateral ul.sub-menu").addClass("dropdown-menu");
    //     $("#menuLateral ul#menu-topo li.dropdown a").addClass("dropdown-toggle");
    //     $("#menuLateral ul.sub-menu li a").removeClass("dropdown-toggle");
    //     $('#menuLateral .navbar .dropdown-toggle').append('');
    //     $('#menuLateral a.dropdown-toggle').attr('data-toggle', 'dropdown');
    // });

$('#menuLateral #menu-topo li.menu-item-has-children > a').removeAttr("href");


$('#menuLateral #menu-topo > li.menu-item-has-children > a').on('click touchstart', function(e){
    $('#menuLateral #menu-topo > li.menu-item-has-children ul').removeClass('open');
    $(this).parent().children('ul').toggleClass('open');
    e.preventDefault();
});
$('#menuLateral #menu-topo > li.menu-item-has-children > ul li.menu-item-has-children > a').on('click touchstart', function(e){
        //$('#menuLateral #menu-topo > li.menu-item-has-children ul').removeClass('open');
        $(this).parent().children('ul').toggleClass('open');
        e.preventDefault();
    });
$('.fecharMenu').on('click touchstart', function(e){
    $('#menuLateral #menu-topo li.menu-item-has-children ul').removeClass('open');
    e.preventDefault();
});

    /////////////////////////////

    // $('.menuItens a.linkPai').on('click', function (e) {
    //     e.preventDefault();
    //
    //     var $linkSubCategoria = $(this).attr('href');
    //
    //     $('.menuItens a').removeClass('ativo');
    //     $(this).addClass('ativo');
    //
    //     if (!$($linkSubCategoria).hasClass('menu-open')) {
    //         $containerSubCategoria2.removeClass('menu-open');
    //         $containerSubCategoria3.removeClass('menu-open');
    //         $($linkSubCategoria).addClass('menu-open');
    //     } else {
    //         $containerSubCategoria2.removeClass('menu-open');
    //         $containerSubCategoria3.removeClass('menu-open');
    //     }
    // });
    //
    // $('.menuSegundo a.linkPai').on('click', function (e) {
    //     e.preventDefault();
    //
    //     var $linkSubCategoria = $(this).attr('href');
    //
    //     $(this).toggleClass('ativo');
    //
    //     $('ul.menuTerceiro').removeClass('menu-open');
    //
    //     $($linkSubCategoria).addClass('menu-open');
    // });

$('.nav-link').on('click', function(){
    $('.nav-link').removeClass('ativo');
    $(this).addClass('ativo');
});

    // function fluidFB() {
    //     var $myWrap = $('.boxFb');
    //     var width   = $myWrap.width();
    //
    //     $('.fb-page').attr("data-width", width);
    //
    //     //if ($(".fb-page > span > iframe").size()==1)
    //         FB.XFBML.parse();
    // }
    //
    // $(function() {
    //     fluidFB();
    // });
    //
    // var progresso;
    // window.onresize = function(){
    //     clearTimeout(progresso);
    //     progresso = setTimeout(fluidFB, 100);
    // };

});
