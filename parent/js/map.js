

  function myMap() {

    var styledMapType = new google.maps.StyledMapType(

      [

    {

        "featureType": "administrative.province",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "administrative.locality",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "administrative.neighborhood",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "administrative.land_parcel",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "landscape",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "landscape.man_made",

        "elementType": "geometry.fill",

        "stylers": [

            {

                "color": "#e9e5dc"

            }

        ]

    },

    {

        "featureType": "landscape.natural",

        "elementType": "geometry.fill",

        "stylers": [

            {

                "visibility": "on"

            },

            {

                "color": "#b8cb93"

            }

        ]

    },

    {

        "featureType": "poi",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "off"

            }

        ]

    },

    {

        "featureType": "poi.attraction",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.business",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.business",

        "elementType": "geometry.fill",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.government",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.government",

        "elementType": "geometry.fill",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.medical",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.medical",

        "elementType": "geometry.fill",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.park",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.park",

        "elementType": "geometry.fill",

        "stylers": [

            {

                "color": "#ccdca1"

            }

        ]

    },

    {

        "featureType": "poi.park",

        "elementType": "labels.text.fill",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.place_of_worship",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.school",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "poi.sports_complex",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "road",

        "elementType": "all",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "road",

        "elementType": "geometry.fill",

        "stylers": [

            {

                "hue": "#ff0000"

            },

            {

                "saturation": -100

            },

            {

                "lightness": 99

            }

        ]

    },

    {

        "featureType": "road",

        "elementType": "geometry.stroke",

        "stylers": [

            {

                "color": "#808080"

            },

            {

                "lightness": 54

            },

            {

                "visibility": "off"

            }

        ]

    },

    {

        "featureType": "road",

        "elementType": "labels.text.fill",

        "stylers": [

            {

                "color": "#767676"

            }

        ]

    },

    {

        "featureType": "road",

        "elementType": "labels.text.stroke",

        "stylers": [

            {

                "color": "#ffffff"

            }

        ]

    },

    {

        "featureType": "transit.station.airport",

        "elementType": "labels.text.fill",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "transit.station.airport",

        "elementType": "labels.icon",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    },

    {

        "featureType": "water",

        "elementType": "all",

        "stylers": [

            {

                "saturation": 43

            },

            {

                "lightness": -11

            },

            {

                "color": "#89cada"

            }

        ]

    },

    {

        "featureType": "water",

        "elementType": "geometry",

        "stylers": [

            {

                "visibility": "on"

            }

        ]

    }

]



    );

    buildGoogleMap("googleMap",locations, styledMapType);

    if($("#contactGoogleMap").length > 0) {

        buildGoogleMap("contactGoogleMap",locations, styledMapType);

    }

}

  function buildGoogleMap(map,locations,styledMapType) {

    for (i = 0; i < icon.length; i++) { 

      icon[i].scaledSize = new google.maps.Size(50, 50);

       icon[i].origin = new google.maps.Point(0,0);

      icon[i].anchor = new google.maps.Point(0, 0);

    }

    var bounds = new google.maps.LatLngBounds();

    var infowindow = new google.maps.InfoWindow();

    var mapProp= {

        center:new google.maps.LatLng(51.508742,-0.120850),

        zoom:5,

        mapTypeId: google.maps.MapTypeId.ROADMAP

    };

    var map=new google.maps.Map(document.getElementById(map),mapProp);

    map.mapTypes.set('styled_map', styledMapType);

    map.setMapTypeId('styled_map');

    for (i = 0; i < locations.length; i++) {  

        console.log(locations[i][1] + "," + locations[i][2]);

      var marker = new google.maps.Marker({

        position: new google.maps.LatLng(locations[i][1], locations[i][2]),

        map: map,

        icon: icon[i]

      });

      bounds.extend(marker.position);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {

        return function() {

          infowindow.setContent(locations[i][0]);

          infowindow.open(map, marker);

        }

      })(marker, i));

        map.fitBounds(bounds);

        var listener = google.maps.event.addListener(map, "idle", function () {

            map.setZoom(15);

            google.maps.event.removeListener(listener);

        });

    }

  }