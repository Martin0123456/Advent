<?php

$input = 'bgvyzdsv';

for($i=1; $i<10000000; $i++)
{
    if (substr(md5($input . $i), 0, 5) !== '00000')
        continue;

    var_dump('success: '. $i);
    exit();
}