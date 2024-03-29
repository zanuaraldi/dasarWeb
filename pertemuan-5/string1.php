<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed faucibus turpis. Nunc imperdiet tempus est, id euismod erat. Sed congue nisi mi, sit amet aliquet lorem gravida quis. Donec faucibus mi erat, non tristique magna tincidunt et.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: ". strlen($loremIpsum). "<br>";
echo "Panjang kata: ".str_word_count($loremIpsum)."<br>";
echo "<p>". strtoupper($loremIpsum)."</p>";
echo "<p>". strtolower($loremIpsum)."</p>";
?>