<?php
$compressed   = base64_encode(gzdeflate('Compress me'));
echo $compressed;
echo '<br>';
$uncompressed = gzinflate(base64_decode($compressed));
echo $uncompressed;
?>