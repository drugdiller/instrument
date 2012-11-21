var map;
function initialize() {
	var myLatlng = new google.maps.LatLng(60.008855, 30.324959);
	var myOptions = {
    	zoom: 15,
      	center: myLatlng,
		streetViewControl:false,
		mapTypeControl:false,
      	mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);

	var contentString = '<div id="content">'+
	    '<div id="siteNotice">'+
	    '</div>'+
	    '<h2 id="firstHeading" class="firstHeading">SUPERDIOD</h2>'+
	    '<div id="bodyContent">'+
	    '<p>Адрес: Энгельса 36</p>'+
	    '</div>'+
	    '</div>';

	var infowindow = new google.maps.InfoWindow({
	    content: contentString
	});

	var marker = new google.maps.Marker({
	    position: myLatlng,
	    map: map,
	    title:"Uluru (Ayers Rock)"
	});

	//google.maps.event.addListener(marker, 'click', function() {
	  //infowindow.open(map,marker);
	//});
	//infowindow.open(map,marker);

}
google.maps.event.addDomListener(window, 'load', initialize);