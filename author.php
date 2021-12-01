<?php get_header();
require_once('funcoes/BFI_Thumb.php'); ?>

<?php
global $wp_query;
$curauth = $wp_query->get_queried_object();
?>

    <section id="noticias" class="pageCategory">
        <div class="container">
            <div class="row">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active todos" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <h1>Autor(a): <?php echo $curauth->display_name; ?></h1>
                        <div class="entry-content">

                            <?php if (have_posts()) : ?>
                                <div class="my-posts">
                                    <?php while (have_posts()) : the_post(); ?>
                                        <div class="noticia col-12 col-sm-6 col-xl-4">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                                                <a href="<?php the_permalink(); ?>"
                                                   title="<?php the_title_attribute(); ?>"
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


                                <div class="navigation">
                                    <?php wordpress_pagination(); ?>
                                </div>


                            <?php else : ?>

                                <div class="pagetitle">Nenhuma notícia encontrada.</div>
                            <?php endif; ?>
                        </div>
                    </div>


                </div>
            </div>
    </section>

<?php get_footer(); ?>
