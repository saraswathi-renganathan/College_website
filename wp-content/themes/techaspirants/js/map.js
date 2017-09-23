// function initMap() { var e, t = [
//             [12.97104, 80.221535, "hakunamatata Head office"],
//             [, ""]
//         ],
//         e = new google.maps.Map(document.getElementById("map"), { zoom: 10, scrollwheel: !1, streetViewControl: !1, mapTypeControl: !1, styles: [{ featureType: "water", elementType: "geometry", stylers: [{ color: "#e9e9e9" }, { lightness: 17 }] }, { featureType: "landscape", elementType: "geometry", stylers: [{ color: "#f5f5f5" }, { lightness: 20 }] }, { featureType: "road.highway", elementType: "geometry.fill", stylers: [{ color: "#ffffff" }, { lightness: 17 }] }, { featureType: "road.highway", elementType: "geometry.stroke", stylers: [{ color: "#ffffff" }, { lightness: 29 }, { weight: .2 }] }, { featureType: "road.arterial", elementType: "geometry", stylers: [{ color: "#ffffff" }, { lightness: 18 }] }, { featureType: "road.local", elementType: "geometry", stylers: [{ color: "#ffffff" }, { lightness: 16 }] }, { featureType: "poi", elementType: "geometry", stylers: [{ color: "#f5f5f5" }, { lightness: 21 }] }, { featureType: "poi.park", elementType: "geometry", stylers: [{ color: "#dedede" }, { lightness: 21 }] }, { elementType: "labels.text.stroke", stylers: [{ visibility: "on" }, { color: "#ffffff" }, { lightness: 16 }] }, { elementType: "labels.text.fill", stylers: [{ saturation: 36 }, { color: "#333333" }, { lightness: 40 }] }, { elementType: "labels.icon", stylers: [{ visibility: "off" }] }, { featureType: "transit", elementType: "geometry", stylers: [{ color: "#f2f2f2" }, { lightness: 19 }] }, { featureType: "administrative", elementType: "geometry.fill", stylers: [{ color: "#fefefe" }, { lightness: 20 }] }, { featureType: "administrative", elementType: "geometry.stroke", stylers: [{ color: "#fefefe" }, { lightness: 17 }, { weight: 1.2 }] }] }),
//         l = new google.maps.LatLngBounds,
//         o = new google.maps.InfoWindow; for (var s in t) { var r = t[s],
//             f = new google.maps.LatLng(r[0], r[1]);
//         l.extend(f); var a = new google.maps.Marker({ position: f, map: e, title: r[2] });
//         google.maps.event.addListener(a, "click", function() { o.setContent(this.title), o.open(e, this) }) } e.fitBounds(l), google.maps.event.addDomListener(window, "load", initMap) }


 var map;
      function initMap() {
        var mapOptions = {
          zoom: 8,
          center: {lat: 11.435136, lng: 77.8797895}
        };
        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        var marker = new google.maps.Marker({
          // The below line is equivalent to writing:
          // position: new google.maps.LatLng(-34.397, 150.644)
          position: {lat: 11.435136, lng:  77.8797895},
          map: map
        });

 var infowindow = new google.maps.InfoWindow({
          content: '<p>Marker Location:' + marker.getPosition() + '</p>'
        });

 google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
      }

      google.maps.event.addDomListener(window, 'load', initMap);
