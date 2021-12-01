<?php get_header(); ?>

    <section id="post">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="flex">
                                <div class="col-12 col-md-12 col-xs-9 col-lg-9 col-xl-8">

                                    <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                    <div class="background-post">
                                        <img src="<?php echo $backgroundImg[0]; ?>" alt="<?php the_title(); ?>"
                                             class="img-responsive">
                                    </div>

                                    <?php if (!wp_is_mobile()) { ?>
                                        <div class="d-none d-xl-flex col-12 col-sm-12 flex-column align-items-center"
                                             id="propagandaMeio">
                                            <p>Anúncio</p>


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
                                        </div>
                                    <?php } ?>

                                    <h1><?php the_title(); ?></h1>
                                    <div class="content"><?php the_content(); ?></div>

                                    <div class="tagsPost">
                                        <span class="categoria"><?php the_category(', '); ?></span>
                                        <span class="separador"> | </span>
                                        <span class="por">por</span>
                                        <span class="autor"><?php the_author_posts_link(); ?></span>
                                        <span class="em">em <span class="data"><?php the_time('d/m/Y') ?></span>
                                    </div>
                                    <div class="postinfo">
                                        <span>Tags:</span> <?php the_tags(' '); ?>
                                    </div>

                                    <div class="compartilhar">
                                        <span>Compartilhe: </span>
                                        <?php if (wp_is_mobile()) { ?>
                                            <a class="whatsapp" title="WhatsApp"
                                               href="whatsapp://send?text=<?php the_permalink(); ?>"
                                               target="_blank"><i class="fa fa-whatsapp"></i> Whatsapp</a>
                                        <?php } ?>
                                        <a class="facebook" href="#!" title="Facebook"
                                           target="_blank"
                                           onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL),'ventanacompartir', 'toolbar=0, status=0, width=650, height=450'); return false;"><i
                                                class="fa fa-facebook"></i> Facebook</a>
                                        <a class="twitter" href="#!" target="_blank" title="Tweet"
                                           onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL), 'ventanacompartir', 'toolbar=0, status=0, width=650, height=450'); return false;"><i
                                                class="fa fa-twitter"></i> Twitter</a>
                                    </div>

                                    <div class="comentarios">
                                        <h4>Comentários:</h4><br/>

                                        <div class="fb-comments" data-href="<?php the_permalink(); ?>"
                                             data-colorscheme="light"
                                             data-numposts="5" data-width="100%"></div>
                                    </div>

                                </div>
                                <?php if (!wp_is_mobile()) { ?>
                                    <!--                                        <div class="col-1"></div>-->
                                    <div class="col-4 m-0">
                                        <section id="noticias" class="postsLaterais">
                                            <div class="container mr-0 pr-0">
                                                <div class="row">
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active todos" id="pills-home"
                                                             role="tabpanel"
                                                             aria-labelledby="pills-home-tab">
                                                            <!--                                                                <h1 class="ml-15">Redes Sociais</h1>-->
                                                            <div class="entry-content">

                                                                <div class="col-12 boxTw">
                                                                    <!--                                                                        <h3>Twitter</h3>-->
                                                                    <div class="twitterRodape">
                                                                        <div>
                                                                            <a class="twitter-timeline"
                                                                               href="https://twitter.com/BTS_BR"
                                                                               data-widget-id="697829621832753152">Tweets
                                                                                de @BTS_BR</a>
                                                                            <script>!function (d, s, id) {
                                                                                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                                                                    if (!d.getElementById(id)) {
                                                                                        js = d.createElement(s);
                                                                                        js.id = id;
                                                                                        js.src = p + "://platform.twitter.com/widgets.js";
                                                                                        fjs.parentNode.insertBefore(js, fjs);
                                                                                    }
                                                                                }(document, "script", "twitter-wjs");</script>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 boxFb">
                                                                    <!--                                                                        <h3>Facebook</h3>-->
                                                                    <div class="facebookRodape">
                                                                        <div class="fb-page"
                                                                             data-href="https://www.facebook.com/bangtanbrasil"
                                                                             data-tabs="timeline" data-width="335"
                                                                             data-height="350" data-small-header="false"
                                                                             data-adapt-container-width="false"
                                                                             data-hide-cover="false"
                                                                             data-show-facepile="true">
                                                                            <blockquote
                                                                                cite="https://www.facebook.com/bangtanbrasil"
                                                                                class="fb-xfbml-parse-ignore"><a
                                                                                    href="https://www.facebook.com/bangtanbrasil">Bangtan
                                                                                    Brasil</a></blockquote>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 boxInsta">
                                                                    <!--                                                                        <h3>Instagram</h3>-->
                                                                    <div
                                                                        class="instagramRodape"><?php echo do_shortcode('[instagram-feed]'); ?></div>
                                                                </div>

                                                                <div
                                                                    class="col-12 boxInsta d-flex flex-column align-items-center"
                                                                    id="propagandaMeio">
                                                                    <p>Anúncio</p>

                                                            
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
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                <?php } ?>
                            </div>


                        </div>
                    </div>

                </div>
            <?php endwhile; ?><?php endif; ?>
    </section>

    <section id="noticias" class="maisPosts">
        <div class="container">
            <div class="row justify-content-xl-center">
                <div class="col-12 pl-0 pr-0">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active todos" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <h1 class="ml-15">Notícias Relacionadas</h1>
                            <div class="entry-content">
                                <?php
                                $postsPagina = 0;
                                if (wp_is_mobile()) {
                                    $postsPagina = 2;
                                } else {
                                    $postsPagina = 4;
                                }

                                $post_categories = wp_get_post_categories($post->ID);
                                $cats = array();

                                foreach ($post_categories as $c) {
                                    $cats[] = $c;
                                }
                                $cat_ids = get_the_category($post->ID);

                                $args = array(
                                    'category__in' => $cats,
                                    'post__not_in' => array($post->ID),
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'showposts' => $postsPagina,
                                    'caller_get_posts' => 1
                                );
                                $my_posts = new WP_Query($args);
                                if ($my_posts->have_posts()) :
                                    ?>
                                    <div class="my-posts">
                                        <?php while ($my_posts->have_posts()) : $my_posts->the_post() ?>
                                            <div class="noticia col-12 col-sm-6 col-xl-3">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($my_posts->ID), 'large'); ?>
                                                    <a href="<?php the_permalink(); ?>"
                                                       title="<?php the_title_attribute(); ?>"
                                                       style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="navegacaoPosts">
        <?php
        $prev_post = get_previous_post();
        $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($next_post->ID), 'medium');

        if (!empty($prev_post)): ?>

            <a href="<?php echo $prev_post->guid ?>" class="blog-item-pagination-link blog-item-pagination-link--prev">
                <div class="blog-item-label"></div>
                <span class="pagination-title-wrapper">
                <img data-src="<?php echo $backgroundImg[0]; ?>" data-image="<?php echo $backgroundImg[0]; ?>"
                     data-image-dimensions="2400x1200" data-image-focal-point="0.5,0.5"
                     alt="<?php echo $prev_post->post_title ?>" class="" src="<?php echo $backgroundImg[0]; ?>" style=""
                     data-image-resolution="100w">
                <h2 class="blog-item-pagination-title"><?php echo $prev_post->post_title ?></h2>
            </span>
            </a>
        <?php endif ?>

        <?php
        $next_post = get_next_post();
        $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($next_post->ID), 'medium');

        if (!empty($next_post)): ?>
            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"
               class="blog-item-pagination-link blog-item-pagination-link--next">
                <div class="blog-item-label"></div>
                <span class="pagination-title-wrapper">
                <img data-src="<?php echo $backgroundImg[0]; ?>" data-image="<?php echo $backgroundImg[0]; ?>"
                     data-image-dimensions="2400x1200" data-image-focal-point="0.5,0.5"
                     alt="<?php echo esc_attr($next_post->post_title); ?>" class=""
                     src="<?php echo $backgroundImg[0]; ?>" style="" data-image-resolution="100w">
                <h2 class="blog-item-pagination-title"><?php echo esc_attr($next_post->post_title); ?></h2>
            </span>
            </a>
        <?php endif; ?>

    </section>

<?php get_footer(); ?>