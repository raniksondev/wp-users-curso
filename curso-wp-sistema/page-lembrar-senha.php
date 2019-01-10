<?php get_header(); ?>
<section class="login-page">
	<?php get_template_part('_inc/login-col-text'); ?>
	<section class="col-form">
		<section class="message-box">
			<div class="ico">
				<span class="icon ion-ios-mail-open"></span>
			</div>
			<div class="text">
				<h2>Confira o seu e-mail.</h2>
				<p>Enviamos um e-mail com o link para você alterar sua senha.</p>
				<a href="<?php wp_go('entrar'); ?>" class="btn-md btn-line">&lsaquo; voltar</a>
			</div>
		</section>
		<section class="form-box d-none">
			<div class="header">
				<h2>Lembrar Senha</h2>
				<p>Informe o seu e-mail cadastrado.</p>
			</div>
			<form>
				<label>
					<span>Email:</span>
					<input type="text">
				</label>
				<div class="mt-15">
					<a href="#" class="btn-lg btn-full btn-s">Lembrar</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('entrar'); ?>">&lsaquo; voltar</a>
				</div>
			</form>
		</section>
	</section>
</section>
<?php get_footer(); ?>