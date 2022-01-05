<?php
	$contentFilename = "./lorem.txt";
	if (is_readable($contentFilename)) {
		$contentFile = fopen($contentFilename, "r");
		$haystack = fread($contentFile,filesize($contentFilename));
		fclose($contentFile);
		preg_match_all("/\[[^\]]*\]/", $haystack, $needle);
		foreach ($needle[0] as $k=>$v) {
			echo "<script type='text/javascript'>console.log('" . $v . "');</script>";
		}
	}else{
		echo "<script type='text/javascript'>console.log('Invalid file: " . $contentFilename . "');</script>";
	}
	echo "Check the console!";
?>