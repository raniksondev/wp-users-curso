<?php get_header(); ?>
<section class="app">
	
	<!-- HEADER -->

	<?php get_template_part('_inc/app-header'); ?>


	<section class="body">

		<!-- MENU -->
		
		<?php get_template_part('_inc/app-menu'); ?>

		

		<section class="content">
			<section class="section-bar">
				<div class="ico">
					<span class="icon ion-ios-man"></span>
				</div>
				<div class="title">Usuários</div>
			</section>
			<section class="page-users">
				<section class="users-items">
					<!-- item -->
					<div class="user-item">
						<span class="status unblock"></span>
						<button type="button" class="btn-manager-user" data-action="toggle-sidebar" data-target="#manager-user" data-overlay="true" data-width="350" data-side="right">
							<span class="icon ion-md-more"></span>
						</button>
						<div class="body">
							<div class="avatar">
								<img src="https://randomuser.me/api/portraits/men/43.jpg" alt="">
							</div>
							<div class="name">Eduardo Costa</div>
							<div class="role">Programador</div>
						</div>
						<div class="footer text-right">
							<button type="button" class="btn-sm btn-ss" data-action="toggle-modal" data-target="#send-message" data-id="0001">
								<span class="icon ion-ios-send"></span>
							</button>
						</div>
					</div>
					<!-- item -->
					<div class="user-item">
						<span class="status unblock"></span>
						<button type="button" class="btn-manager-user" data-action="toggle-sidebar" data-target="#manager-user" data-width="350" data-side="right">
							<span class="icon ion-md-more"></span>
						</button>
						<div class="body">
							<div class="avatar">
								<img src="https://randomuser.me/api/portraits/women/65.jpg" alt="">
							</div>
							<div class="name">Eduardo Costa</div>
							<div class="role">Programador</div>
						</div>
						<div class="footer text-right">
							<button type="button" class="btn-sm btn-ss" data-action="toggle-modal" data-target="#send-message" data-id="0002">
								<span class="icon ion-ios-send"></span>
							</button>
						</div>
					</div>
					<!-- item -->
					<div class="user-item">
						<span class="status unblock"></span>
						<button type="button" class="btn-manager-user" data-action="toggle-sidebar" data-target="#manager-user" data-overlay="true" data-width="350" data-side="right">
							<span class="icon ion-md-more"></span>
						</button>
						<div class="body">
							<div class="avatar">
								<img src="https://randomuser.me/api/portraits/men/97.jpg" alt="">
							</div>
							<div class="name">Eduardo Costa</div>
							<div class="role">Programador</div>
						</div>
						<div class="footer text-right">
							<button type="button" class="btn-sm btn-ss" data-action="toggle-modal" data-target="#send-message" data-id="0003">
								<span class="icon ion-ios-send"></span>
							</button>
						</div>
					</div>
					
				</section>
			</section>
		</section>
	</section>

	<section class="control-button">
		<button type="button" data-action="toggle-modal" data-target="#add-user">
			<span class="icon ion-ios-add"></span>
		</button>
	</section>
</section>

<?php get_template_part('_inc/_users/sidebar-manager-user'); ?>
<?php get_template_part('_inc/_users/modal-send-message'); ?>
<?php get_template_part('_inc/_users/modal-add-user'); ?>

<?php get_footer(); ?>
