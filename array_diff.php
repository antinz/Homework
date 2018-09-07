<?php

$category1 = array (1 => 'Home', 2 => 'Food', 3 => 'Religion');
$category2 = array (4 => 'Nature', 5 => 'Food', 6 => 'Science');
$category3 = array (1 => 'Nature', 2 => 'Education', 3 => 'Science');

$result = array_diff ($category1, $category2, $category3);

print_r ($result);