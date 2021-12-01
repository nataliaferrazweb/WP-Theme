<?php get_header(); ?>

    <section id="post">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="flex">
                                <div class="col-12 col-md-12 col-xs-9 col-lg-9 col-xl-8">
                                    <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                    if($backgroundImg[0] != ''){ ?>
                                        <div class="background-post">
                                            <img src="<?php echo $backgroundImg[0]; ?>" alt="<?php the_title(); ?>"
                                                 class="img-responsive">
                                        </div>
                                    <?php } ?>

                                    <?php if (!wp_is_mobile()) { ?>
                                        <div class="col-12 col-sm-12 d-none d-xl-flex flex-column align-items-center"
                                             id="propagandaMeio">
                                            <p>Anúncio</p>


                                            <!-- /7264022/Flaunt_728x90_Int -->
                                            <div id='div-gpt-ad-1441212117357-0' style='height:90px; width:728px;'>
                                                <script type='text/javascript'>
                                                    googletag.cmd.push(function () {
                                                        googletag.display('div-gpt-ad-1441212117357-0');
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <h1><?php the_title(); ?></h1>
                                    <div class="content"><?php the_content(); ?></div>

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
                                                                             data-tabs="timeline" data-width="344"
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

                                                                    <!-- /7264022/Flaunt_bf300x250_Int -->
                                                                    <div id='div-gpt-ad-1441282518300-0'
                                                                         style='height:250px; width:300px;'>
                                                                        <script type='text/javascript'>
                                                                            googletag.cmd.push(function () {
                                                                                googletag.display('div-gpt-ad-1441282518300-0');
                                                                            });
                                                                        </script>
                                                                    </div>
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
        <br/>
		<?php if ( is_user_logged_in() ){
            //foreach (ini_get_all(null, false) as $option => $value) echo "$option=$value"."<br/>";

          // echo phpversion();
        }
        ?>
    </section>

<?php get_footer(); ?>