#!/usr/bin/php -q
<?php
chdir("/home/webcamed/public_html/webcam/31");
if ($handle = opendir('.')) {
while (false !== ($file = readdir($handle))) {
if ($file != "." && $file != ".." && preg_match("/jpg$/",$file) && $file !="webcam.jpg") {
rename($file, 'webcam.jpg');
}
}
closedir($handle);
} 
?>


