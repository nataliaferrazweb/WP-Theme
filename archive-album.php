<?php
if ( !defined('ABSPATH')) exit;

get_header();
$post_type = 'album';
$pt_query = new WP_Query( array(
    'post_type'      => $post_type,
    'posts_per_page' => 50
    ) );

    ?>
    <section id="noticias">
        <div class="container">
            <div class="row">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active todos" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">

                    <div class="col-12"><h1><?php the_title(); ?></h1></div>
                        <br/><br/>
                    <div class="entry-content">
                        <?php if ($pt_query->have_posts()) : ?>
                            <div class="my-posts">
                                <?php while ($pt_query->have_posts()) : $pt_query->the_post(); ?>
                                    <div class="noticia col-12 col-sm-6 col-xl-3" style="height: auto; max-height: 400px;">
                                        <?php $dadosTag = array();
                                        foreach(get_the_tags($post->ID) as $tag)
                                        {
                                            if($tag->name != 'Letras'){
                                                $dadosTag['link'] = $tag->slug;
                                                $dadosTag['nome'] = $tag->name;
                                            }
                                            //echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                                        }
                                        ?>

                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                            <a href="#" class="paginaAjax" style="height: auto;
    width: 100%;"
                                            title="<?php the_title_attribute(); ?>"
                                               data-pagina="<?php echo $dadosTag['link']; ?>" data-toggle="modal" data-target="#modalBTS">
                                                    <?php /*$params = array( 'width' => 400 );
                                                $image = bfi_thumb( "http://mysite.com/myimage.jpg", $params );
                                                echo "<img src='$image'/>";*/
                                                ?>
                                                <?php the_post_thumbnail('large', array('class' => 'aligncenter', 'style' => 'height: auto;
    width: 100%;')); ?>
                                            </a>
                                        <?php endif; ?>
                                        <h2>
                                            <a class="paginaAjax" href="#" data-pagina="<?php echo $dadosTag['link']; ?>" data-toggle="modal" data-target="#modalBTS"
                                               title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                           </h2>

                                    </div>
                                <?php endwhile ?>
                            </div>


                            <div class="navigation">
                                <?php wordpress_pagination(); ?>
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
                        <?php else : ?>

                            <div class="pagetitle">Nenhuma notícia encontrada.</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>