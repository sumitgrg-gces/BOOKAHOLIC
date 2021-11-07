<?php
session_start();
if(!empty($_GET['file'])){
	$fileName= basename($_GET['file']);
	$filePath = "php/uploads/".$fileName;
	if(!empty($fileName) && file_exists($filePath)){
		header("Cache-Control:public");
		header("Content-Description:File Transfer");
		header("Content-Disposition: attachment; filename =$fileName");
		header("Content-Type:Application/pdf");
		header("Content-Transfer-Encoding: binary");

           readfile($filePath);
           exit();


		
	}
	else{
		echo "file dont exit";
	}
}
?>
