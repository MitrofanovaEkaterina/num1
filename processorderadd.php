<html> 
<head>  
<title>"Web-программирование" (Мерионкова Е.В.) - Работа 6</title>  
<meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
</head> 
<body>  
<h1>Баскетбольный турнир</h1>  
<h2>Результаты заполнения</h2>  
<?php 
echo "<body bgcolor=#ADFF2F>";  
$nomer = $_REQUEST['nomer']; 
$Komanda = $_REQUEST['Komanda'];  
$Protivnik = $_REQUEST['Protivnik'];  
$Schet = $_REQUEST['Schet'];  
$Data= $_REQUEST['Data'];  
$Pobeda= $_REQUEST['Pobeda'];  

 if ((!isset($nomer))||(!$Komanda)||(!$Protivnik)||(!$Schet)||(!$Data)||(!$Pobeda))  
 {   
echo '<p>Вы не указали все данные. Повторите ввод.';   
echo '<p><a href="index.php">Проведенные игры</a>';   
echo '</body></html>';  
 exit;  }   
   
 $handle = new mysqli('Merionkova', 'mysql', 'mysql', 'kursrab'); 
 $query = "INSERT INTO turnir (nomer, Komanda, Protivnik, Schet, Data, Pobeda) VALUES ('$nomer','$Komanda', '$Protivnik', '$Schet', '$Data', '$Pobeda')"; 
 
 $result = $handle->query($query);   
 
 if ($result) echo "Данные сохранены";  if (!$result) echo "Ошибка сохранения данных"; 
 
 echo "<p><a href='index.php'>Проведенные игры</a>";  
 ?>  </body> </html>