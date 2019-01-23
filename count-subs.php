<?php
$sub_count = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCQefCQbvl106ECsyVwXK6xA&key=AIzaSyDBzIBpp0A9HUcrkwhLVJ_k1cLdwrk0pLE'), true);
$sub_count_main = $sub_count['items'][0]['statistics']['subscriberCount'];
?>
<?php echo number_format("$sub_count_main;") ?>
