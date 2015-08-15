<?

$filename = "flower.jpg";

if (file_exists($filename)) {
$exif = exif_read_data($filename, 0, true);
echo "File Name: ".$exif['FILE']['FileName']."<br>";
echo "File Size: ".$exif['FILE']['FileSize']."<br>";
echo "File Date Time: ".date ("F d Y H:i:s.",$exif['FILE']['FileDateTime']);
echo "File Mime Type: ".$exif['FILE']['MimeType']."<br>";
echo "Device Make: ".$exif['IFD0']['Make']."<br>";
echo "Device Model: ".$exif['IFD0']['Model']."<br>";
echo "Image Width: ".$exif['COMPUTED']['Width']."<br>";
echo "Image Height: ".$exif['COMPUTED']['Height']."<br>";
echo "Image Resolution: ".$exif['IFD0']['XResolution']."<br>";
echo "Image Orientation: ".$exif['IFD0']['Orientation']."<br>";
echo "Software Used: ".$exif['IFD0']['Software']."<br>";
echo "Date Edited: ".$exif['IFD0']['DateTime']."<br>";
echo "Original Created Date: ".$exif['EXIF']['DateTimeOriginal']."<br>";

$GPSLongitude = $exif['GPS']['GPSLongitude'];
$GPSLongitudeRef = $exif['GPS']['GPSLongitudeRef'];
$GPSLatitude = $exif['GPS']['GPSLatitude'];
$GPSLatitudeRef = $exif['GPS']['GPSLatitudeRef'];


//var_dump($exif['GPS']['GPSLongitude'])."<br>";

$get1 = implode(" ",$GPSLongitude);
$get2 = $exif['GPS']['GPSLongitudeRef']."<br>";

$get3 = $get1.$get2;

//echo implode(" ",$GPSLatitude);
//echo ", ".$exif['GPS']['GPSLatitudeRef'];


$onlyconsonants = str_replace("", "", $get3);
print $onlyconsonants;
}




?>