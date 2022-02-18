import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class

// Exports the component to be used in other files
export const MobileMenu = new Component();

// Get the DOM elements of this component
const mobileMenu = $('._mobile-menu');


const links = mobileMenu.find('[href="#"]');

// Called in the index.js on load the page
MobileMenu.pageLoaded = () => {
  links.on('click', clicked => {
    clicked.preventDefault();
    const el = $(clicked.currentTarget);

    const subMenu = el.parent().find('.sub-menu');
    subMenu.slideToggle();
  })
}
