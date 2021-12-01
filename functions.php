<?php if (!defined('ABSPATH')) exit; ?>
<?php
function meusWidgets()
{
    register_sidebar(array(
        'name' => __('Slider Home'),
        'id' => 'sidebar-home',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem e link do slider 730 x 300',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('Banner Home'),
        'id' => 'sidebar-home-2',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem e link do conteúdo fixado nº 2 350 x 300',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('RM'),
        'id' => 'sidebar-bts-rm',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem do RM para a Home 158 x 158',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('Jin'),
        'id' => 'sidebar-bts-jin',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem do Jin para a Home 158 x 158',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('Suga'),
        'id' => 'sidebar-bts-suga',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem do Suga para a Home 158 x 158',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('J-Hope'),
        'id' => 'sidebar-bts-jhope',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem do J Hope para a Home 158 x 158',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('Jimin'),
        'id' => 'sidebar-bts-jimin',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem do Jimin para a Home 158 x 158',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('V'),
        'id' => 'sidebar-bts-v',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem do V para a Home 158 x 158',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('JungKook'),
        'id' => 'sidebar-bts-jungkook',
        'before_title' => '',
        'after_title' => '',
        'description'   => 'Imagem do Jung Kook para a Home 158 x 158',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('Vídeo'),
        'id' => 'sidebar-bts-video',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'description'   => 'Embed para vídeo do BTS na Home',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));

    register_sidebar(array(
        'name' => __('Calendário'),
        'id' => 'sidebar-bts-calendario',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'description'   => 'Plugin do Calendário do BTS na Home',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        ));
}

add_action('widgets_init', 'meusWidgets');

function meusMenus()
{
    register_nav_menu('topo', __('Topo', 'btsbr_ly'));
    register_nav_menu('lateral', __('Lateral', 'btsbr_ly'));
    register_nav_menu('noticias', __('Notícias', 'btsbr_ly'));
}

add_action('init', 'meusMenus');

// Verificar widgets nas áreas de widgets
function is_sidebar_active($index)
{
    global $wp_registered_sidebars;

    $widgetcolums = wp_get_sidebars_widgets();

    if ($widgetcolums[$index]) return true;

    return false;
}

//ajax post
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback()
{
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $categoria = '';
    if(isset($_POST['categoria'])){
        $categoria = $_POST['categoria'];
    }

    $tag = '';
    if(isset($_POST['tag'])){
        $tag = $_POST['tag'];
    }
    $postsPagina = 0;
    if ( wp_is_mobile() ) {
        $postsPagina = 4;
    } else {
        $postsPagina = 9;
    }
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $postsPagina,
        'paged' => $paged,
        );
    if($categoria != ''){
        $args['category_name'] = $categoria;
    }
    if($tag != ''){
        $args['tag'] = $tag;
    }
    $my_posts = new WP_Query($args);
    if ($my_posts->have_posts()) :
        ?>
    <?php while ($my_posts->have_posts()) : $my_posts->the_post() ?>
        <div class="noticia col-12 col-sm-6 col-xl-4">
            <?php if (has_post_thumbnail()) : ?>
                <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($my_posts->ID), 'large'); ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
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
<?php
endif;

wp_die();
}


//ajax tag
add_action('wp_ajax_load_tags_by_ajax', 'load_tags_by_ajax');
add_action('wp_ajax_nopriv_load_tags_by_ajax', 'load_tags_by_ajax');

function load_tags_by_ajax()
{
    //check_ajax_referer('load_tags_by_ajax_callback', 'security');
    $paged = $_POST['page'];
    
    $tag = '';
    if(isset($_POST['title'])){
        $tag = $_POST['title'];
    }

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 30,
        'paged' => $paged,
        'tag' => $tag,
    	'order' => 'ASC'
        );


    $my_posts = new WP_Query($args);

    if ($my_posts->have_posts()) :
        ?>
        <div class="my-posts">
            <?php while ($my_posts->have_posts()) : $my_posts->the_post() ?>
                <div class="noticia col-12 col-sm-6 col-xl-4">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($my_posts->ID), 'large'); ?>
                        <a class="postAjax" href="#" data-pagina="<?php echo get_post_field( 'post_name', get_post() ); ?>" title="<?php the_title_attribute(); ?>"
                           style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                       </a>
                   <?php endif; ?>
                   <h2>
                       <a class="postAjax" href="#" data-pagina="<?php echo  get_post_field( 'post_name', get_post() ); ?>"
                          title="<?php the_title(); ?>"><?php the_title(); ?></a>
                   </h2>
                   <div class="dataAutor">
                    <span class="data"><?php the_time('d/m/Y'); ?></span>
                    <span class="autor"><?php the_author_posts_link(); ?></span>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
<?php
endif;

wp_die();
}

//ajax tag
add_action('wp_ajax_load_posts_modal', 'load_posts_modal');
add_action('wp_ajax_nopriv_load_posts_modal', 'load_posts_modal');

function load_posts_modal()
{
    //check_ajax_referer('load_tags_by_ajax_callback', 'security');


    $postSlug = '';
    if(isset($_POST['title'])){
        $postSlug = $_POST['title'];
    }

    $args = array(
        'name' => $postSlug,
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 1

    );

    $my_posts = new WP_Query($args);

    if ($my_posts->have_posts()) :
        ?>
        <?php while ($my_posts->have_posts()) : $my_posts->the_post() ?>
        <section id="post">
        <div class="col-12 col-md-10" style="margin: 0 auto;">
            <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($my_posts->ID), 'single-post-thumbnail'); ?>
            <div class="background-post">
                <img src="<?php echo $backgroundImg[0]; ?>" alt="<?php the_title(); ?>"
                     class="img-responsive">
            </div>
            <h1><?php the_title(); ?></h1>
            <div class="content" style="max-width:100%;"><?php the_content(); ?></div>
            <div class="tagsPost">
                <span class="categoria"><?php the_category(', '); ?></span>
                <span class="separador"> | </span>
                <span class="por">por</span>
                <span class="autor"><?php the_author_posts_link(); ?></span>
                <span class="em">em <span class="data"><?php the_time('d/m/Y') ?></span>
            </div>
        </div>
        </section>
    <?php endwhile ?>
        <?php
    endif;

    wp_die();
}

/*
<?php if (has_post_thumbnail()) : ?>
    <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($my_posts->ID), 'large'); ?>
    <a class="postAjax" href="#" data-pagina="<?php echo $my_posts->slug; ?>" title="<?php the_title_attribute(); ?>"
       style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
    </a>
<?php endif; ?>
*/
add_theme_support('post-thumbnails');

function load_input_post(){

    $path = (isset($_REQUEST['title']) ? $_REQUEST['title'] : '' );
    $tipodopost = 'page';
    /* para recuperar a página pelo titulo você pode usar a função get_page_by_title ()*/
    $pagina = get_page_by_path($path, OBJECT, $tipodopost);

    ?>

    <?php $html = '<h2>'.$pagina->post_title.'</h2>';
    $html .= '<div class="pageConteudo">'.nl2br($pagina->post_content).'</div>';


    //$conteudo = ob_get_clean();
    /* usei o  ob_get_clean() pois é mais rapido, faça o método que desejar */

    /* para enviar o $teste de volta para seu JS para que possa colocar no conteudo retorno um JSON */

    $response = array();
    $response['conteudo1'] = $html;
    wp_send_json($response); /*enviado de volta para o js */

}
add_action('wp_ajax_load_input_post', 'load_input_post');
add_action('wp_ajax_nopriv_load_input_post', 'load_input_post');

function my_related_posts() {
    $args = array('posts_per_page' => 4, 'post_in'  => get_the_tag_list());
    $the_query = new WP_Query( $args );
    echo '<section id="related_posts">';
    echo '<h2>Posts Relacionados</h2>';
    while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
    <section class="item">
        <?php if ( has_post_thumbnail() ) { ?>
        <section class="related_post_thumb">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'related-post' ); ?></a>                       </section>
            <?php } else { ?>
            <section class="related_post_thumb">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php bloginfo('template_directory')?>/lib/images/thumb.png" />
                </a>
            </section>
            <?php } ?>
            <?php the_title(); ?>
        </section>
        <?php
        endwhile;
        echo '<div class="clear"></div></section>';
        wp_reset_postdata();
    }

    function svg($arquivo){
        return file_get_contents(get_template_directory_uri().'/imagens/svg/'.$arquivo.'.svg', false, null, 0);
    }

//require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function wordpress_pagination() {
        global $wp_query;

        $big = 999999999;

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
            ) );
    }

    function create_posttype(){
        register_post_type( 'Album',
            array(
                'labels' => array(
                    'name' => __( 'Álbuns' ),
                    'singular_name' => __( 'Álbum' )
                    ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array( 'slug' => 'album' ),
                'menu_position' => 8,
                'taxonomies' => array('category', 'post_tag'),
                'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' )
                )
            );
    }
    add_action ( 'init', 'create_posttype' );
    ?>