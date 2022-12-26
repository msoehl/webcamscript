#!/usr/bin/php -q
<?php
// Your directory chdir("")
chdir("Your Path");
if ($handle = opendir('.')) {
while (false !== ($file = readdir($handle))) {
if ($file != "." && $file != ".." && preg_match("/jpg$/",$file) && $file !="webcam.jpg") {
// Set the new file name
rename($file, 'webcam.jpg');
}
}
closedir($handle);
} 
?>


