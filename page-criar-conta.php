<?php get_header(); ?>
<section class="login-page">
	<section class="col-text">
		<section class="text">
			<h1>Wp<strong>Tasks</strong></h1>
			<p>Gerencie as tarefas da sua equipe de desenvolvimento.</p>
		</section>
	</section>
	<section class="col-form">
		<section class="form-box shadow-md rounded-md">
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
					<a href="<?php wp_go('dados-pessoais'); ?>" class="btn-lg btn-full btn-s">Avançar &rsaquo;</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('acessar-minha-conta'); ?>">&lsaquo; voltar</a>
				</div>
			</form>
		</section>
	</section>
</section>
<?php get_footer(); ?>