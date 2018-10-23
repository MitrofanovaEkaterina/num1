
 <?php  
$nomer = (int)$_REQUEST['nomer'];  
$Komanda = $_REQUEST['Komanda'];  
$Protivnik = $_REQUEST['Protivnik'];  
$Schet = $_REQUEST['Schet'];  
$Data= $_REQUEST['Data'];  
$Pobeda= $_REQUEST['Pobeda'];  
if ((!isset($nomer))||(!$Komanda)||(!$Protivnik)||(!$Schet)||(!$Data)||(!$Pobeda))  
 {   
include_once "<header.php>" ;
echo '<p>Вы не указали все данные. Повторите ввод.';   
echo '<p><a href="index.php">Проведенные игры</a>';   
include_once "<footer.php>" ; 
 exit;  }       


 
     
include_once '<config.php>' ;
$handle = new mysqli($config['db']['host'], $config['db']['user'], $config['db']['password'], $config['db']['db']);

 $query = "UPDATE Turnir SET nomer=$nomer, Komanda='$Komanda',   Protivnik='$Protivnik',   Schet='$Schet',   data='$data',    Pobeda='$Pobeda'  WHERE Komanda='$Komanda' "; 
 $result = $handle->query($query);   
 
 if ($result) echo "Данные сохранены"; 
 if (!$result) echo "Ошибка сохранения данных"; 
 
 echo "<p><a href='index.php'>Проведенные игры</a>";  

 ?> 