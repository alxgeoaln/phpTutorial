<?php
 $path = 'dir0/dir1/myFile.php';
 $file = 'file1';
 #filename
// echo basename($path);

 #return filename without exteninsion
// echo basename($path, '.php');

//Return the dir name from path
//echo dirname($path);

//echo file_exists($file);

//Get absolut path
//echo realpath($file);

#check to see if file
//echo is_file($file);

//Check if writeable
//echo is_writable($file);

//Get file size
//echo filesize($file);

// create a dir
//mkdir('testing');

//rm dir if empty
//rmdir('testing');

//Copy file
//echo copy($file, 'file2.txt');

//rename('file2.txt', 'myfile.txt');

//delete file
//unlink('myfile.txt');

//Write from file to string
//echo file_get_contents($file);

//Write string to file
//echo file_put_contents($file,'papa' );

//$current = file_get_contents($file);
//$current .= ' Goodby';
//file_put_contents($file, $current);

