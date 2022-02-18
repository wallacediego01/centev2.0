import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class

export const ImageText = new Component();

// Get the DOM elements of this component
const imageText = $('._image-text');

// On Load
ImageText.pageLoaded = () => {
    if(imageText.length) {
		// Code here...
	}
}