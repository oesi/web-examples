<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$new_data = rand(0, 1000);
echo "data: rand: $new_data\n\n";
flush();
?>