<?php get_header(); ?>
<section class="login-page">
	<?php get_template_part('_inc/login-col-text'); ?>
	<section class="col-form">
		<section class="form-box rounded-md">
			<div class="header">
				<h2 class="mb-5">Minha Foto</h2>
				<p>Insira uma foto do seu rosto.</p>
			</div>
			<form>
				<section class="steps mb-30">
					<span></span>
					<span></span>
					<span class="active"></span>
				</section>
				<section class="avatar-upload">
					<label>
						<?php wp_theme_img('no-avatar.svg', 150) ?>
						<input type="file">
					</label>
					<section class="text-center mt-10">
						<p class="mb-0">Selecione uma foto</p>
					</section>
				</section>
				<div class="mt-15">
					<a href="<?php wp_go('bem-vindo'); ?>" class="btn-lg btn-full btn-s">Concluir</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('entrar'); ?>">&lsaquo; voltar</a>
				</div>
			</form>
		</section>
	</section>
</section>
<?php get_footer(); ?>