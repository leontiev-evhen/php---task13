<?php
/**
 * User: yevhen
 * Date: 10.08.17
 * Time: 11:04
 */

$list = array (
    array(0, 0, 0),
    array(0, 1, 1),
    array(1, 0, 1),
    array(1, 1, 3)
);

$fp = fopen('files/data.csv', 'w');

foreach ($list as $fields)
{
    fputcsv($fp, $fields);
}

fclose($fp);
