<?php
$url1 = 'https://raw.githubusercontent.com/mustafa13760806/v2ray/main/Get.html'; // Replace with your desired first URL
$url2 = 'https://github.com/mustafa13760806/v2ray/blob/main/To.html'; // Replace with your desired second URL

$data = file_get_contents($url1); // Get data from URL1

if ($data !== false) {
  $saved = file_put_contents($url2, $data); // Save data to URL2
  
  if ($saved !== false) {
    echo 'Data saved successfully.';
  } else {
    echo 'Failed to save data.';
  }
} else {
  echo 'Failed to get data from URL1.';
}
?>
