
// Google Maps API
var map;
function initMap() {
  var uluru = {lat: -41.321406, lng: -73.0138898};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

$ = jQuery.noConflict();

$(document).ready(function(){

  // Fluidbox Galeria de Imagenes


  jQuery('.gallery a').each(function(){
    jQuery(this).attr({'data-fluidbox' : ''});
  });

  if(jQuery('[data-fluidbox]').length > 0){
    jQuery('[data-fluidbox]').fluidbox();
  }

});
