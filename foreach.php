<?php
    $memberList = ['김미우','짤랑이','세균맨','김혜균'];

    foreach($memberList as $mi){
        echo $mi;
        echo "</br>";
        echo "</br>";
    }

    //인덱스

    $memberList02 = ['김미우','짤랑이','세균맨','김혜균',"호빵맨","잼쓰"];
    foreach($memberList02 as $i =>$value){
        echo "인덱스=".$i."값=".$value;
        echo "</br>";
    }

?>