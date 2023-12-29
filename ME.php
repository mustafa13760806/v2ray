<?php
$url = "https://raw.githubusercontent.com/mustafa13760806/v2ray/main/Matin";  // Replace with the desired URL to read data from
$file = "https://raw.githubusercontent.com/mustafa13760806/v2ray/main/930Man.txt";  // Replace with the desired filename to save the data

// Read data from the URL
$data = file_get_contents($url);

if ($data !== false) {
    // Save the data to a file
    file_put_contents($file, $data);

    echo "Data successfully retrieved and saved to $file.";
} else {
    echo "Failed to retrieve data from $url.";
}
?>
