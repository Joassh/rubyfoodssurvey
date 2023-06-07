<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $shopOwner = $_POST['shopOwner'];
  $selection = $_POST['selection'];
  
  // Generate a unique file name for each shop owner
  $fileName = str_replace(' ', '_', strtolower($shopOwner)) . '_response.txt';
  
  // Save the response in a separate file
  $file = fopen($fileName, 'w');
  fwrite($file, $selection);
  fclose($file);
}
?>

