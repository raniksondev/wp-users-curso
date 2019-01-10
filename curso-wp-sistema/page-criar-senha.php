<?php get_header(); ?>
<section class="login-page">
	<?php get_template_part('_inc/login-col-text'); ?>
	<section class="col-form">
		<section class="form-box rounded-md">
			<div class="header">
				<h2>Nova senha</h2>
				<p>Defina sua nova senha de acesso.</p>
			</div>
			<form>
				<label>
					<span>Senha:</span>
					<input type="text">
				</label>
				<label>
					<span>Repetir senha:</span>
					<input type="text">
				</label>
				<div class="mt-15">
					<a href="#" class="btn-lg btn-full btn-s">Confirmar</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('acessar-minha-conta'); ?>">&lsaquo; Acessar minha conta</a>
				</div>
			</form>
		</section>
	</section>
</section>
<?php get_footer(); ?>