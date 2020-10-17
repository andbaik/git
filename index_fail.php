<?php 
$dir    = 'files_ns';
$lines = fail('index.php');
foreach ($lines as $line_num => $line) {
	 echo "Строка #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}



/*

$BaseFails = [];
$failes = scandir($dir);
foreach ($failes as $value) {
    if (substr($value,0,2)=='ns'){
        $BaseFails[]=$value;
}
}

 $Data = [];
    for ($i=0; $i < count($BaseFails); $i++) {
        $Data[] = StrFails($BaseFails[$i]);
    } 

foreach ($Data as $value) {
	echo $value.'<br>';
}


function StrFails($BaseFails) 
{
	$handle = @fopen("BaseFails", "r");
	if ($handle) {
		$Data = array();
		while (($buffer = fgets($handle, 4096)) !== false) {
    		$Data[] = $buffer;
		}
		if (!feof($handle)) {
    	echo "Error: unexpected fgets() fail\n";
		}
		fclose($handle);
	}
	return $Data;
}
*/		
?>