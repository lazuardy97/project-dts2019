<?php
$file = fopen("tes.txt", "r");

echo fgets($file);
echo fclose($file);
