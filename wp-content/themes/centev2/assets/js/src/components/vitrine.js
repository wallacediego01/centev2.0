import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class
import { Swiper, Pagination, EffectFade } from 'swiper/js/swiper.esm.js';
Swiper.use([Pagination, EffectFade]);

export const Vitrine = new Component();

// Get the DOM elements of this component
const vitrine = $('._vitrine');

// On Load
Vitrine.pageLoaded = () => {
    if(vitrine.length) {
		// Code here...
		const swiper = new Swiper('.carousel-vitrine', {
			loop: false,
			spaceBetween: 5,
			preventClicksPropagation: false,
			pagination: {
				el: ".swiper-pagination-vitrine",
				clickable: true
			},
		});			
	}
}