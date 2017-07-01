<?php
//개발자 : kmbfamily,주영,xenoteam
//본 소스코드는 무료이며 자유 사용이 가능합니다.
//공식 홈페이지 : http://www.kmbfamily.net
ini_set('max_execution_time',0);
$DB_HOST = 'localhost';	//복원할 서버 db호스트명,일반적인 경우는 127.0.0.1 또는 localhost를 적습니다.
$DB_USER = '';		//복원할 서버 db아이디
$DB_PASS = '';		//복원할 서버 db비밀번호
$DB_NAME = '';		//복원할 서버 db이름
$SQL_NAME = '';		//복원할 sql파일 이름
$data ="backup.zip";	//복원할 ftp파일 이름
include('unzip.php');	//ftp파일 복원 부분,원하지 않으면 주석처리 하세요.
include('db.php');	//db복원 부분,원하지 않으면 주석 처리 하세요.
//include('dbsqli.php');//sqli 방식 db복원 부분,php 7.0부터는 sqli방식이니 주석 해제하고 바로 윗줄을 주석처리 하세요.
?>