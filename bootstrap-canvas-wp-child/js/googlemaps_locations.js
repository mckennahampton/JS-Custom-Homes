
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.

function initMap() {

    var locations = [
	  ['Twin Bridges', 35.706381, -97.471978, 1, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading"><span style="color:red;">New Addition</span>: Twin Bridges</h2>'+
	  '</div>',],
	  ['Hutton', 35.696206, -97.463890, 2, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading"><span style="color:red;">New Addition</span>: Hutton</h2>'+
	  '</div>',],
      ['Hunter\'s Creek - Creek Spur Road', 35.691265, -97.502282, 3, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Hunter\'s Creek</h2>'+
	  '<div id="bodyContent">'+
	  '<p>3408 Creek Spur Road, Edmond, OK</p>'+
	  '</div>'+
	  '</div>',],
      ['Kingsbury Ridge', 35.680509, -97.544301, 4, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Kingsbury Ridge</h2>'+
	  '<div id="bodyContent">'+
	  '<p>4301, 4233, 4225, 4217, 4209 Norfolk Court, Edmond, OK</p>'+
	  '</div>'+
	  '</div>',],
      ['Villagio', 35.6787907, -97.5357643, 5, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Villagio</h2>'+
	  '<div id="bodyContent">'+
	  '<p>4393 & 4401 Blackthorn Drive, Edmond, OK - Deer Creek Schools</p>'+
	  '</div>'+
	  '</div>',],
      ['The Lake at Chitwood Farms', 35.63486, -97.349599, 6, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">The Lake at Chitwood Farms</h2>'+
	  '<div id="bodyContent">'+
	  '<p>10108 Chitwood Farms Road, Edmond, OK</p>'+
	  '</div>'+
	  '</div>',],
      ['2916 Lakeshire Ridge Ct, Edmond, OK', 35.688251, -97.429983, 7, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Fairfax</h2>'+
	  '<div id="bodyContent">'+
	  '<p>2916 Lakeshire Ridge Way, Edmond, OK</p>'+
	  '</div>'+
	  '</div>',],
	  ['13509 Raintree Ln, Edmond, OK', 35.607814, -97.400192, 8, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Raintree</h2>'+
	  '<div id="bodyContent">'+
	  '<p>13509 Raintree Lane, Edmond, OK</p>'+
	  '</div>'+
	  '</div>',],
	  ['1309 Pembroke Dr, Edmond, OK', 35.677066, -97.501202, 9, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Pembroke at Covell Village</h2>'+
	  '<div id="bodyContent">'+
	  '<p>1309 Pembroke Drive, Edmond, OK</p>'+
	  '</div>'+
	  '</div>',],
	  ['7800 E Sorghum Mill Rd, Arcadia, OK', 35.710920, -97.381348, 9, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Solidago Ranch Estates</h2>'+
	  '<div id="bodyContent">'+
	  '<p>7800 E Sorghum Mill Rd, Arcadia, OK</p>'+
	  '</div>'+
	  '</div>',],
	  ['Turnberry at Oak Tree and Cypress Point, Edmond, OK', 35.718975, -97.492943, 9, '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Turnberry at Oak Tree and Cypress Point</h2>'+
	  '<div id="bodyContent">'+
	  '<p>Turnberry at Oak Tree and Cypress Point, Edmond, OK</p>'+
	  '</div>'+
	  '</div>',]
    ];

    
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: new google.maps.LatLng(35.667289, -97.424984),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

  var infowindow = new google.maps.InfoWindow();

   var marker, i;
   
   google.maps.event.addListener(map, 'click', function() {
            infowindow.close();
        });

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });
	       google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
	  console.log('Klick! Marker=' + this.content);
          infowindow.setContent(locations[i][4]);
          infowindow.open(map, marker);
        }
     })
	  
(marker, i, infowindow));
	  
	  
	  

    }
}

