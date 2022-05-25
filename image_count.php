<?php
    $fp = fopen("count.txt","r+");   //count.txt 파일을 읽고, 쓰기 위해열기
    $num = fgets($fp, 10);           //count.txt 파일에서  10byte만큼 읽어오기
    $num = $num + 1;                 //방문자 수를 1증가
    rewind($fp);                     //count.txt 파일의 제일 처음으로 파일 포인터 이동
    fputs($fp, $num, 10);            //파일을 10byte 크기로 $num 값 이용
    $num = strval($num);             //$snum값을 배열로 변환
    $len = strlen($num);             //$num의 길이
    echo "<center><b>김은혁</b><br><hr>";
    echo "그래픽 이미지를 이용한 카운트 입니다...<br><br>";
    for($s=0; $s <= $len-1; $s++)
    {
        echo "<img src = $num[$s].gif>";
    }
    echo "<center>";
    fclose($fp);
