


<?php  
include_once 'header.php' ;
include_once 'function.php' ;
 echo '<h1>Баскетбольный турнир</h1>';   
 echo '<h2>Удаление данных</h2>';  
 
$nomer = (int)['nomer']; 
$result=deletest($nomer);

 if ($result) echo "Данные удалены";  
 if (!$result) echo "Ошибка удаления данных"; 
 
 echo "<p><a href='index.php'>Проведенные игры</a>";  
 include_once 'footer.php' ;
 ?> 