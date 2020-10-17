<?php 


$handle = @fopen("$BaseFails", "r");
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


 ?>