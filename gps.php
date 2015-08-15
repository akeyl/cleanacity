<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>iPhone 4.0 geolocation demo</title>
<meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport"/>
<script>
function handler(location) {
var message = document.getElementById("message");
message.innerHTML ="<img src='http://maps.google.com/maps/api/staticmap?center=+AUBURN+WA+98001&amp;zoom=14&amp;size=400x400&amp;sensor=false'>";


message.innerHTML+="<p>Longitude: " + location.coords.longitude + "</p>";
message.innerHTML+="<p>Accuracy: " + location.coords.accuracy + "</p>";
message.innerHTML+="<p>Latitude: " + location.coords.latitude + "</p>";



document.getElementById('longitude').innerHTML = location.coords.longitude;
document.getElementById('latitude').innerHTML = location.coords.latitude;

}
navigator.geolocation.getCurrentPosition(handler);
</script>
</head>
<body>
<div id="message">Location unknown</div>

<label id="longitude"/>
<label id="latitude"/>

</body>
</html>