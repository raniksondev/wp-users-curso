<section class="submenu">
	<ul>
		<li>
			<a href="<?php wp_go('usuarios'); ?>" <?php wp_params_active('role', '') ?>>&bull; Todos</a>
		</li>
		<li>
			<a href="<?php wp_go('usuarios?role=administrator'); ?>" <?php wp_params_active('role', 'administrator') ?>>&bull; Administradores</a>
		</li>
		<li>
			<a href="<?php wp_go('usuarios?role=gestores'); ?>" <?php wp_params_active('role', 'gestores') ?>>&bull; Gestores</a>
		</li>
		<li>
			<a href="<?php wp_go('usuarios?role=programadores'); ?>" <?php wp_params_active('role', 'programadores') ?>>&bull; Programadores</a>
		</li>
		<li>
			<a href="<?php wp_go('usuarios?role=designers'); ?>" <?php wp_params_active('role', 'designers') ?>>&bull; Designers</a>
		</li>
	</ul>
</section>