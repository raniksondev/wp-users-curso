<section class="header">
	<section class="logo">
		<?php wp_theme_img('check.svg', 35) ?>
	</section>
	<section class="menu"></section>
	<section class="alerts">
		<button type="button" data-action="toggle-sidebar" data-target="#alerts" data-width="350" data-side="right">
			<span class="number">1</span>
			<span class="icon ion-ios-notifications"></span>
		</button>
	</section>
	<section class="user-logged">
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
					</li>
					<li>
						<a href="<?php wp_go('minhas-configuracoes') ?>">Configurações</a>
					</li>
					<li>
						<a href="<?php wp_go('entrar') ?>">Sair</a>
					</li>
				</ul>
			</section>
		</section>
	</section>
</section>