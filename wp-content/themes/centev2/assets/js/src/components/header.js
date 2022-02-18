import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class
import { body, win } from '../util/globals';

// Exports the component to be used in other files
export const Header = new Component();

// Get the DOM elements of this component
const header     = $('._header');


// Logic variables
let isActive			= false;
const offsetToActivate	= 46; //px

// On load
Header.pageLoaded = () => {
  AOS.init();
   const menuMobile = $('.menu-icon');
   menuMobile.on('click', clicked => {
     $('body').toggleClass('scroll-locked');
     $('._mobile_menu').toggleClass('active')
   })
    
}

Header.pageScrolled = ( scrollPos ) => {
 

  const viewport = win.width();

  
    if(scrollPos >= 60 ){
      header.addClass('active');
    } else {
      header.removeClass('active');
    }
  
  
}
