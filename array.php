<?php

 $space = array();
 $space[0] = 'array01';
 echo $space[0];
 echo '<br>';

//문자형 배열
$earth = array();
$earth['naton'] = 'korea';
echo '문자형 배열 테스트 값은'.$earth['naton'].'입니다';
echo '<br>';

//화살표 형식
$earth = array('test' => 'space');
echo '화살표 배열'.$earth['test'].'입니다';
echo '<br>';

//반올림
$roundTest = round(1542,-2);
echo '반올림값'.$roundTest;

?>