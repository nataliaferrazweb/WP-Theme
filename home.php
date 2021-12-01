<?php get_header(); ?>

    <section id="fixado">
        <div class="container">
            <div class="row">
                <div id="postsFixados">
                    <div class="col-12 col-sm-8 bannerSlider"><?php dynamic_sidebar('sidebar-home'); ?></div>
                    <div class="col-12 col-sm-4 bannerVertical"><?php dynamic_sidebar('sidebar-home-2'); ?></div>
                    <div class="col-12 bannerHorizontal"><?php dynamic_sidebar('sidebar-home-3'); ?></div>
                </div>
            </div>
        </div>
    </section>
<?php if (!wp_is_mobile()) { ?>
    <section id="propagandaTopo" class="d-none d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 d-flex flex-column align-items-center">
                    <p>Anúncio</p>

<!-- GPT AdSlot 3 for Ad unit 'BB_incontent1' ### Size: [[728,90],[970,90]] -->
<div id='div-gpt-ad-3924397-3'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-3924397-3'); });
  </script>
</div>
<!-- End AdSlot 3 -->

<div id='div-gpt-ad-3924397-8'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-3924397-8'); });
  </script>
</div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php $menuNoticias = array();
$menuNoticias = wp_get_nav_menu_items('noticias');
?>
    <section id="noticias">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12" id="menuNoticias">
                    <h1>Últimas Notícias</h1>

                    <div class="menuSlider">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ativo" id="pills-home-tab" data-categoria="" data-toggle="pill"
                                   href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Todos</a>
                            </li>

                            <?php foreach($menuNoticias as $menu){
                                $cat = get_category($menu->object_id);
                                $slug = $cat->slug; ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-<?php echo $slug; ?>-tab" data-categoria="<?php echo $slug; ?>" data-toggle="pill"
                                       href="#pills-<?php echo $slug; ?>" role="tab" aria-controls="pills-<?php echo $slug; ?>" aria-selected="false"><?php echo $menu->title; ?></a>
                                </li>
                            <?php } ?>


                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active todos" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="entry-content">
                            <?php
                            $postsPagina = 0;
                            if (wp_is_mobile()) {
                                $postsPagina = 4;
                            } else {
                                $postsPagina = 9;
                            }
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => $postsPagina,
                                'paged' => 1,
                            );
                            $my_posts = new WP_Query($args);
                            if ($my_posts->have_posts()) :
                                ?>
                                <div class="my-posts">
                                    <?php while ($my_posts->have_posts()) : $my_posts->the_post() ?>
                                        <div class="noticia col-12 col-sm-6 col-xl-4">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($my_posts->ID), 'large'); ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                                                   style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                                                    <?php /*$params = array( 'width' => 400 );
                                                $image = bfi_thumb( "http://mysite.com/myimage.jpg", $params );
                                                echo "<img src='$image'/>";*/


                                                    ?>
                                                    <?php //the_post_thumbnail('medium', array('class' => 'aligncenter')); ?>
                                                </a>
                                            <?php endif; ?>
                                            <h2>
                                                <a href="<?php the_permalink() ?>"
                                                   title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            <div class="dataAutor">
                                                <span class="data"><?php the_time('d/m/Y'); ?></span>
                                                <span class="autor"><?php the_author_posts_link(); ?></span>
                                            </div>
                                        </div>
                                    <?php endwhile ?>
                                </div>
                            <?php endif ?>

                        </div>
                    </div>

                    <?php foreach($menuNoticias as $menu){
                        $cat = get_category($menu->object_id);
                        $slug = $cat->slug; ?>
                        <div class="tab-pane fade <?php echo $slug; ?>" id="pills-<?php echo $slug; ?>" role="tabpanel"
                             aria-labelledby="pills-<?php echo $slug; ?>-tab">
                            <div class="entry-content">
                                <div class="my-posts">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-12">
                    <div class="loadmore">Ver Mais</div>
                </div>
            </div>
        </div>
    </section>
<?php if (!wp_is_mobile()) { ?>
    <section id="propagandaMeio" class="d-none d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 d-flex flex-column align-items-center">
                    <p>Anúncio</p>

<!-- GPT AdSlot 4 for Ad unit 'BB_incontent2' ### Size: [[728,90],[970,90]] -->
<div id='div-gpt-ad-3924397-4'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-3924397-4'); });
  </script>
</div>

<div id='div-gpt-ad-3924397-9'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-3924397-9'); });
  </script>
</div>
<!-- End AdSlot 4 -->
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <section id="bts">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2>Conheça o BTS</h2>
                    <div id="membros">
                        <div class="membro">
                            <a href="#" data-pagina="bts-rm" data-toggle="modal" data-target="#modalBTS">
                                <?php dynamic_sidebar('sidebar-bts-rm'); ?>
                            </a>
                        </div>
                        <div class="membro">
                            <a href="#" data-pagina="bts-jin" data-toggle="modal" data-target="#modalBTS">
                                <?php dynamic_sidebar('sidebar-bts-jin'); ?>
                            </a>
                        </div>
                        <div class="membro">
                            <a href="#" data-pagina="bts-suga" data-toggle="modal" data-target="#modalBTS">
                                <?php dynamic_sidebar('sidebar-bts-suga'); ?>
                            </a>
                        </div>
                        <div class="membro">
                            <a href="#" data-pagina="bts-jhope" data-toggle="modal" data-target="#modalBTS">
                                <?php dynamic_sidebar('sidebar-bts-jhope'); ?>
                            </a>
                        </div>
                        <div class="membro">
                            <a href="#" data-pagina="bts-jimin" data-toggle="modal" data-target="#modalBTS">
                                <?php dynamic_sidebar('sidebar-bts-jimin'); ?>
                            </a>
                        </div>
                        <div class="membro">
                            <a href="#" data-pagina="bts-v" data-toggle="modal" data-target="#modalBTS">
                                <?php dynamic_sidebar('sidebar-bts-v'); ?>
                            </a>
                        </div>
                        <div class="membro">
                            <a href="#" data-pagina="bts-jungkook" data-toggle="modal" data-target="#modalBTS">
                                <?php dynamic_sidebar('sidebar-bts-jungkook'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="contatoBts">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="btsVideo">
                            <?php dynamic_sidebar('sidebar-bts-video'); ?>
                        </div>

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="btsSns">
                            <h3>Acompanhe</h3>
                            <div class="btsSnsMusica">

                                <a href="https://itunes.apple.com/us/artist/bts/883131348" class="applemusic">
                                    <div></div>
                                </a>
                                <a href="https://open.spotify.com/artist/3Nrfpe0tUJi4K4DXYWgMUX" class="spotify">
                                    <div></div>
                                </a>
                                <a href="https://soundcloud.com/bangtan" class="soundcloud">
                                    <div></div>
                                </a>
                                <a href="http://cafe.daum.net/BANGTAN" class="weverse">
                                    <div></div>
                                </a>
                                <a href="http://bts.ibighit.com/" class="bighit">
                                    <div></div>
                                </a>

                            </div>
                            <div class="btsSnsRedesSociais">

                                <a href="https://twitter.com/bts_twt" class="twitter">
                                    <div></div>
                                </a>
                                <a href="https://pt-br.facebook.com/bangtan.official/" class="facebook">
                                    <div></div>
                                </a>
                                <a href="https://www.instagram.com/bts.bighitofficial" class="instagram">
                                    <div></div>
                                </a>
                                <a href="https://www.youtube.com/user/ibighit" class="youtube">
                                    <div></div>
                                </a>

                                <a href="https://www.weibo.com/BTSbighit" class="weibo">
                                    <div></div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="btsAgenda">
                            <?php dynamic_sidebar('sidebar-bts-calendario'); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="modalBts">
            <div class="modal" tabindex="-1" role="dialog" id="modalBTS">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"  id="modalConteudoBTS">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>