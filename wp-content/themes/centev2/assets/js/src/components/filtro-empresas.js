import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class

export const FiltroPost = new Component();

// Get the DOM elements of this component
const filtroPost = $('._box-search');

// On Load
FiltroPost.pageLoaded = () => {
    if(filtroPost.length) {
		// Code here...
		// filtroPost.on('mouseover',(event) =>{
		// 	let el = $(event.currentTarget);
		// 	let input = el.find('.search');
		// 	if (input.val() == "") {
		// 		el.addClass('active');

		// 	}
		// });

		
	}
}