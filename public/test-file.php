<?php
$file = '/var/www/html/storage/test.txt';
if (file_put_contents($file, 'Testing file write') === false) {
    echo 'Failed to write to file.';
} else {
    echo 'File written successfully.';
}
?>
