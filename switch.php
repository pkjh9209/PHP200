<?php
    $like = 'mickey';
    $likeThis = 'apple';
    $likeResult = 'banana';
    switch($like){
        case "mickey";
            echo "미키";
        break;
        
        case "nini";
            echo "실패";
        break;
    }

    switch($likeThis){
        case "apple";
            echo "사과";
            $likeResult = "맛있다";
            echo $likeResult;
        break;
        
        case "nini";
            echo "사과";
            $likeResult = "맛없다";
            echo $likeResult;
        break;
    }

?>