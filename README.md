# 
![image](https://user-images.githubusercontent.com/102715143/170224572-6e2d6d7a-4b21-4771-abbb-d6395b7db6fa.png)
![image](https://user-images.githubusercontent.com/102715143/170224090-fa8236df-1eda-4af5-877e-7dff29097b94.png)
#img_counte<br>
1.image_count.php 파일을 만듭니다.<br>
2.count.txt파일을 만듭니다.<br>
**변수 설명**<br>
3.2행에 $fp = fopen("count.txt","r+")에 의해 count.txt파일을 읽고, 쓰기 위한 변수.<br>
4.3행에  $num = fgets($fp, 10) count.txt에서 10파이트 만큼 읽어오기 위한 변수.<br>
5.4행에 $num = $num + 1 방문자 수를 1증가 해주는 변수.<br>
5.5행은 rewind($fp) count.txt파일을 제일 처음 파일 포인터로 이동 시키는 변수.<br>
6.6행은 fputs($fp, $num, 10) 파을을 10바이트 크기로 $num 값 이용 하는 변수.<br>
7.7행은 $num = strval($num) $sum 값을 배열 변환 하는 변수.<br>
8.8행은 $len = strlen($num) $num의 길이 를 뜻하는 변수.<br>
