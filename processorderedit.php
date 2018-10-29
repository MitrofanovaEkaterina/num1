
 <?php  
     

include_once 'header.php' ;
 include_once 'function.php' ;
$nomer = (int)['nomer'];  
$Komanda = $_REQUEST['Komanda'];  
$Protivnik = $_REQUEST['Protivnik'];  
$Schet = $_REQUEST['Schet'];  
$Data= $_REQUEST['Data'];  
$Pobeda= $_REQUEST['Pobeda'];  
if ((!$Komanda)||(!$Protivnik)||(!$Schet)||(!$Data)||(!$Pobeda))  
 {   

echo '<p>Вы не указали все данные. Повторите ввод.';   
echo '<p><a href="index.php">Проведенные игры</a>';   
include_once 'footer.php' ; 
 exit;  }       

$result = updatest($nomer);   

 if ($result) echo "Данные сохранены"; 
 if (!$result) echo "Ошибка сохранения данных"; 
 
 echo "<p><a href='index.php'>Проведенные игры</a>";  
include_once 'footer.php' ; 
 ?> 