import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class

export const GaleriaImagens = new Component();

// Get the DOM elements of this component
const galeriaImagens = $('._photoswipe');
const galeria = $('.gallery');
const open = $('.open-galley');
let galleryArray = [];

// On Load
GaleriaImagens.pageLoaded = () => {
    if(galeriaImagens.length) {
		// Code here...
		galeria.find('figure').each(function() {
			var $link = $(this).find('a'),
			  item = {
				src: $link.attr('href'),
				w: $link.data('width'),
				h: $link.data('height'),
				title: $link.attr('title') 
			  };
			galleryArray.push(item);
		});

		open.on("click", (event) => {
			// Prevent location change
			event.preventDefault();
		
			// Define object and gallery options
			var $pswp = $('.pswp')[0],
			  options = {
				index: $(event.currentTarget).parent('figure').data('index'),
				bgOpacity: 0.85,
				showHideOpacity: true
			  };
			
			// Initialize PhotoSwipe
			var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, galleryArray, options);
			gallery.init();
		});
	}
}
