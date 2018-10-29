 
<?php 
$nomer = (int)['nomer']; 
$Komanda = $_REQUEST['Komanda'];  
$Protivnik = $_REQUEST['Protivnik'];  
$Schet = $_REQUEST['Schet'];  
$Data= $_REQUEST['Data'];  
$Pobeda= $_REQUEST['Pobeda'];  

 if ((!isset($nomer))||(!$Komanda)||(!$Protivnik)||(!$Schet)||(!$Data)||(!$Pobeda))  
 {   
include_once "<header.php>" ;
echo '<p>Вы не указали все данные. Повторите ввод.';   
echo '<p><a href="orderformadd.php">ОК</a>';  
   
include_once "<footer.php>" ; 
 exit;  }   
include_once 'dbconn.php';
$query = "INSERT INTO turnir (nomer, Komanda, Protivnik, Schet, Data, Pobeda) VALUES ($nomer,'$Komanda', '$Protivnik', '$Schet', '$Data', '$Pobeda')"; 
 
 $result = $handle->query($query);   
 
 if ($result) echo "Данные сохранены";  if (!$result) echo "Ошибка сохранения данных"; 
 
 echo "<p><a href='index.php'>Проведенные игры</a>";  

 ?> 
 