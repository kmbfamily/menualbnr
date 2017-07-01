<?php
//개발자 : kmbfamily,주영,xenoteam
//본 소스코드는 무료이며 자유 사용이 가능합니다.
//공식 홈페이지 : http://www.kmbfamily.net
IMPORT_TABLES($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME,$SQL_NAME); //TABLES WILL BE OVERWRITTEN
function IMPORT_TABLES($host,$user,$pass,$dbname, $sql_file_OR_content){
	set_time_limit(7200);
	$SQL_CONTENT = (strlen($sql_file_OR_content) > 300 ?  $sql_file_OR_content : file_get_contents($sql_file_OR_content)  );  
	$allLines = explode("\n",$SQL_CONTENT); 
	$mysqli = new mysqli($host, $user, $pass, $dbname); if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();} 
	$querytemp = $mysqli->query('SET foreign_key_checks = 0');	        preg_match_all("/\nCREATE TABLE(.*?)\`(.*?)\`/si", "\n". $SQL_CONTENT, $target_tables); foreach ($target_tables[2] as $table){$mysqli->query('DROP TABLE IF EXISTS '.$table);}         $querytemp = $mysqli->query('SET foreign_key_checks = 1');    $mysqli->query("SET NAMES 'utf8'");	
	$templine = '';	// Temporary variable, used to store current query
	foreach ($allLines as $line)	{
		if (substr($line, 0, 2) != '--' && $line != '') {$templine .= $line; 	// (if it is not a comment..) Add this line to the current segment
			if (substr(trim($line), -1, 1) == ';') {		// If it has a semicolon at the end, it's the end of the query
				if(!$mysqli->query($templine)){ print('Error performing query \'<strong>' . $templine . '\': ' . $mysqli->error . '<br /><br />');  }  $templine = ''; // set variable to empty, to start picking up the lines after ";"
			}
		}
	}	return 'Importing finished. Now, Delete the import file.';
}
?>