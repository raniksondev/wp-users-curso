<?php get_header(); ?>
<section class="login-page">
	<?php get_template_part('_inc/login-col-text'); ?>
	<section class="col-form">
		<section class="form-box rounded-md">
			<div class="header">
				<h2 class="mb-5">Criar conta</h2>
				<p>Informe os seus dados de acesso.</p>
			</div>
			<form>
				<section class="steps mb-30">
					<span class="active"></span>
					<span></span>
					<span></span>
				</section>
				<label>
					<span>Nome de usuário:</span>
					<input type="text">
				</label>
				<label>
					<span>Senha:</span>
					<input type="text">
				</label>
				<label>
					<span>Confirmar Senha:</span>
					<input type="text">
				</label>
				<div class="mt-15">
					<a href="<?php wp_go('cadastro'); ?>" class="btn-lg btn-full btn-s">Avançar &rsaquo;</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('entrar'); ?>">&lsaquo; voltar</a>
				</div>
			</form>
		</section>


		<section class="form-box d-none">
			<div class="header">
				<h2 class="mb-5">Dados pessoais</h2>
				<p>Informe os seus dados de acesso.</p>
			</div>
			<form>
				<section class="steps mb-30">
					<span></span>
					<span class="active"></span>
					<span></span>
				</section>
				<label>
					<span>Nome:</span>
					<input type="text">
				</label>
				<label>
					<span>Sobrenome:</span>
					<input type="text">
				</label>
				<label>
					<span>Estado:</span>
					<div class="combobox">
						<select>
							<option value="">Selecione</option>
							<option value="AC">Acre</option>
							<option value="ES">Espírito Santo</option>
							<option value="GO">Goiás</option>
						</select>
					</div>
				</label>
				<div class="mt-15">
					<a href="<?php wp_go('minha-foto'); ?>" class="btn-lg btn-full btn-s">Avançar &rsaquo;</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('cadastro'); ?>">&lsaquo; voltar</a>
				</div>
			</form>
		</section>

		<section class="form-box d-none">
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
					<a href="<?php wp_go('cadastro'); ?>" class="btn-lg btn-full btn-s">Concluir</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('entrar'); ?>">&lsaquo; voltar</a>
				</div>
			</form>
		</section>


	</section>
</section>
<?php get_footer(); ?>