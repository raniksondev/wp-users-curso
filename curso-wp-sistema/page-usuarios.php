<?php get_header(); ?>
<section class="app">
	<?php get_template_part('_inc/app-menu'); ?>
	<?php get_template_part('_inc/_usuarios/submenu'); ?>
	
	<section class="content">
		
	</section>

	<section class="control-button">
		<button type="button" data-action="toggle-modal" data-target="#add-user">
			<span class="icon ion-ios-add"></span>
		</button>
	</section>
	
</section>
<?php get_footer(); ?>
