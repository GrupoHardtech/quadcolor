$(document).ready(function() {
	
	// Contact Maps
	$("#maps").gmap3({
		map: {
			options: {
			  center: [-7.866315,110.389574],
			  zoom: 8,
			  scrollwheel: false
			}  
		 },
		marker:{
			latLng: [-7.866315,110.389574],
			options: {
			 icon: new google.maps.MarkerImage(
			   "https://dl.dropboxusercontent.com/u/29545616/Preview/marker.png",
			   new google.maps.Size(48, 48, "px", "px")
			 )
			}
		 }
	});
	
	//Slider
	$("#slider").carousel({
		interval: 5000
	});
	
	$("#testi").carousel({
		interval: 4000
	});
	
	$("#itemsingle").carousel({
		interval: false
	});

	$("#owl-demo").owlCarousel({
		autoPlay : 3500,
		stopOnHover : false,
		navigation: false,
		paginationSpeed : 1000,
		goToFirstSpeed : 2000,
		singleItem : true,
		autoHeight : true,
		transitionStyle:"fade"
	});

	$("#owl-demo2").owlCarousel({
		autoPlay : 3500,
		stopOnHover : false,
		navigation: true,
		paginationSpeed : 1000,
		goToFirstSpeed : 2000,
		singleItem : true,
		autoHeight : true,
		transitionStyle:"fade"
	});

});