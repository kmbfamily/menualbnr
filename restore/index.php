<?php
//������ : kmbfamily,�ֿ�,xenoteam
//�� �ҽ��ڵ�� �����̸� ���� ����� �����մϴ�.
//���� Ȩ������ : http://www.kmbfamily.net
ini_set('max_execution_time',0);
$DB_HOST = 'localhost';	//������ ���� dbȣ��Ʈ��,�Ϲ����� ���� 127.0.0.1 �Ǵ� localhost�� �����ϴ�.
$DB_USER = '';		//������ ���� db���̵�
$DB_PASS = '';		//������ ���� db��й�ȣ
$DB_NAME = '';		//������ ���� db�̸�
$SQL_NAME = '';		//������ sql���� �̸�
$data ="backup.zip";	//������ ftp���� �̸�
include('unzip.php');	//ftp���� ���� �κ�,������ ������ �ּ�ó�� �ϼ���.
include('db.php');	//db���� �κ�,������ ������ �ּ� ó�� �ϼ���.
//include('dbsqli.php');//sqli ��� db���� �κ�,php 7.0���ʹ� sqli����̴� �ּ� �����ϰ� �ٷ� ������ �ּ�ó�� �ϼ���.
?>