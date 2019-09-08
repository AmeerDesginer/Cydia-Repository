<?php



$deb = $_GET['deb'];

$path = "api/debs/$deb"; 

// get file deb 
$file1 = basename($path); 
$file2 = basename($path, ".php"); 
// Get SHA1 type
$sha1file = sha1_file($path);
// Get SHA256 type
$sha256 = hash_file("sha256", $path);


echo 'File name: '. $file1 .' <br>';
// Get MD5 type
echo 'MD5 file: ' . md5_file($path).' <br>';

// Get size file bytes
echo 'File size: ' . filesize($path) . ' bytes <br>';
echo 'SHA1 file: ' . $sha1file . '<br>';
echo 'SHA256 file: ' . $sha256 . '<br>';


?>

