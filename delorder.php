<html> 
<head> 
<title>"Web-программирование" (Мерионкова Е. В.) - Курсовая работа</title>  
<meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
</head> 
<body>  
<h1>Баскетбольный турнир</h1>   
<h2>Удаление данных</h2>  
<?php  

echo "<body bgcolor=#ADFF2F>";  


$nomer = $_REQUEST['nomer']; 
 $handle = new mysqli('Merionkova', 'mysql', 'mysql', 'kursrab');  
 
 $query = "DELETE FROM Turnir WHERE nomer=$nomer"; 
 
 $result = $handle->query($query);   
 
 if ($result) echo "Данные удалены";  if (!$result) 
	 echo "Ошибка удаления данных"; 
 
 echo "<p><a href='index.php'>Проведенные игры</a>";  ?> 
 </body> 
 </html> 