<?php get_header(); ?>
<section class="app">
	<section class="header shadow-lg">
		<section class="logo"></section>
		<section class="menu"></section>
		<section class="user-logged">
			<section class="user-menu">
				<button type="button">
					<img src="https://tinyfac.es/data/avatars/7D3FA6C0-83C8-4834-B432-6C65ED4FD4C3-500w.jpeg" class="circle" width="40">
				</button>
				<section class="menu">
					<ul>
						<li>
							<a href="#">Meus dados</a>
							<a href="#">Configurações</a>
							<a href="#">Sair</a>
						</li>
					</ul>
				</section>
			</section>
		</section>
	</section>
	<section class="body">
		<section class="content w-600">
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
							<td class="text-s">Permitir que outros usuários visualizam meus cursos.</td>
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
				</section>
				<section class="config-block">
					<h3>Meus Interesses</h3>
					<p>Selecione a cor do seu dashboard.</p>
					<section class="tags">
						<div class="check-tag">
							<input type="checkbox" id="tag-1">
							<label for="tag-1">WordPress</label>
						</div>
						<div class="check-tag">
							<input type="checkbox" id="tag-2">
							<label for="tag-2">HTML e CSS</label>
						</div>
						<div class="check-tag">
							<input type="checkbox" id="tag-3">
							<label for="tag-3">JavaScript</label>
						</div>
					</section>
				</section>
			</section>
		</section>
	</section>
	<section class="footer"></section>
</section>
<?php get_footer(); ?>
