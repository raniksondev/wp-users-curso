<section class="menu">
	<section class="logo">
		<?php wp_theme_img('check.svg', 35) ?>
	</section>
	<section class="menu-links">
		<a href="<?php wp_go('dashboard'); ?>" <?php wp_menu_active('Dashboard') ?>>
			<span class="icon ion-ios-filing"></span>
			<div>Dashboard</div>
		</a>
		<a href="<?php wp_go('tarefas'); ?>" <?php wp_menu_active('Tarefas') ?>>
			<span class="icon ion-ios-checkmark-circle-outline"></span>
			<div>Tarefas</div>
		</a>
		<a href="<?php wp_go('mensagens'); ?>" <?php wp_menu_active('Mensagens') ?>>
			<span class="icon ion-ios-mail-open"></span>
			<div>Mensagens</div>
		</a>
		<a href="<?php wp_go('usuarios'); ?>" <?php wp_menu_active('Usuários') ?>>
			<span class="icon ion-ios-man"></span>
			<div>Usuários</div>
		</a>
		<a href="<?php wp_go('configuracoes'); ?>" <?php wp_menu_active('Configurações') ?>>
			<span class="icon ion-ios-cog"></span>
			<div>Opções</div>
		</a>
	</section>
</section>

