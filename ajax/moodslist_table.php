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
    "genre01" => array('xs' => 0, 'xe' => 100, 'ys' => 0, 'ye' => 100),
    "genre02" => array('xs' => 0, 'xe' => 100, 'ys' => -100, 'ye' => 0),
    "genre03" => array('xs' => -100, 'xe' => 0, 'ys' => 0, 'ye' => 100),
    "genre04" => array('xs' => -100, 'xe' => 0, 'ys' => -100, 'ye' => 0),
);


$match = array();

foreach($terms as $term => $coords){
    if($x >= $coords['xs'] && $x <= $coords['xe'] && $y >= $coords['ys'] && $y <= $coords['ye']){
       $match[] = $term;
    }
}

?>
<div id="matched-terms">
    <strong>Matched Terms:</strong><br />
    <ol>
        <?php foreach($match as $term): ?>
        <li><?php echo $term; ?></li>
        <?php endforeach; ?>
    </ol>
</div>
