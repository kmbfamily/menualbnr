<?php
//개발자 : kmbfamily,주영,xenoteam
//본 소스코드는 무료이며 자유 사용이 가능합니다.
//공식 홈페이지 : http://www.kmbfamily.net
  include('ziplib.php');
  $zipfile = new PclZip($data);
  $extract = $zipfile->extract(PCLZIP_OPT_PATH,'../');
  echo "<pre>";
  print_r($extract);
?>