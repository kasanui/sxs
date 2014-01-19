<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CSV stuff</title>

</head>
<body>

<?PHP

$file_handle = fopen("SxSAlbums.csv", "r");

while (!feof($file_handle) ) {

$line_of_text = fgetcsv($file_handle, 1024);

print $line_of_text[0] . $line_of_text[1]. $line_of_text[2] . "<BR>";

}

fclose($file_handle);

?>
 
</body>
</html>