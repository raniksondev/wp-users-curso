<?php get_header(); ?>
<section class="app">
	
	<!-- HEADER -->

	<?php get_template_part('_inc/app-header'); ?>


	<section class="body">

		<!-- MENU -->
		
		<?php get_template_part('_inc/app-menu'); ?>
		<section class="submenu">
			<ul>
				<li>
					<a href="#">&bull; Funções</a>
				</li>
				<li>
					<a href="#">&bull; Permissões</a>
				</li>
				<li>
					<a href="#">&bull; Registro</a>
				</li>
			</ul>
		</section>

		<section class="content">
			<section class="section-bar">
				<div class="ico">
					<span class="icon ion-ios-cog"></span>
				</div>
				<div class="title">Configurações</div>
			</section>
			<section class="page-users">

				<div id="made-in-ny"></div>

				<script src="https://player.vimeo.com/api/player.js"></script>
				<script>
				    var options = {
				        id: 59777392,
				        width: 640,
				        loop: true
				    };
				    var player = new Vimeo.Player('made-in-ny', options);
				    player.setVolume(0);


				    player.on('play', function() {
				        console.log('played the video!');
				    });

				    player.on('timeupdate', function(data) {
				        console.log(data);
				    });

				   jQuery(document).ready(function(){

				   		jQuery('.btn-play').on('click', function(){
				   			player.play();
				   		})

				   		jQuery('.btn-stop').on('click', function(){
				   			player.pause();
				   		})

				   })

				</script>


				<button type="button" class="btn-play">Play</button>
				<button type="button" class="btn-stop">Stop</button>
			</section>
		</section>
	</section>
</section>


<?php get_footer(); ?>
