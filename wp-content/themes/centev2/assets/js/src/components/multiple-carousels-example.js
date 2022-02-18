const postsCarousels = $('.swiper-container');

let swiperInstances = {};

CarouselDepoimentos.pageLoaded = () => {
    if(carousel.length) {
		
		postsCarousels.each( (index, element ) => {
			let carousel = $(element);
			carousel.addClass( 'carousel-post-'+index );
			carousel.closest('._carousel-depoimentos').addClass( 'carousel-'+index );						
			createSlider(index);
		});
	}
}

function createSlider( idSlider ) {
	
	swiperInstances[idSlider] = new Swiper(
		".carousel-post-" + idSlider, {
			loop: false,
			lazy: true,
			slidesPerView: 1,
			spaceBetween: 15,
			breakpoints: breaks ? breaks : false,
			navigation: {
				nextEl: '.carousel-' + idSlider + ' .depo-next',
				prevEl: '.carousel-' + idSlider + ' .depo-prev', 
			}
		}
	);
	let date = new Date();
	console.log("Slider-"+ idSlider + " created now: " + date.getHours() + ":" + date.getMinutes() + ":" + date.getMinutes());
	
}