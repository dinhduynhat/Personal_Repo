var map;
var ib = new InfoBox();
function initialize(lat,longi,addres)
{	
	var myLatlng = new google.maps.LatLng(lat,longi);
	
	var myOptions = {
	zoom: 5,
	center: myLatlng,
	scrollwheel: false,
	disableDefaultUI: false,         
	zoomControl: true, 
	zoomControlOptions: { 
	style: google.maps.ZoomControlStyle.DEFAULT, 
	position: google.maps.ControlPosition.LEFT_BOTTOM 
	},  
	mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	map = new google.maps.Map(document.getElementById("map_details"), myOptions);
	var marker = new google.maps.Marker({
		position: myLatlng,          
		map: map,
		title:"Customer",
		animation: google.maps.Animation.DROP,
		icon:"images/google-marker-red.png"
	});
	google.maps.event.addListener(map, 'click', function() {
		ib.close();
	});
	google.maps.event.addListener(marker, "click", function(e) {                  
	var cus_ad = '<div class="adsnav"><table border="0" cellpadding="0" cellspacing="0"><tr><td><h4 style="line-height:24px;">' + addres + '</h5></td></tr>' + '</table></div>'; 
	var addd = {
		content: cus_ad 
		,disableAutoPan: false
		,maxWidth: 150
		,pixelOffset: new google.maps.Size(-150, 0)
		,zIndex: null
		,/*boxStyle: { 
		background: "url('tipbox.gif') no-repeat"
		,opacity: 1.5
		,width: "50px"
	}
	,*/closeBoxMargin: "10px 2px 2px 2px"
	,closeBoxURL: ""
	,infoBoxClearance: new google.maps.Size(1, 1)
	,isHidden: false
	,pane: "floatPane"
	,enableEventPropagation: false                       
	};        
	ib.close();
	ib.setOptions(addd);
	ib.open(map, this);    
	});
}
var autocomplete = new google.maps.places.Autocomplete($("#map_search")[0], {});
	google.maps.event.addListener(autocomplete, 'place_changed', function() {
		var place = autocomplete.getPlace();
		console.log(place.address_components);
	});

initialize('24.266906','45.1078489','Saudi Arabia');