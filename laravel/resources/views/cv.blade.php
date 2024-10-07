<?php
$pdfPath = 'assets/cvlatest.pdf';
// Store the file name into variable
$file = 'assets/cvlatest.pdf';
$filename = 'assets/cvlatest.pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);