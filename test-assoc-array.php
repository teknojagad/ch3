<?php
$my['name'] = "Thomas";
$my['year-of-birth'] = 1972;
$my['height'] = "193 cm";

$out = "<pre>";
$out .= print_r($my, true);
$out .= "</pre>";
echo $out;