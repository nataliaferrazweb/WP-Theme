/**
 * The template name: Contato
 * ...
 */
<?php get_header(); ?>

<div class="bordaBox" id="conteudo">
<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
<div class="cont">


<?php
function h($str) {
	return htmlentities($str);
}

function noempty($str) {
	if (preg_match('/[a-z]/', $str))
		return true;
	else
		return false;
}

if (isset($_POST['enviar'])) {
	if (!noempty($_POST['nome']) or !noempty($_POST['assunto']) or !is_email($_POST['email']) or !noempty($_POST['msg'])) {
		$_SESSION['info'] = 'Preencha todos campos corretamente.';
	}

	else {
		$headers = 'From: ' . $_POST['email'] . "\r\n" .
		    'Reply-To: ' . $_POST['email']  . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if(@mail(get_bloginfo('admin_email'), $_POST['assunto'], $_POST['msg'], $headers)) {
			$_SESSION['info'] = 'E-mail enviado com sucesso.';
			header('Location: http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
			exit;
		} else {
			$_SESSION['info'] = 'Erro no servidor.';
		}
	}
}
?>















<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<?php $options = get_option('responsive_theme_options'); ?>
<?php if ($options['breadcrumb'] == 0): ?>
<?php echo responsive_breadcrumb_lists(); ?>
<?php endif; ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



<div class="post-entry">
<div id="pagina">
<?php the_content(__('Read more &#8250;', 'responsive')); ?>


<form method="post" action="" class="contato">
		<?php
			if (isset($_SESSION['info'])) {
				echo '<div class="info">' . $_SESSION['info'] . '';
				unset($_SESSION['info']);
			}
		?>
		<div>
			<label for="nome">* Nome</label><br />
			<input type="text" name="nome" value="<?php echo h(@$_POST['nome']) ?>" id="nome" />
		</div>
		<div>
			<label for="email">* E-mail</label><br />
			<input type="text" name="email" value="<?php echo h(@$_POST['email']) ?>" id="email" />
		</div>
		<div>
			<label for="assunto">* Assunto</label><br />
			<input type="text" name="assunto" value="<?php echo h(@$_POST['assunto']) ?>" id="assunto" />
		</div>
		<div>
			<label for="msg">* Mensagem</label><br />
			<textarea name="msg"><?php echo h(@$_POST['msg']) ?></textarea>
		</div>
		<div>
			<input type="submit" name="enviar" value="Enviar" />
		</div>
</form>




<?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
</div>
</div><!-- end of .post-entry -->


<div class="post-data">
<?php the_tags(__('Tagged with:', 'responsive') . ' ', ', ', '<br />'); ?> 
<?php the_category(__('Posted in %s', 'responsive') . ', '); ?> 
</div><!-- end of .post-data -->


<div class="post-edit"><?php edit_post_link(__('Edit', 'responsive')); ?></div> 
</div><!-- end of #post-<?php the_ID(); ?> -->


<?php endwhile; ?> 

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
<div class="navigation">
<div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'responsive' ) ); ?></div>
<div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'responsive' ) ); ?></div>
</div><!-- end of .navigation -->
<?php endif; ?>

<?php else : ?>

<h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
<p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
<h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>"><?php _e( '&larr; Home', 'responsive' ); ?></a> <?php _e( 'or search for the page you were looking for', 'responsive' ); ?></h6>
<?php get_search_form(); ?>

<?php endif; ?> 

</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>


<?php get_footer(); ?>
