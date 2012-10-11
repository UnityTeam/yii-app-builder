#!/usr/bin/php
<?php


require_once(__DIR__ . "/../lib/YiiBuilder.php");
$cfg = include_once("config/app.cfg.php");

$b = new YiiBuilder();
$res = $b->createApp($cfg);

echo "Done...\n";
print_r($res);
echo "\n DONE!\n";
exit;