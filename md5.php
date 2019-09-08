<?php



$deb = $_GET['deb'];

$path = "api/debs/$deb"; 


$file1 = basename($path); 
$file2 = basename($path, ".php"); 
$sha1file = sha1_file($path);
$sha256 = hash_file("sha256", $path);
//Show filename with file extension 
// echo $file1 . "\n"; 



//Show filename without file extension 
// echo $file2;


echo 'File name: '. $file1 .' <br>';
echo 'MD5 file: ' . md5_file($path).' <br>';

echo 'File size: ' . filesize($path) . ' bytes <br>';
echo 'SHA1 file: ' . $sha1file . '<br>';
echo 'SHA256 file: ' . $sha256 . '<br>';


// $zip = new ZipArchive;
// $res = $zip->open('api/debs/1.zip');
// if ($res === TRUE) {
//   $zip->extractTo('/debex/');
//   $zip->close();
//   echo 'woot!';
// } else {
//   echo 'doh!';
// }


?>

