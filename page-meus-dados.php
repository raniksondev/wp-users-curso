<?php get_header(); ?>
<section class="app">
	<section class="header">
		<section class="logo"></section>
		<section class="menu line-b"></section>
		<section class="user-logged line-b">
			<section class="user-infos">
				<section class="name">Davi Bianchini</section>
				<section class="role">Administrador</section>
			</section>
			<section class="user-menu">
				<button type="button">
					<img src="https://tinyfac.es/data/avatars/7D3FA6C0-83C8-4834-B432-6C65ED4FD4C3-500w.jpeg" class="circle" width="40">
				</button>
				<section class="menu">
					<ul>
						<li>
							<a href="<?php wp_go('meus-dados') ?>">Meus dados</a>
							<a href="<?php wp_go('minhas-configuracoes') ?>">Configurações</a>
							<a href="<?php wp_go('minhas-configuracoes') ?>">Sair</a>
						</li>
					</ul>
				</section>
			</section>
		</section>
	</section>
	<section class="body">
		<section class="menu"></section>
		<section class="content">
			<section class="header">
				<h1 class="mb-0">Minhas Configurações</h1>
				<p>Personalize sua área de trabalho.</p>
			</section>
		</section>
	</section>
	<section class="footer"></section>
</section>
<?php get_footer(); ?>
