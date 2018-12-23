<?php get_header(); ?>
<section class="app">

	<!-- HEADER -->
	
	<?php get_template_part('_inc/app-header'); ?>

	<section class="body">

		<!-- MENU -->
		
		<?php get_template_part('_inc/app-menu'); ?>

		<section class="content-center w-600">
			<section class="header">
				<h1 class="mb-0">Minhas Configurações</h1>
				<p>Personalize sua área de trabalho.</p>
			</section>
			<section class="body">
				<section class="config-block">
					<h3>Privacidade</h3>
					<p>Selecione as opções referente a privacidade da sua conta.</p>
					<table class="table table-text-sm">
						<tr>
							<td class="text-s">Permitir que outros usuários visualizam meus dados de contatos</td>
							<td width="72">
								<div class="check-switch">
									<input type="checkbox" id="switch-1">
									<label for="switch-1"></label>
								</div>
							</td>
						</tr>
						<tr>
							<td class="text-s">Permitir que outros usuários me envie mensagens</td>
							<td>
								<div class="check-switch">
									<input type="checkbox" id="switch-2">
									<label for="switch-2"></label>
								</div>
							</td>
						</tr>
					</table>
					<div class="mt-30">
						<button type="button" class="btn-md btn-s">Salvar alterações</button>
					</div>
				</section>
			</section>
		</section>
	</section>
	<section class="footer"></section>
</section>
<?php get_footer(); ?>
