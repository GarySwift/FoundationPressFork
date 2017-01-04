(function($) {
	function render_map( $el ) {
		var $markers = $el.find('.marker');
		var args = {
			zoom		: map_zoom_level,
			center		: new google.maps.LatLng(0, 0),
			mapTypeId	: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			styles: map_style			
		};
		var map = new google.maps.Map( $el[0], args);
		map.markers = [];
		$markers.each(function(){
	    	add_marker( $(this), map );
		});
		center_map( map );
	}
	function add_marker( $marker, map ) {
		var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
		var marker = new google.maps.Marker({
			position	: latlng,
			map			: map
		});
		map.markers.push( marker );

		  var infowindow = new google.maps.InfoWindow({
		    content: contentString
		  });

	    marker.addListener('click', function() {
		    infowindow.open(map, marker);
		});

	    marker.addListener('mouseover', function() {
		    infowindow.open(map, marker);
		});

		if( $marker.html() )
		{
			infowindow = new google.maps.InfoWindow({
				content		: $marker.html()
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open( map, marker );
			});
		}
	}	
	function center_map( map ) {
		var bounds = new google.maps.LatLngBounds();
		$.each( map.markers, function( i, marker ){
			var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
			bounds.extend( latlng );
		});
		if( map.markers.length == 1 )
		{
		    map.setCenter( bounds.getCenter() );
		    map.setZoom( map_zoom_level );
		}
		else
		{
			map.fitBounds( bounds );
		}
	}
	$(document).ready(function(){
		$('.acf-map').each(function(){
			render_map( $(this) );
		});
	});
})(jQuery);