<?php
$view_count = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCQefCQbvl106ECsyVwXK6xA&key=AIzaSyDBzIBpp0A9HUcrkwhLVJ_k1cLdwrk0pLE'), true);
$view_count_main = $view_count['items'][0]['statistics']['viewCount'];
?>
<?php echo number_format("$view_count_main;") ?>