<?php get_header(); ?>
<section class="login-page">
	<?php get_template_part('_inc/login-col-text'); ?>
	<section class="col-form">
		<section class="message-box ">
			<div class="ico success">
				<span class="icon ion-ios-mail-open"></span>
			</div>
			<div class="text">
				<h2>E-mail enviado.</h2>
				<p>Em poucos segundos você receberá em seu e-mail um link para alterar sua senha.</p>
			</div>
			<a href="<?php wp_go('entrar') ?>" class="btn-sm btn-dd">Voltar</a>
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