<?php
    $fruit = array();
    array_push($fruit,'apple','banana','grape','tangerine');

    for($i = 0; $i < 4; $i++){
        echo $fruit[$i];
        echo "<br>";
        $fruit[$i] = array();
        array_push($fruit[$i],'test01','test02','test03');
    }
    echo "<pre>";
    var_dump($fruit);
    echo "</pre>";
?>