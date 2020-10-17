<?php 
$dir    = 'files_ns';
$BaseFails = [];
$failes = scandir($dir);             //Сканируем директорию с файлами
foreach ($failes as $value) {
	if (substr($value,0,2)=='ns'){
		$BaseFails[]=$value;     //Записываем названия файлов в переменную
	}
}

	for ($i=0; $i < count($BaseFails); $i++) { //Вызов функции
	 	StrFails($BaseFails[$i]);
	 } 

var_dump($Data);


 function StrFails($BaseFails) 
 {
 	$handle = @fopen("BaseFails", "r");  //Открываем фаул
    if ($handle) {
    $Data = array();
    while (($buffer = fgets($handle, 4096)) !== false) {
        $Data[] = $buffer;  //Записываем построчно данные из файла
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
    }
    return $Data;
}

 ?>