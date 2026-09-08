<?php

// CWE-22 - Path Traversal. The plus-one finding: user input joined to a base path.
$fileName = $_GET['file'];

$path = '/var/www/uploads/' . $fileName;
$contents = file_get_contents($path);

echo $contents;
