<?php get_header(); ?>
<section class="login-page">
	<?php get_template_part('_inc/login-col-text'); ?>
	<section class="col-form">
		<section class="message-box d-none">
			<div class="ico success">
				<span class="icon ion-ios-mail-open"></span>
			</div>
			<div class="text">Verifique o seu e-mail para alterar sua senha.</div>
			<a href="<?php wp_go('acessar-minha-conta') ?>" class="btn-md btn-dd">Voltar</a>
		</section>
		<section class="form-box">
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
					<a href="<?php wp_go('acessar-minha-conta'); ?>">&lsaquo; Acessar minha conta</a>
				</div>
			</form>
		</section>
	</section>
</section>
<?php get_footer(); ?>