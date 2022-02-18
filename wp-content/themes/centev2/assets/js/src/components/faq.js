import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class


// Exports the component to be used in other files
export const Faq = new Component();

// Get the DOM elements of this component
const faq     = $('._accordion');
const tab = $('.tab-label')
const checks = $('.inpt-check');
// On load 
Faq.pageLoaded = () => {
    if(faq.length) {
        tab.on('click', clickded => {
            let el = $(clickded.currentTarget);

            if (!el.parent().hasClass('active')) {
                checks.parent().removeClass('active');
                checks.prop( "checked", false );
                // el.parent().find('input').prop("checked", true);
                el.parent().addClass('active');
            } else {
                checks.parent().removeClass('active');
                setTimeout(() => {
                    el.parent().find('input').prop("checked", false); 
                }, 200);
            }
       })  
    }
     
}