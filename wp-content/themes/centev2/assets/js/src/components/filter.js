import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class

export const FilterEmpresas = new Component();

// Get the DOM elements of this component
const filter      = $('._filtro-empresas');

const button      = filter.find('.btn-filter');
const option_filter = filter.find('.box-options');
const option        = option_filter.find('.input-option');
const loaded      = $('.loaded');
const filtros_aplicados = $('.filtros-selecionados');

let data = [];
let tax  = [];

// On Load
FilterEmpresas.pageLoaded = () => {
    if(filter.length) {

        let unidades = $('#unidades');
        let setores = $('#setores');

        // Input search
		button.on( 'click', (event) => {
            event.preventDefault();
            
            if (unidades.val() != "") {
                tax.push({ "index": 'emp_unidades', "value": unidades.val() });
            } 
            
            if (setores.val() != "") {
                tax.push({ "index": 'emp_setor', "value": setores.val() });
            } 

            data = {
                'post_type': 'empresa',
                'is_ajax': true,
                'tax': tax || "" 
            };     
            
            get_posts( data );            
        }); 

        // // remove filters
        // $(document).on('click', '.remove-filter', clicked => {
        //     clicked.preventDefault();
        //     let element = $(clicked.currentTarget);
        //     let index = element.data('index');
        //     let value = element.data('value');
            
        //     $('.'+index).find('.'+value).prop( "checked", false );
        //     element.remove();

        //     setTimeout(() => {
        //         get_check_values();
        //     }, 500);
        // });
	}
}

function  get_posts( data ){
    //Ajax funciton
    const endpoint    = $('#endpoint').val();
    console.log(endpoint);
    $.ajax({
        url: endpoint,
        type: 'GET',
        dataType:'html',
        data: data,
        error:function (xhr, ajaxOptions, thrownError){
            console.log(ajaxOptions,thrownError);
        }
    }).done( function ( response ) {
        if( response ) {
            console.log(response);
            loaded.hide();
            loaded.html('');
            loaded.append(response);
            loaded.fadeIn();

        } else {
            loaded.append(response);
        }
    });
} 
