<!doctype html>
<html lang="pt-BR" xmlns="http://www.w3.org/1999/html">
<head>

    <meta name="company" content="<?php bloginfo('name'); ?>" />
    <meta name="title" content="<?php bloginfo('name'); ?>" />
    <meta name="robots" content="index,follow">
    <meta http-equiv="Content-language" content="pt-br" />

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#d5b2d5">
    <meta name="application-name" content="<?php bloginfo('name'); ?>"/>
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title><?php if (is_home()) {
            echo bloginfo("name");
            echo " | ";
            echo bloginfo("description");
        } else {
            echo wp_title(" | ", false, 'right');
            echo bloginfo("name");
        } ?></title>

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
          href="<?php bloginfo('rss2_url'); ?>"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="reply-to" content="bangtanbrasil@gmail.com">
    <?php wp_head(); ?>

    <!--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="<?php echo bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet">

    <link rel="alternate" type="application/atom+xml" href="<?php bloginfo('atom_url'); ?>"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php if (!wp_is_mobile()) { ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-122849302-1');
        </script>


    <?php } ?>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>





</head>

<body>
<div id="fb-root"></div>


<script>(function (d, s, id) {

        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;

        js = d.createElement(s);
        js.id = id;

        js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=536624813030739";

        fjs.parentNode.insertBefore(js, fjs);

    }(document, 'script', 'facebook-jssdk'));</script>


<div id="menuLateral">
    <div class="degrade"></div>
    <nav>
        <div id="conteudoMenuLateral" class="alturaVariavel" >
            <div class="alturaVariavel" data-simplebar="init" data-simplebar-direction="vertical">
                <div id="fechar">
                    <a href="#" class="fecharMenu"></a>
                </div>
                <?php if (wp_is_mobile()) { ?>
                    <div class="sociais col-hidden-xl">
                        <a href="https://twitter.com/bts_br" class="twitter">
                            <div></div>
                        </a>
                        <a href="https://www.youtube.com/c/BangtanBrasilSubs" class="youtube">
                            <div></div>
                        </a>
                        <a href="https://www.facebook.com/bangtanbrasil" class="facebook">
                            <div></div>
                        </a>
                        <a href="https://www.instagram.com/bangtanbtsbr/" class="instagram">
                            <div></div>
                        </a>
                    </div>
                <?php } ?>
                <div id="newsletter">
                    <?php echo do_shortcode("[contact-form-7 id='83009' title='newsletter']"); ?>
                </div>


                <?php if (wp_is_mobile()) { ?>

                    <?php wp_nav_menu(array(
                        'menu' => 'topo',
                        'depth' => 4,
                        'menu_class' => 'sub-menu'
                    )); ?>

                <?php } ?>
                <?php wp_nav_menu(array(
                    'menu' => 'lateral'
                )); ?>
            </div>
        </div>
    </nav>
</div>
<header>
    
    
    <div id="menuHeader">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
                    <div class="imagens">
                        <img src="<?php echo bloginfo('template_url'); ?>/imagens/bangtanbrasil_logo.png" class="btsbr_logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/imagens/bangtanbrasil.png" class="btsbr">
                    </div>
                </a>

                <div id="linkMenu">
                    <?php wp_nav_menu(array(
                        'menu' => 'topo'
                    )); ?>
                </div>
                <div class="sociais">
                    <a href="https://twitter.com/bts_br" class="twitter">
                    </a>
                    <a href="https://www.youtube.com/c/BangtanBrasilSubs" class="youtube">
                    </a>
                    <a href="https://www.facebook.com/bangtanbrasil" class="facebook">
                    </a>
                    <a href="https://www.instagram.com/bangtanbtsbr/" class="instagram">
                    </a>
                    <div class="divisao d-none"></div>
                    <a href="#" data-toggle="modal" data-target="#modalBusca" tabindex="-1" class="botaoBusca">
                        <div></div>
                    </a>
                    <div class="divisao"></div>
                    <a href="#" class="menuMobile">
                    </a>
                </div>
            </div>

        </nav>
        <div class="sombraMenu"></div>
    </div>
    


</header>


<center>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive flaunt -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7892222271864999"
     data-ad-slot="3482167138"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

</center><br>