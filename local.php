<?php
include 'header.php';
?>

			<!-- Main -->
				<div id="main-wrapper">
					<div id="main" class="container">
						<div id="content">

							<!-- Post -->
								<article class="box post">
									<header>
										<h2>
                                            Onde Estamos
                                        </h2>
									</header>
									<span class="image featured"><img src="images/frente.jpg" alt="" /></span>
                                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                                    <div style='overflow:hidden;height:440px;width:700px;'>
                                        <div id='gmap_canvas' style='height:440px;width:700px;'>

                                        </div>
                                        <div><small><a href="http://embedgooglemaps.com">https://embedgooglemaps.com/pt/</a></small>
                                        </div><div><small>
                                                <a href="http://notariskosten.nu/hoe-kun-je-besparen-op-notariskosten/">How can you save money when buying a house? Check out here!</a>
                                            </small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}
                                        </style>
                                    </div>
                                    <script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(-16.49553766568931,-49.42763217242204),mapTypeId: google.maps.MapTypeId.SATELLITE};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-16.49553766568931,-49.42763217242204)});infowindow = new google.maps.InfoWindow({content:'<strong>Quality</strong><br>Quality Info, Rua 24, Qd. 25, Lt. 05, s/n - Setor Linda Vista, Goianira - GO, 75370-000<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</article>

						</div>
					</div>
				</div>

			<!-- Footer -->
<?php
include 'footer.php';
?>