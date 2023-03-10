var MY_MAPTYPE_ID = 'roadmap';
var project_latitude = $('.listing-title-area').attr('data-project-latitude');
var project_longitude = $('.listing-title-area').attr('data-project-longitude');
function initialize() {
  var featureOpts = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#666666"
            }
        ]
    },
    {
    "featureType": 'all',
    "elementType": 'labels',
    "stylers": [
            { visibility: 'simplified' }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#e2e2e2"
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
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#aadaff"
            },
            {
                "visibility": "on"
            }
        ]
    }
];
  var myGent = new google.maps.LatLng(project_latitude,project_longitude);
  var Kine = new google.maps.LatLng(project_latitude,project_longitude);
  var mapOptions = {
    zoom: 15,
    mapTypeControl: true,
    zoomControl: true,
    zoomControlOptions: {
        style: google.maps.ZoomControlStyle.SMALL,
        position: google.maps.ControlPosition.LEFT_TOP,
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
    mapTypeId: MY_MAPTYPE_ID,
    scaleControl: false,
    streetViewControl: false,
    center: myGent
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  var styledMapOptions = {
    name: 'style_KINESB'
  };

var image = '/assets/images/resource/mapmarker.png';
  var marker = new google.maps.Marker({
      position: Kine,
      map: map,
animation: google.maps.Animation.DROP,
      title: 'B4318, Gumfreston SA70 8RA, United Kingdom',
icon: image
  });

  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

}
google.maps.event.addDomListener(window, 'load', initialize);
