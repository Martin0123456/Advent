<?php

$input_data = "()()()";

echo substr_count($input_data, "(") - substr_count($input_data, ")");