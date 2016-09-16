
        <?php $this->renderFeedbackMessages(); ?>
      <!-- Main Wrapper -->
<div class="wrapper">
    <div class="container">
          
      
      
        <div class="row margin-bottom-0">
            <div class="col l9 m12">
                <div class="row">
                    <div class="col l8 col m12 col s12">
                        <!-- News Blog Box -->
                        <div class="news-blog z-depth-1">
                            <!-- News Blog Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image" class="responsive-img">
                            </div>
                            <!-- News Blog Category -->
                            <div class="news-category">
                                <span class="green">Money</span>
                                <!-- Dropdown -->
                                <div class="news-dropdown">
                                    <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown1"><i class="fa fa-ellipsis-v "></i></a>
                                    <ul id="dropdown1" class="dropdown-content">
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                        <li><a href="javascript:void(0);">Option 1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- News Blog Description -->
                            <div class="news-description">
                                <div class="news-time">
                                  
                                    21 min ago
                                </div>
                                <div class="news-title"> <a href="javascript:void(0)">Party Sweepsto Israel <br> election Victory</a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus <br> ac tellus non rutrum. Integer.</p></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <?php // foreach ($this->cards as $card) :   ?>
                    <div class="col l4 col m12 col s12">
                        <!-- vertical News Box -->
                        <div class="news vertical z-depth-1">
                            <!-- vertical News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                            </div>
                            <!-- vertical News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 
                                        <?php // echo '<span>'.$card->card_date_created.'</span>';?>     
                                </div>
                                <div class="news-title"> <a href="javascript:void(0)">
                                    
                         
                                 
                                 </a></div>
                                <div class="news-content"><p> <?php // echo '<span>'.$card->card_caption.'</span>';?>   </p></div>
                            </div>
                        </div>
                    </div>
                    <?php  //  endforeach; ?>
                    
                    
                    
                </div>

                <div class="row">
                    <div class="col l8 col m12 col s12">
                        <div class="z-depth-1">
                            <!-- horizontal News Box -->
                            <div class="news horizontal">
                                <div class="col l4 col m4 col s12 no-padding">
                                    <!-- horizontal News Image -->
                                    <div class="news-image">
                                        <img alt="news Image" class="responsive-img" src="http://placehold.it/350x360?text=News Image">
                                    </div>
                                </div>
                                <div class="col l8 col m8 col s12 no-padding">
                                    <!-- horizontal News  Description -->
                                    <div class="news-description">
                                        <div class="news-time">
                                            <i class="fa fa-clock-o"></i> 9 min ago
                                        </div>
                                        <div class="news-title"><a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- horizontal News Box -->
                            <div class="news horizontal no-border">
                                <div class="col l4 col m4 col s12 no-padding">
                                    <!-- horizontal News Image -->
                                    <div class="news-image">
                                        <img alt="news Image" class="responsive-img" src="http://placehold.it/350x360/f5f5f5?text=News Image">
                                    </div>
                                </div>
                                <div class="col l8 col m8 col s12 no-padding">
                                    <!-- horizontal News Description -->
                                    <div class="news-description">
                                        <div class="news-time">
                                            <i class="fa fa-clock-o"></i> 9 min ago
                                        </div>
                                        <div class="news-title"><a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col l4 col m12 col s12">
                        <!-- vertical News Box -->
                        <div class="news vertical z-depth-1">
                            <!-- vertical News Image -->
                            <div class="news-image">
                                <img alt="news Image" class="responsive-img" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- vertical News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col l3 m12 s12 no-padding">
                <!-- Average Box -->
                <div class="average">
                    <div class="col l6 m3 s6">
                        <div class="average-box">
                            <div class="top">
                                <div class="average-symbol"><i class="fa fa-usd"></i></div>
                                <div class="average-name">Usd</div>
                            </div>
                            <div class="bottom">
                                <div class="average-value">26.00 <i class="fa fa-caret-down"></i></div>
                                <div class="average-point">-1.03</div>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m3 s6">
                        <div class="average-box">
                            <div class="top">
                                <div class="average-symbol"><i class="fa fa-eur"></i></div>
                                <div class="average-name">Eur</div>
                            </div>
                            <div class="bottom">
                                <div class="average-value">28.88 <i class="fa fa-caret-down"></i></div>
                                <div class="average-point">-1.43</div>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m3 s6">
                        <div class="average-box third">
                            <div class="top">
                                <div class="average-symbol grey darken-3"><i class="fa fa-tint  grey darken-3"></i></div>
                                <div class="average-name">oil</div>
                            </div>
                            <div class="bottom">
                                <div class="average-value">46.75<i class="fa fa-caret-up"></i></div>
                                <div class="average-point">+1.25</div>
                            </div>
                        </div>
                    </div>
                    <div class="col l6 m3 s6">
                        <div class="average-box fourth">
                            <div class="top">
                                <div class="average-symbol"><i class="fa fa-usd"></i></div>
                                <div class="average-name">Rain</div>
                            </div>
                            <div class="bottom">
                                <div class="average-value">+12 </div>
                                <div class="average-point">New york</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l12 col m12 col s12">
                    <!-- Sidebar -->
                    <div class="sidbar-box z-depth-1">
                        <div class="sidebar-title">Top Stories</div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> 5 Things you Need To Know Wenesday</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Auti-austeriry Protest Turns Violent In Germany</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Flying Cars: The near Future, From SXSW</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">No end in Signt for California Drought</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Boehner Coup by Conservatives.</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Market Reaction to fed rate talk: 3 scenarious</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">fed deny visas for 'Specialized' foreign workers</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Flying Cars: The near Future.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


  <!-- Map creation is here -->
        <script type="text/javascript">
              //Defining map as a global variable to access from other functions
              var map;

			  //define global marker popup variable
			  var popup;

			  //define global geocoder object
			  var geocoder;

			  //define global markers array
			  var markers;

			  //define global DirectionsService object
			  var directionsService;

			  //define global DirectionsRenderer object
			  var directionsRenderer;

              function initMap() {
					//initialize info popup window
					popup = new google.maps.InfoWindow();

					//initialize geocoder object
					geocoder = new google.maps.Geocoder();

					//initialize markers array
					markers = [];

					//initialize directionsService object
					directionsService = new google.maps.DirectionsService();

					//initialize directionsRenderer object
					directionsRenderer = new google.maps.DirectionsRenderer();

					//Enabling new cartography and themes
                    google.maps.visualRefresh = true;

                    //Setting starting options of map
                    var mapOptions = {
                          center: new google.maps.LatLng(39.9078, 32.8252),
                          zoom: 10,
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    //Getting map DOM element
                    var mapElement = document.getElementById("MapDiv");

                    //Creating a map with DOM element which is just obtained
                    map = new google.maps.Map(mapElement, mapOptions);

					//directionsRenderer will draw the directions on current map
					directionsRenderer.setMap(map);
					//directionsRenderer will list the textual description of the directions
					//on directionsDiv HTML element
					directionsRenderer.setPanel(document.getElementById('DirectionsListDiv'));
				}

				//put a marker in the map and attach a infowindow to display its details
				function pinpointResult(result) {
					var marker = new google.maps.Marker({
						map: map,
						position: result.geometry.location,
						zIndex: -10
					});

					map.setCenter(result.geometry.location);
					map.setZoom(16);

					//infowindow stuff
					google.maps.event.addListener(marker, 'click', function() {
						//debugger;
						var popupContent = '<b>Address: </b> ' + result.formatted_address;
						popup.setContent(popupContent);
						popup.open(map, this);
					});

					markers.push(marker);
				}

				//function for listing addresses on the addressList HTML element
				function listAddresses()
				{
					//get text input handler
					var addressField = document.getElementById('addressField');
					//get addressList <ul> element handle
					var addressList = document.getElementById('addressList');
					if (addressList.children.length == 0)
					{
						var placesText = document.getElementById('placesText');
						placesText.innerHTML = 'Places You Have Visited (Click on the place name to see on map):';
					}
					//create a list item
					var listItem = document.createElement('li');
					//get the text in the input element and make it a list item
					listItem.innerHTML = addressField.value;
					listItem.addEventListener('click', function(){
						pinAddressOnMap(listItem.innerHTML);
					});
					//append it to the <ul> element
					addressList.appendChild(listItem);

					//call the geocoding function
					pinAddressOnMap(addressField.value);

					if (addressList.children.length > 1)
					{
						//get getDirectionsBtn button handler
						var getDirectionsBtn = document.getElementById('getDirectionsBtn');
						//enable the getDirectionsBtn
						getDirectionsBtn.disabled = false;
					}

					addressField.value = '';
				}

				//function for geocoding the addresses
				function pinAddressOnMap(addressText)
				{
					//real essence, send the geocoding request
					geocoder.geocode({ 'address': addressText}, function(results, status) {
      					//if the service is working properly...
      					if (status == google.maps.GeocoderStatus.OK) {
        					//show the first result on map
        					pinpointResult(results[0]);
      					} else {
        					alert('Cannot geocode because: ' + status);
      					}
    				});
				}

				//function for sending the request to the directionsService and making the
				//results to be drawn on map and listed:
				function getDirections()
				{
					//define an array that will hold all the waypoints
					var waypnts = [];
					//define an directionsRequest object
					var directionRequest;

					//debugger;

					//if there are stops other than the origin and the final destination
					if (markers.length > 2)
					{
						for (var i=1, l=markers.length;i<=l-2;i++)
						{
							//add them to the waypnts array
							waypnts.push({
								location: markers[i].getPosition(),
								stopover: true
							});
						}

						//prepare the directionsRequest by including waypoints property
						directionRequest = {
							origin:markers[0].getPosition(),
							destination:markers[markers.length-1].getPosition(),
							waypoints: waypnts,
							travelMode: google.maps.TravelMode.DRIVING
						};
					}
					else
					{
						//this time, do not include waypoints property as there is no waypoints
						directionRequest = {
							origin:markers[0].getPosition(),
							destination: markers[markers.length-1].getPosition(),
							travelMode: google.maps.TravelMode.DRIVING
						};
					}

					//send the request to the directionsService
					directionsService.route(directionRequest, function(result, status) {
						if (status == google.maps.DirectionsStatus.OK) {
							directionsRenderer.setDirections(result);
						}
						else
						{
							alert('Cannot find directions because: ' + status);
						}
					});
				}

        </script>
   
    <body onload="initMap()">
    	<div id="ContainerDiv">
			<div id="MapContainerDiv">
				<b>Directions</b>
				<div id="MapDiv">
				</div>
			</div>
			<div id="DirectionsContainerDiv">
				<div id="PlacesContainerDiv">
					<b>Get Directions Between your Places</b></br>
					<input id="addressField" type="text" size="30"  placeholder="Enter your Address" />
					<input type="button" id ="pinAddressOnMapBtn" value="Pin Address On Map" onclick="listAddresses()" />
					<input type="button" id = "getDirectionsBtn" disabled value="Get Directions" onclick="getDirections()" />
					<p id="placesText"></p>
					<ul id="addressList" class="addressList">
					</ul>
				</div>
				<div id="DirectionsListContainerDiv">
					<div id="DirectionsListDiv">
					</div>
				</div>
			</div>
    	</div>
    </body>
    
    
    
    
    
      <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
          
          
          
          
          
          
          
          
        <div class="row">
            <div class="col l12 m12 s12">
                <div class="title">Sport</div>
            </div>
            <div class="col l6 col m12 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Image -->
                    <div class="image">
                        <img alt="news Image" src="http://placehold.it/350x235?text=News Image" class="responsive-img">
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="green">Money</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown2"><i class="fa fa-ellipsis-v "></i></a>
                            <ul id="dropdown2" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <div class="news-time">
                            21 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0)">Party Sweepsto Israel <br> election Victory</a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus <br> ac tellus non rutrum. Integer.</p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m12 col s12">
                <!-- vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- vertical News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!--  vertical News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"><a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. et bibendum leo metus vel magna.</p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m12 col s12">
                <!-- vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- vertical News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- vertical News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum et bibendum leo metus vel magna ac tellus non rutrum Integer.</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l3 col m12 col s12">
                <!-- vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- vertical News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!--  vertical News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"><a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. et bibendum leo metus vel magna .</p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m12 col s12">
                <!-- vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- vertical News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- vertical News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum et bibendum leo metus vel magna ac tellus non rutrum Integer.</p></div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m12 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Image -->
                    <div class="image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="green">Money</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown3"><i class="fa fa-ellipsis-v "></i></a>
                            <ul id="dropdown3" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <div class="news-time">
                            21 min ago
                        </div>
                        <div class="news-title"> <a href="#">Party Sweepsto Israel <br> election Victory</a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus <br> ac tellus non rutrum. Integer.</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l6 col m12 col s12">
                <!-- News Blog Solid Box -->
                <div class="news-blog solid z-depth-1">
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="pink">More</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown4"><i class="fa fa-ellipsis-v "></i></a>
                            <ul id="dropdown4" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description center-align">
                        <div class="quote"><i class="fa fa-quote-left"></i></div>
                        <div class="news-title"> <a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna et bibendum leo metus vel magna.  </a></div>
                        <div class="news-content"><p>President of ThemeLeague <br> Dark Waider</p></div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m12 col s12">
                <!-- News Blog Box -->
                <div class="news-blog white z-depth-1">
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <div class="news-time">
                            33 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus.</a></div>
                        <div class="news-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat velit, tristique eu molestie vitae, malesuada eget est. Vestibulum ut aliquam libero. Nunc nec risus dolor. Aliquam pellentesque eget lectus vel lobortis. Donec gravida nec tortor ac semper. Aliquam dapibus dolor et metus feugiat porta. Sed in mauris lorem. Quisque ultrices nulla dui. Praesent sollicitudin consectetur tincidunt.</p>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In lobortis dignissim eros sed convallis. Donec et quam eros. Suspendisse a enim sit amet nisl accumsan malesuada. Maecenas sodales velit at molestie blandit. Nullam maximus tellus ante, vitae finibus lorem luctus vel. Quisque auctor nibh et lacus Aliquam dapibus dolor et metus feugiat porta. Sed in mauris lorem. Quisque ultrices nulla dui. Praesent sollicitudin consectetur tincidunt nibh et lacus Aliquam dapibus dolor et metus feugiat porta. Sed in mauris lorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l12 col m12 col s12">
                <div class="title">Cars</div>
            </div>
            <div class="col l3 col m6 col s12">
                <div class="col l12 col m12 col s12 no-padding">
                    <!-- vertical News Box -->
                    <div class="news vertical z-depth-1 margin-bottom-20">
                        <!-- vertical News Image -->
                        <div class="news-image">
                            <img alt="news Image" class="responsive-img" src="http://placehold.it/350x235?text=News Image">
                        </div>
                        <!-- vertical News Description -->
                        <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. et bibendum leo metus vel magna. In dapibus ac tellus</p></div>
                        </div>
                    </div>
                </div>
                <div class="col l12 col m12 col s12 no-padding">
                    <!-- vertical News Box -->
                    <div class="news vertical z-depth-1">
                        <!-- vertical News Image -->
                        <div class="news-image">
                            <img alt="news Image" class="responsive-img" src="http://placehold.it/350x235?text=News Image">
                        </div>
                        <!-- vertical News Description -->
                        <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. et bibendum leo metus vel magna. In dapibus ac telluset bibendum leo metus vel magna. </p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m6 col s12">
                <!-- vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- vertical News Image -->
                    <div class="news-image">
                        <img alt="news Image" class="responsive-img" src="http://placehold.it/350x236?text=News Image">
                    </div>
                    <!-- vertical News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title large-font"><a href="javascript:void(0)"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                        <div class="news-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat velit, tristique eu molestie vitae, malesuada eget est. Vestibulum ut aliquam libero. Nunc nec risus dolor. Aliquam pellentesque eget lectus vel lobortis. Donec gravida nec tortor ac semper. Aliquam dapibus dolor et metus feugiat porta. Sed in mauris lorem. Quisque ultrices nulla dui. Praesent sollicitudin consectetur tincidunt.</p>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In lobortis dignissim eros sed convallis. Donec et quam eros. Suspendisse a enim sit amet nisl accumsan malesuada. Maecenas sodales velit at molestie blandit. Nullam maximus tellus ante, vitae finibus lorem luctus vel. Quisque auctor nibh et lacus rhoncus, eu tincidunt massa volutpat. Pellentesque habita Aliquam erat volutpat. In viverra interdum metus, sed hendrerit ex cursus a. Morbi suscipit ligula vel leo facilisis finibus. ac semper. Aliquam dapibus dolor et metus feugiat porta. Sed in mauris lorem. Quisque ultrices nulla dui. Praesent sollicitudin consectetur tincidunt.  </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col l3 col m12 col s12">
                <!-- News Sidebar -->
                <div class="sidbar-box z-depth-1">
                    <div class="sidebar-title">New Stories</div>
                    <div class="news-sidebar">
                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>

                        <div class="news-box">
                            <!-- News Sidebar Image -->
                            <div class="image">
                                <img alt="news Image" src="http://placehold.it/350x235?text=News Image">
                            </div>
                            <!-- News Sidebar Detail -->
                            <div class="news-detail">
                                <!-- News Sidebar Category -->
                                <div class="news-category">
                                    <a href="javascript:void(0)">World | 21 min ago </a>
                                </div>
                                <!-- News Sidebar Title -->
                                <div class="news-title">
                                    <a href="javascript:void(0)"> 5 things you need to know wenesday</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
