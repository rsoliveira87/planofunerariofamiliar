<?php 
/**
* The template for displaying the CONTATO page.
*/
get_header();

?>

<!-- Contact Form Section Begins -->
<div class="row-fluid">
    <div id="whiterogue-contato">
        <?php echo do_shortcode('[contact-form-7 id="21" title="Formulario de Contato"]'); ?>
    </div>									
</div>
<!-- Contact Form Section Ends -->

<!-- Address Wrapper --> 
	<div id="contact-address-map-wrapper" class="clearfix">
		<div class="contact-address container">
			<div class="row-fluid">
					<div class="address span8">
                        <h3 class="reservation-title">ENTRE EM CONTATO</h3>
                        <ul>
                            <li>
                                <i class="fa fa-building-o" style="margin-left:-4px"></i>
                                <strong style="padding-left:8px">ENDEREÇO : Av. Faria Lima, 2355 cj.1610, SP, SP </strong>
                            </li>
                            <li>
                                <i class="fa fa-mobile" style="font-size:40px;margin-left:0;line-height:0"></i>
                                <strong style="padding-left: 10px">TELEFONE :
                                    <?php echo esc_attr(get_theme_mod('_contato_contato_tel','(11) 3071-1325')); ?></strong></li>
                            <li>
                                <i class="fa fa-envelope" style="font-size:20px;padding-left:-1px"></i>
                                <strong style="padding-left: 8px">E-MAIL :
                                    <?php echo esc_attr(get_theme_mod('_contato_contato_email','lais.gomes@aleah.com.br')); ?></strong></li>
                            <li>
                                <i class="fa fa-globe" style="font-size:22px;padding-left:0"></i>
                                <strong style="padding-left: 9px">WEB : www.aleah.com.br</strong>
                            </li>
                        </ul>
                    </div>
            </div>
		</div>
		<div class="contact-map container">
			<div class="row-fluid">
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
                <div id="contactmap" class="location_map" style="width: px; height: 385px;"></div>
                <script type="text/javascript">
                    // Define your locations: HTML content for the info window, latitude, longitude
                    var locations = [
                        ['<div class="insaapp_map_window no_locimg clearfix"><span class="insaapp_right_sec"><h3>Aleah</h3><span>Em frente ao clube Pinheiros.</span></span></div>',-23.577610, -46.686435, google.maps.Animation.DROP],];		

                    // Setup the different icons and shadows
                    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
                    var icons = ['http://sketchthemes.com/samples/instaappointment-cab-booking-demo/wp-content/uploads/sites/75/2014/12/map-location-icon.png',]
                    var icons_length = icons.length;
                    var map = new google.maps.Map(document.getElementById('contactmap'), {
                        center: new google.maps.LatLng(-23.577610, -46.686435),
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: true,
                        scrollwheel: false,
                        streetViewControl: true,
                        panControl: false,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.LARGE
                        },
                    });

                    var infowindow = new google.maps.InfoWindow({
                        maxWidth: 400
                    });

                    var marker;
                    var markers = new Array();
                    var iconCounter = 0;
                    
                    // Add the markers and infowindows to the map
                    for (var i = 0; i < locations.length; i++) {  
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                            map: map,
                            icon : icons[iconCounter],
                            animation: locations[i][3]
                        });
                        
                        markers.push(marker);
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(locations[i][0]);
                                infowindow.open(map, marker);
                            }})(marker, i));

                        iconCounter++;
                        // We only have a limited number of possible icon colors, so we may have to restart the counter
                        
                        if(iconCounter >= icons_length){
                            iconCounter = 0;
                        }
                    }
                    
                    function Instaapp_AutoCenter() {
                        
                        //  Create a new viewpoint bound
                        var bounds = new google.maps.LatLngBounds();
                        //  Go through each...
                        jQuery.each(markers, function (index, marker) {
                            bounds.extend(marker.position);
                        });
                        // Fit these bounds to the map
                        map.setCenter( bounds.getCenter( )); 
                        map.fitBounds(bounds);
                    }
                    Instaapp_AutoCenter();
	
                    zoomChangeBoundsListener = google.maps.event.addListenerOnce(map, 'bounds_changed', function(event) {
                        if (this.getZoom()){
                            this.setZoom(4);
                        }
                    });
                    setTimeout(function(){google.maps.event.removeListener(zoomChangeBoundsListener)}, 1000);
	
                    google.maps.event.addDomListener(window, "resize", function() {
                        var center = map.getCenter();
                        google.maps.event.trigger(map, "resize");
                        map.setCenter(center); 
                    });

                </script> 
            </div>
		</div>
	</div>
	<!-- Address Wrapper -->

	<!-- Address Wrapper -->
</div><!-- contact-page -->
	<div class="clearfix"></div>
</div>




<?php 

get_footer();

?>