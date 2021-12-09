var mylatlng = {lat:40.7404, lng:-73.9832};
var mapOptions = {
    center: mylatlng,
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};


var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions)

//create direction service object to use the route method and get results

var directionService = new google.maps.DirectionsService();

var directionsDisplay = new google.maps.DirectionsRenderer();


directionsDisplay.setMap(map);


function calcRoute(){
    var request = {
        origin: mylatlng,
        destination: document.getElementById("address").value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }

    directionService.route(request, (result, status) =>{
        if (status == google.maps.DirectionsStatus.OK) {
            const output = document.querySelector('#output');
            output.innerHTML = "<div> To: " + document.getElementById("address").value + ". <br /> Driving distance:" + result.routes[0].legs[0].distance.text + ".<br />Duration: " + result.routes[0].legs[0].duration.text + ". </div>";
            

            directionsDisplay.setDirections(result);
        
        } else {
            directionsDisplay.setDirections({ routes: []});

            map.setCenter(mylatlng);


            output.innerHTML = "<div> Could not retrieve driving distance. </div>";
        }
    });



    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;

    document.getElementById("first").innerText = fname;
    document.getElementById("last").innerText = lname;
}


var options = {
    types: ['address']
}

var input = document.getElementById("address");

var autocomplete = new google.maps.places.Autocomplete(input, options)


