/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var map; 

function initialize() {
    var myLatlng = new google.maps.LatLng(38.2675064,-85.8483309);

    var mapOptions = {
        zoom: 12,
        center: myLatlng,                    
        mapTypeId: google.maps.MapTypeId.TERRAIN,
        zoomControl: true,
        styles: [
            {elementType: 'geometry', stylers: [{color: '#8C8C8C'}]},
                        {elementType: 'labels.text.stroke', stylers: [{color: '#040D63'}]},
                        {elementType: 'labels.text.fill', stylers: [{color: '#f2f2f2'}]},
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            }
        ]
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var marker = [];
    
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();
        
        if (places.length == 0) {
            return;
        }
        
        // clear out old markers
        markers.forEach(function(marker){
           marker.setMap(null); 
        });        
        marker = [];
        
        var bounds = new google.maps.LagLngBounds();
        places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };
            
            marker.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));
            
            if (place.geometry.viewport) {
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.viewport);
            }
        });
        map.fitBounds(bounds);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
