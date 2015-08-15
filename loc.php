<head>
<title>Get User Details IP Address, city, country, state, latitude, longitude </title>
<script src="http://code.jquery.com/jquery-1.8.2.js" type="text/javascript"></script>
<script type="text/javascript">
var strip, strcountry, strcity, strregion, strlatitude, strlongitude, strtimezone
function GetUserInfo(data) {
strip = data.host; strcountry = data.countryName; strcity = data.city;
strregion = data.region; strlatitude = data.latitude; strlongitude = data.longitude;
strtimezone = data.timezone;
}
$(function () {
BindUserInfo();
})
function BindUserInfo() {
document.getElementById('lblIP').innerHTML = strip;
document.getElementById('lblCountry').innerHTML = strcountry;
document.getElementById('lblCity').innerHTML = strcity;
document.getElementById('lblregion').innerHTML = strregion;
document.getElementById('lbllatitude').innerHTML = strlatitude;
document.getElementById('lbllongitude').innerHTML = strlongitude;
document.getElementById('lbltimezone').innerHTML = strtimezone;
}
</script>
<script type="text/javascript" src="http://smart-ip.net/geoip-json?callback=GetUserInfo"></script>
</head>
<body>
<div>
<table id="tbDetails" cellpadding="2" cellspacing="2" style=" border:1px solid #000; font-family:Verdana;" >
<tr style="background-color:#DC5807; color:White; font-weight:bold">
<td colspan="2" align="center">User Information</td>
</tr>
<tr style="border:solid 1px #000000">
<td align="right"><b>IP:</b></td>
<td><label id="lblIP"/></td>
</tr>
<tr>
<td align="right"><b>Country:</b></td>
<td><label id="lblCountry"/></td>
</tr>
<tr>
<td align="right"><b>City:</b></td>
<td><label id="lblCity"/></td>
</tr>
<tr>
<td align="right"><b>Region:</b></td>
<td><label id="lblregion"/></td>
</tr>
<tr>
<td align="right"><b>latitude:</b></td>
<td><label id="lbllatitude"/></td>
</tr>
<tr>
<td align="right"><b>Longitude:</b></td>
<td><label id="lbllongitude"/></td>
</tr>
<tr>
<td align="right"><b>Time Zone:</b></td>
<td><label id="lbltimezone"/></td>
</tr>
</table>
</div>
</body>
</html>