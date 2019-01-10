jQuery(document).ready(function(){

	var $ = jQuery;

	/*******************************************
	* MODAL
	*******************************************/

	function toggleModal(target, id){
		
		var modal 	= $(target)
		var w 	= modal.width()
		var h 	= modal.height()
		var css = {}

		var ps = modal.position();

		let overlayEl = `<div class="overlay" id="overlay-modal" data-target="${target}"> </div>`

		if(ps.top < 0){
			css['top'] = '50%'
			css['margin-top'] = '-'+h/2+'px'

			$('body').append(overlayEl)
			$('#overlay-modal').fadeTo( 100 , 1)

		}else{
			css['top'] = '-'+h+'px'
			modal.attr('data-id', '');
		}

		modal.animate(css, {
			duration: 500,
			queue: false,
			easing: 'easeOutQuint',
		})


		if(id){
			modal.attr('data-id', id);
		}

	}

	$('body').on('click', '#overlay-modal', function(e){
		let overlay = $(e.target);
		let target 	= overlay.data('target')
		overlay.fadeTo( 100 , 0, function(){
			overlay.remove()
		});
		toggleModal(target)
	})


	$('body').on('click', '[data-action="toggle-modal"]', function(){
		let target = $(this).data('target');
		let id = $(this).data('id');
		toggleModal(target, id);
	})

	$('body').on('click', '#btn-send-message', function(){
		let id = $(this).closest('.modal-message').data('id');
		console.log(id);
	})

	/*******************************************
	* MODAL
	*******************************************/


	function toggleSidebar(target, width, side){
		
		var el 	= $(target)
		var sd 	= side ? side : 'right'
		var pos = el.css(sd)
		var css = {}
		var posHide 	= '-'+width+'px'

		if (width) {
			css['width'] = width+'px'
		}else{
			css['width'] =  '350px'
		}

		css['display'] = 'flex'
		
		el.css(css);

		css['top'] = 0
		css[sd] = pos === 'auto' || pos === posHide ? 0 : posHide

		el.animate(css, {
			duration: 500,
			queue: false,
			easing: 'easeOutQuint',
		})

		if (pos === 'auto' || pos === posHide) {
			let overlayEl = `<div class="overlay" id="overlay-sidebar" data-target="${target}" data-width="${width}" data-side="${side}"> </div>`
			$('body').append(overlayEl);
			$('.overlay').fadeTo( 100 , 1);
		}

	}


	let sidebars = $('[data-action="toggle-sidebar"]');

	$.each(sidebars, function(i, e){
		let el 		= $(e);
		let id 		= el.data('target');
		let width 	= el.data('width');
		let side 	= el.data('side');
		let target  = $(id);
		
		let css 	= {}
		css[side] 	= '-'+width+'px';
		
		target.css(css);

	})


	$('body').on('click', '#overlay-sidebar', function(e){
		let overlay = $(e.target);
		overlay.fadeTo( 100 , 0, function(){
			overlay.remove()
		});

		let target 	= $(this).data('target');
		let width 	= $(this).data('width')
		let side 	= $(this).data('side')

		toggleSidebar(target, width, side);
		
	})
	


	$('body').on('click', '[data-action="toggle-sidebar"]', function(){
		let target 	= $(this).data('target');
		let overlay = $(this).data('overlay');
		let width 	= $(this).data('width')
		let side 	= $(this).data('side')

		toggleSidebar(target, width, side);
	})



});