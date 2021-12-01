<?php if (!defined('ABSPATH')) exit; ?>
<?php wp_footer(); ?>

<div class="modal" tabindex="-1" role="dialog" id="modalBusca">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBodyBusca">
                <div id="search">
                    <form method="get" id="searchform" action="<?php echo bloginfo('url'); ?>/">
                        <input type="text" value="Digite sua busca"
                               name="s" id="s" onblur="if (this.value == '')  {this.value = 'Digite sua busca';}"
                               onfocus="if (this.value == 'Digite sua busca') {this.value = '';}"/>
                        <button type="submit" id="botao" value=" "/>
                        </button>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 sobre">
                <h3><a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo bloginfo('template_url'); ?>/imagens/bangtanbrasil_logo.png" class="btsbr_logo"><img src="<?php echo bloginfo('template_url'); ?>/imagens/bangtanbrasil.png" class="btsbr"></a></h3>
            </div>

            <div class="col-12 col-md-6 objetivo">
                <img src="<?php echo bloginfo('template_url'); ?>/imagens/bangtanbrasil_logo.png" class="btsbr_logo">

                <p>Temos como objetivo apoiar o grupo no Brasil e trazer aos fãs tudo relacionado os meninos como: notícias recentes, entrevistas, fotos, vídeos, traduções entre outras coisas que interessam os fãs. Não possuímos nenhum tipo de contato com os representantes da Big Hit Ent. ou integrantes do BTS, somos apenas fãs. Todo o conteúdo encontrado aqui pertence aos seus respectivos donos.</p>

            </div>

        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">&copy; <?php echo date('Y'); ?> <a
                        href="<?php echo bloginfo('template_url'); ?>" title="">Bangtan Brasil</a><br>Host: <a href="http://www.flaunt.nu" title="free fansite hosting" target="_blank">Flaunt Network</a> | <a href="http://www.flaunt.nu/dmca" target="_blank">DMCA</a> | <a href="http://www.flaunt.nu/privacy-policy" target="_blank">Privacy Policy</a></div>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/simplebar.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/scripts.js"></script>
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    var page = 2;
    var loader = '<div class="loader"><div></div><div></div><div></div><div></div></div>';

    jQuery(function ($) {
        $('body').on('click', '.loadmore', function () {
//            if($('body').find('div.loader')){
//                loader.hide();
//            }
            $('.tab-pane.active .my-posts').append(loader).fadeIn();
            var categoria = $('.nav-link.ativo').data('categoria');
            var tag = $('.nav-link.ativo').data('tag');
            var data = {
                'action': 'load_posts_by_ajax',
                'page': page,
                'categoria': categoria,
                'tag': tag,
                'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
            };

            $.post(ajaxurl, data, function (response) {
                $('.loader').fadeOut().remove();
                $('.tab-pane.active .my-posts').append(response).fadeIn();
                page++;
            });
        });
    });

    $('.nav-link').on('click', function () {
        //a cada click da tab, reinicia a paginacão
        page = 2;
//        if($('body').find('div.loader')){
//            loader.hide();
//        }
        $('.tab-pane.active .my-posts').html(loader);
        $('.loader').fadeIn();

        var categoria = $(this).data('categoria');
        var data = {
            'action': 'load_posts_by_ajax',
            'page': 1,
            'categoria': categoria,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };

        $.post(ajaxurl, data, function (response) {
            //$('.loader').fadeOut().remove();
            $('.tab-pane.active .my-posts').html(response).fadeIn();
        });
    });

</script>


</body>
</html>