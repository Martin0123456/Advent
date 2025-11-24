<?php

function find_lowest_md5_starting_prefix($input, $needle)
{
    $i = 0;

    do { $i++; } while(!str_starts_with(md5($input . $i), $needle));

    return $i;
}

echo find_lowest_md5_starting_prefix('bgvyzdsv', '000000');