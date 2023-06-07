<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $text = $_POST['text'];
  $filename = 'saved_text.txt';

  $file = fopen($filename, 'w');
  fwrite($file, $text);
  fclose($file);
}
?>
