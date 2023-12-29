<?php

$url1 = 'https://raw.githubusercontent.com/mustafa13760806/v2ray/main/Matin'; // Replace with the URL you want to retrieve text from
$file1 = 'https://raw.githubusercontent.com/mustafa13760806/v2ray/main/File1.txt'; // Replace with your GitHub file URL

// Get the text from URL1
$text = file_get_contents($url1);

// Save the text in file1.txt on GitHub
file_put_contents($file1, $text);

echo "Text saved successfully.";
