<?php
$compressed = "c87PLShKLS5WyE0FAA==";
$uncompressed = gzinflate(base64_decode($compressed));
echo $uncompressed;
?>