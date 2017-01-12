<?php
/*
This file will allow you to download a .csv file from Patreon, place it in the same folder and then parse it to do something with it.
$line = an array of each persons information, like name, email, pledge amount etc
*/
$csv = array_map('str_getcsv', file('patreon.csv'));

$data = [];

// this removes the first two useless lines of headings and descriptions, so you just get the actual data
array_splice($csv, 0, 2);

foreach ($csv as $line)
{
  // make it a proper decimal number to compare against
  $pledge = (float) $line[3];
}
?>
