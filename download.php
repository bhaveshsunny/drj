<?php
$filename = "ARABICFLYER.pdf";

header("Content-Length: " . filesize(basename($filename)));
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="ARABICFLYER.pdf"');

readfile($filename);
/* $file="ARABICFLYER.pdf";
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="ARABICFLYER.pdf"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
@readfile($file); */
?>