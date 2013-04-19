<?php

require_once('preExecute.php');

//EXAMPLE FUNCTIONS
/*
 * Occasions
 */
$tree = rfExchange::occasionTree();
$result = rfUtils::occasion($tree);

$aOccasions = array();

// Grandparents
foreach($tree['grandparents'] as $id => $name){
    $aOccasions[] = array('id' => $id, 'name' => $name);
}

// Parents
foreach($tree['parents'] as $i => $value){
    foreach($value as $val)
        $aOccasions[] = $val;
}

// Children
foreach($tree['children'] as $i => $value){
    foreach($value as $val)
        $aOccasions[] = $val;
}

?>




















