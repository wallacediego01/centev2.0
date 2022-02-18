import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class
import { Swiper, Navigation, Autoplay, Pagination, EffectFade } from 'swiper/js/swiper.esm.js';
Swiper.use([Autoplay, Navigation, Pagination, EffectFade]);

export const Hero = new Component();

// Get the DOM elements of this component
const hero	= $('._hero');

// On Load
Hero.pageLoaded = () => {

    if(hero.length) {

		//Variables
		const fade 	   = $('#heroFade').val();
		const dots 	   = $('#heroDots').val();
		const navs 	   = $('#heroNav').val();
		const loop 	   = $('#heroLoop').val();
		const autoplay = $('#heroAutoplay').val();

		// Aguments of slider
		let args = {
			slidesPerView: 1,			
		}
		
		// Add fields in slider if checked on CMS
		if (dots) {
			args.pagination = {
				el: '._hero .swiper-pagination',
        		dynamicBullets: true,
				clickable: true,
			}
		}

		if (navs) {
			args.navigation = {
				nextEl: '._hero .swiper-button-next',
				prevEl: '._hero .swiper-button-prev',
			}
		}

		if( loop ){
			args.loop = {
				loop: true,
			}
		}

		if ( autoplay ) {
			args.autoplay = {
				delay: 5000,
				disableOnInteraction: false,
			  }
		}

		if ( fade ) {
			args.effect = 'fade';
			args.fadeEffect = {
				crossFade: true
			}
		}
		
		// Init slider
		let swiper = new Swiper('.hero-container', args);

	}
}