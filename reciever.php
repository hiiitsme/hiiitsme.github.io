<?php
	$var1=$_GET['data1'];
	$var2=$_GET['data2'];

	$fileContent="tje value is recievd as follows".$var1."and ".$var2.".";
	$fileStatus=file_put_contents('data.txt', $fileContent,FILE_APPEND);
	if ($fileStatus!=false) {
		echo "SUCCESS data is written to website";
		# code...
	}
	else{
		echo "FAIL data not written ";
	}



?>