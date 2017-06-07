var mapOptions= {
    center: {lat:40.7 , lng:-74},
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById('map'), mapOptions);

//create a DirectionService object to use the route method and get a result for our request.s

var directionsService = new google.maps.DirectionsService();

//Create a DirectionsRenderer object which we will use to display the route

var  directionsdisplay = new google.maps.DirectionsRenderer();

directionsdisplay.setMap(map);


//Function to get the routes
function calcRoute(){
    //creating a request
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING,  //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.METRIC
    }

    //pass the request to another function to get the routes.

    directionsService.route(request, function(result, status){
        if(status == google.maps.DirectionsStatus.OK){

            $("#output").html("<div class='back'><u>Driving Information</u><br />From: "+document.getElementById("from").value+"<br />To: "+document.getElementById("to").value+"<br />Distance: "+result.routes[0].legs[0].distance.text+"<br />Duration: "+result.routes[0].legs[0].duration.text+" </div>");

            //display route
            directionsdisplay.setDirections(result);
        }
        else{
            directionsdisplay.setDirections({routes: []});
            map.setCenter({lat:40.7 , lng:-74});
            $("#output").html("<div class='alert-danger'> Could not retrieve Driving Route or Driving Distance</div>");
        }
    });
}

//auto complete
var input1 = document.getElementById('from');
var input2 = document.getElementById('to');

var options = {
    types: ['(cities)']
}

var autocomplete1 = new google.maps.places.Autocomplete(input1, options);
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);