<?php

$x = 0;
if (isset($_REQUEST['x'])){
    $x = (int) $_REQUEST['x'];
}
$y = 0;
if (isset($_REQUEST['y'])){
    $y = (int) $_REQUEST['y'];
}

$workingDir = dirname(__FILE__);

$terms = array(
    "Rock" => array('xs' => 0, 'xe' => 100, 'ys' => 0, 'ye' => 100),
    "Blues" => array('xs' => 0, 'xe' => 100, 'ys' => -100, 'ye' => 0),
    "Jazz" => array('xs' => -100, 'xe' => 0, 'ys' => 0, 'ye' => 100),
    "Classical" => array('xs' => -100, 'xe' => 0, 'ys' => -100, 'ye' => 0),
);


$match = array();
$genre = '';

foreach($terms as $term => $coords){
    if($x >= $coords['xs'] && $x <= $coords['xe'] && $y >= $coords['ys'] && $y <= $coords['ye']){
       $match[] = $term;
       $genre .= "&genre[]={$term}";
    }
}

echo file_get_contents('https://sandbox.rumblefish.com/v2/search?&token=SS49OqFQnbpNkmHY1Q2kZpCjmvu2QNb3'.$genre);

?>
