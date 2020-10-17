<?php 
$dir    = 'files_ns';
$Data = [];

	foreach (glob("./$dir/ns*.*") as $filename) //Читаем файлы построчно в массив.
		{
			$Data[] = file($filename);

		}

/*  Вывод массива
foreach ($Data as $Mass) {
	foreach ($Mass as $value) {
		echo $value;
	}
}
*/

echo "<br>";
echo 'Строка';
echo $Data [0][0];

$I_p = [0, 2, 7, 10, 14, 25, 34, 45];
$I_z = [2, 4, 2, 3, 10, 8, 10, 8];

$E_p = [0, 5, 19, 25, 36, 45, 48, 51, 54, 57, 60, 63, 65, 67, 69, 71, 74, 80, 82, 87, 92, 100, 102, 104, 106, 108];
$E_z = [4, 13, 5, 10, 8, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 5, 1, 4, 4, 3, 1, 1, 1, 1, 1];

$Data= mb_convert_encoding($Data, "utf-8","windows-1251" );


//Обработка информационной строки
echo "<br>Инфо строка <br>";
	for ($i=0; $i < count($I_p); $i++) { 
		echo substr($Data[0][0], $I_p [$i], $I_z [$i]).' ! ';;
	}
//Конец обработки информационной строки

//Обработка строки с нарушениями
echo "<br>Нарушения <br>";
	for ($i=0; $i < count($E_p); $i++) { 
		echo substr($Data[0][5], $E_p [$i], $E_z [$i]).' ! ';;
	}
//Конец обработки строки с нарушениями




$link = mysqli_connect( 
            'localhost',  /* Хост, к которому мы подключаемся */ 
            'root',       /* Имя пользователя */ 
            '',   /* Используемый пароль */ 
            'gid_nsp');     /* База данных для запросов по умолчанию */ 
 
if (!$link) { 
   echo "Ошибка подключения к базе данных. Код ошибки: ".mysqli_connect_error(); 
   exit; 
} 
//Вывод информации из базы
/* Посылаем запрос серверу */ 
if ($result = mysqli_query($link, 'SELECT * FROM info_str ORDER BY kod_soob DESC LIMIT 15')) { 
 	echo "<br>";
  //  echo "Выводим все строки из базы: <br>"; 
 
    /* Выборка результатов запроса */ 
    while( $row = mysqli_fetch_assoc($result) ){ 
        echo $row['kod_dor']." буквенный код дороги ". $row['kod_bukv'].".<br>"; 
    } 
 
    /* Освобождаем используемую память */ 
    mysqli_free_result($result); 
} 
 
/* Закрываем соединение */ 
mysqli_close($link); 

?>