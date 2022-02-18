import $ from 'jquery';
import { Component } from '../util/component'; // Import to inherit from the Component class

export const YoutubeVideo = new Component();

// Get the DOM elements of this component
const youtubeVideo = $('._youtube-video');

// On Load
YoutubeVideo.pageLoaded = () => {
   
    if(youtubeVideo.length) {
		// Code here...		
		youtubeVideo.each( (i, e) => {
			let element = $(e);
			let boxVideo = element.find('.youtube-video');
			let idVideo = boxVideo.data('video');

			// if(boxVideo.length){
			// 	let urlImage = "https://img.youtube.com/vi/" + idVideo + "/hqdefault.jpg";
			// 	let img = new Image();
			// 	img.src = urlImage;
			// 	img.alt = "Imagem em miniatura do vídeo";
			// 	boxVideo.append(img);
				
			// } else {
			// 	boxVideo = element.find('.youtube-video-img');
			// 	idVideo = boxVideo.data('video');
			// }

			boxVideo.on("click", (el) => {
				
				let iframe = document.createElement("iframe");

				iframe.setAttribute("frameborder", "0");
				iframe.setAttribute("allowfullscreen", "");
				iframe.setAttribute("src", "https://www.youtube.com/embed/" + idVideo + "?rel=0&showinfo=0&autoplay=1");
				boxVideo.html('');
				boxVideo.append(iframe); 
			});
		})
	}
}