<?php get_header(); ?>
<section class="login-page">
	<section class="col-text">
		<section class="text">
			<h1>Wp<strong>Tasks</strong></h1>
			<p>Gerencie as tarefas da sua equipe de desenvolvimento.</p>
		</section>
	</section>
	<section class="col-form">
		<section class="header-actions">
			<a href="<?php wp_go('criar-conta'); ?>" class="btn-md btn-line">Criar conta</a>
		</section>
		<section class="form-box shadow-md rounded-md">
			<div class="header">
				<h2>Bem vindo.</h2>
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
					<a href="#" class="btn-lg btn-full btn-s">Entrar</a>
				</div>
				<div class="mt-30">
					<a href="<?php wp_go('lembrar-senha'); ?>">Esqueceu sua senha?</a>
				</div>
			</form>
		</section>
	</section>
</section>
<?php get_footer(); ?>