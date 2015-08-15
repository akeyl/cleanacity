<?php

if (isset($_POST['add'])) {

$date = time();

if (isset ($_FILES['new_image'])){
$imagename = $_FILES['new_image']['name'];

if (strstr($imagename,'.png') or strstr($imagename,'.gif') or strstr($imagename,'.psd') or strstr($imagename,'.tiff') or ($imagename == "")) {
echo 'no image was selected';
} else {

	$source = $_FILES['new_image']['tmp_name'];
	$target = "uploads/".$imagename;
	move_uploaded_file($source, $target);
 
	$imagepath = $imagename;
	$save = "uploads/" . $date . "_200.jpg"; //This is the new file you saving
	$file = "uploads/" . $imagepath; //This is the original file
 
	list($width, $height) = getimagesize($file); 
 
	$modwidth = 400; 
 
	$diff = $width / $modwidth;
 
	$modheight = $height / $diff; 
	$tn = imagecreatetruecolor($modwidth, $modheight); 
	$image = imagecreatefromjpeg($file); 
	imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height); 

	imagejpeg($tn, $save, 100);



}
}

}

?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.5, maximum-scale=1">
<script>
function handler(location) {
var message = document.getElementById("message");
 

document.getElementById('getlon'). value = location.coords.longitude;
document.getElementById('getlat').value = location.coords.latitude;
}

navigator.geolocation.getCurrentPosition(handler);

</script>
<style>
body { background-color: #f5f5f5;}
.post { width: 320px; border-collapse: collapse; margin-bottom: 10px;}
.post th { font-family: Roboto, sans-serif; font-size: 12px; color: #333; background-color: #f5f5f5; border: 1px solid #eee; padding: 5px; }
.post td {  font-family: Georgia, Arial, Garamond; font-size: 10pt; color: #666; padding: 5px; border: 1px solid #eee; background-color: #fff; }
ol { list-style-type: circle; }


.mask{
    width:200px;
    height:200px;
    background-image:url('vote.png');
    position:absolute;
    z-index:1;
}


.imagediv{
    position:absolute;
    z-indez:0;
}
.frame {
	width: 100%;
	background-color: #eee;
}
</style>
</head>
<body>

<table width="100%" class="frame">
<tr>
<form action="" method="post" enctype="multipart/form-data" >
<td>
Select Photo


<input name="new_image" id="new_image" size="30" type="file" class="file">

</td>
</tr>

<tr>
<td>
<?php include "category.php" ?>
</td>
</tr>

<tr>
<td><input type="text" id="getlon" value="" width="100%" DISABLED></td>
</tr>

<tr>
<td><input type="text" value="" id="getlat" placeholder="" width="100%" DISABLED></td>
</tr>

<tr>
<td><input type="submit" name="add" value="add"></form></td>
</tr>
</table>


<table>
<tr>
<td><a href="search.php">search</a></td>
<td><a href="gps.php">gps</a></td>
<td><a href="login.php">login</a></td>
<td><a href="singup.php">signup</a></td>
</tr>
</table>




</body>
</html>

