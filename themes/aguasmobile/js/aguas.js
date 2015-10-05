/**
 Para cargar páginas asíncronas
 * */
var map=null;
var view,marker;

function automatizar(){
	$('.linkpagina').click(function(){
		cargarPagina($(this).attr('href'));
		return false;
	});
	$('.sendonclick').click(function(){
		var objForm = $(this).parents('form').eq(0);
		if(objForm){
			
		}
		var objNext = objForm.find('.next');
		if(objNext!=""){
			var urlNext = objNext.eq(0).val();
			cargarPagina(urlNext);
		}
	});
	$('.linkayuda').click(function(){
		$('#help').modal();
	});
}

$(document).ready(function(){
	automatizar();
	$('#btnBack').click(function(){
		$('.pagina').last().remove();
		$('.pagina').last().css('display','block');
		if($('.pagina').length<=1){
			$('#btnBackArea').css('display','none');
		}
	});
	$('#btnBack2').click(function(){
		$('#btnBackArea2').css('display','none');
		$('#inicio1').css('display','block');
		$('#inicio2').css('display','none');
	});
	$('#btnMapa').click(function(){
		$('#btnBackArea2').css('display','block');
		$('#inicio1').css('display','none');
		$('#inicio2').css('display','block');
		if(map==null)
			crearMapa();
	});
});

function cargarPagina(url){
	$('#cargando').modal();
	$.post('index.php?r='+url,function(data){ 
		$('.pagina').css('display','none');
		$('#content').append(data);
		$('#btnBackArea').css('display','block');
		automatizar();
		$('#cargando').modal('hide');
	},'html');
}

function crearMapa(){
	view = new ol.View({
		  center: ol.proj.transform([-90.190436,15.485556], 'EPSG:4326', 'EPSG:3857'),
		  zoom: 11
		}); 
// creating the map
	map = new ol.Map({
	  layers: [
	    new ol.layer.Tile({
	      source: new ol.source.MapQuest({layer: 'sat'})
	    })
	  ],
	  target: 'mapa',
	  controls: ol.control.defaults({
	    attributionOptions: /** @type {olx.control.AttributionOptions}  */({
	      collapsible: false
	    })
	  }),
	  view: view
	});
	// Geolocation marker
	var markerEl = document.getElementById('geolocation_marker');
	marker = new ol.Overlay({
	  positioning: 'center-center',
	  element: markerEl,
	  stopEvent: false
	});
	map.addOverlay(marker);
// Listen to position changes
	var geolocation = new ol.Geolocation(/** @type {olx.GeolocationOptions} */({
	  projection: view.getProjection(),
	  trackingOptions: {
	    maximumAge: 10000,
	    enableHighAccuracy: true,
	    timeout: 600000
	  }
	}));
	geolocation.on('change', function(evt) {
	  var position = geolocation.getPosition();
	  var accuracy = geolocation.getAccuracy();
	  var heading = geolocation.getHeading() || 0;
	  var speed = geolocation.getSpeed() || 0;
	  var m = Date.now();
	  marker.setPosition(position);
	  /*var pan = ol.animation.pan({
	    duration: 2000,
	    source: /** @type {ol.Coordinate}  (view.getCenter())
	  });
	  map.beforeRender(pan);*/
	  view.setCenter(position);
	});
	geolocation.on('error',function(evt){
		alert('error');
	})
	geolocation.setTracking(true);
}

function mapaAmenazas(){
	
}

function dump(arr,level) {
	var dumped_text = "";
	if(!level) level = 0;
	
	//The padding given at the beginning of the line.
	var level_padding = "";
	for(var j=0;j<level+1;j++) level_padding += "    ";
	
	if(typeof(arr) == 'object') { //Array/Hashes/Objects 
		for(var item in arr) {
			var value = arr[item];
			
			if(typeof(value) == 'object') { //If it is an array,
				dumped_text += level_padding + "'" + item + "' ...\n";
				dumped_text += dump(value,level+1);
			} else {
				dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
			}
		}
	} else { //Stings/Chars/Numbers etc.
		dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
	}
	return dumped_text;
}
