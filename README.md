수동 서버 백업 복원
=======
## 주의사항 ##
 - nginx 서버는 .htaccess의 미작동으로 백업 도중 외부인에 의해 백업본 데이터를 탈취 당할수 있습니다,백업을 완료한 즉시 삭제하세요.
 - php 7.0 이상 서버의 db복원시 restore/index.php파일의 13번째줄은 반드시 주석처리 하고 14번째줄의 주석처리를 해제하세요.
## 기능 ##
 - 수동으로 서버 백업 및 복원을 할 수 있습니다.
## 특징 ##
 - ssh 접속과 상관없이 서버가 php만 지원하면 작동합니다.
 - 웹 브라우저 실행 한번으로 db와 ftp의 백업 또는 복원을 간편하게 실행할수 있습니다.
## 사용 및 설치방법 ##
**백업 방법**
 1. backup폴더안에 있는 index파일을 열고 서버에 맞게 설정합니다.
 2. backup폴더째 백업할 서버에 올려줍니다.
 3. 웹 브라우저로 backup/index.php파일을 실행합니다.
 4. ftp로 백업이 완료된 ftp파일 및 db를 받아줍니다.(backup폴더 안에 생성되어 있습니다.)

**생성된 파일 설명**
 - backup.zip : ftp파일 백업본
 - backup.sql : mysqldump 함수를 이용한 sql 방식 db백업본
 - backupsqli.sql : mysqli 함수를 이용한 sqli방식 db백업본
 
db는 php 버전 서버환경에 따라 backup.sql 또는 backupsqli.sql 이 소실 또는 1kb 미만의 파일이 될수 있습니다.

**복원방법**
 1. restore폴더안에 있는 index파일을 열고 복원서버에 맞게 설정합니다.
 2. restore폴더 안에 복원할 내용이 담긴 ftp파일 및 db파일을 각각backup.zip 및 backup.sql로 파일이름을 변경후 넣어줍니다.  
 3. restore폴더째 복원할 서버에 올려줍니다.
 4. 웹브라우저로 restore/index.php 를 실행합니다.
 
**복원시 주의사항**
 - backup.sql,backupsqli.sql 중 정상적으로 압축된 db를 사용하세요.

이해하기 어려우신 분은 동영상을 참고해 주세요.
