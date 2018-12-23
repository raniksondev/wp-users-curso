<?php get_header(); ?>
<section class="login-page">
	
	<?php get_template_part('_inc/login-col-text'); ?>

	<section class="col-form">
		<section class="form-box rounded-md">
			<div class="header">
				<h2 >Bem vindo.</h2>
				<p>Acesse ou <a href="<?php wp_go('criar-conta'); ?>">crie uma conta</a>.</p>
			</div>
			<form>
				<label>
					<span>Nome de usuário:</span>
					<input type="text">
				</label>
				<label>
					<span>Senha:</span>
					<input type="text">
				</label>
				<div class="mt-15">
					<a href="<?php wp_go('usuarios') ?>" class="btn-lg btn-full btn-s">Entrar</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('lembrar-senha'); ?>">Esqueceu sua senha?</a>
				</div>
			</form>
		</section>
	</section>
</section>
<?php get_footer(); ?>