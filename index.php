<html> 
<head>  
<title>"Web-программирование" (Мерионкова Е.В.) - Курсовая работа </title>  
<meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
</head> 

<body> 
<h1>Баскетбольный турнир</h1>  
<h2>Проведенные игры</h2>  
<?php 


echo "<body bgcolor=#ADFF2F>";  


$handle = new mysqli('Merionkova', 'mysql', 'mysql', 'kursrab');   
$query = "SELECT nomer, 
Komanda,      
Protivnik,      
Schet,
Data,     
Pobeda           
FROM Turnir";  
$result = $handle->query($query);    
$numresult=$result->num_rows;       
echo '<table border=1>';
echo '<tr><th>Номер</th>';   
echo '<th>Команда</th>';  
echo '<th>Противник</th>';  
echo '<th>Счет</th>';  
echo '<th>Дата</th>';  
echo '<th>Победа</th>';      
echo '<th></th>';  
echo '<th></th>';    
for ($i=0;$i<$numresult;$i++)  
{   
$row=$result->fetch_assoc();

  echo '<tr><td>'.$row['nomer'];  
  echo '</td><td>'.$row['Komanda'];   
  echo '</td><td>'.$row['Protivnik'];   
  echo '</td><td>'.$row['Schet'];   
  echo '</td><td>'.$row['Data'];   
  echo '</td><td>'.$row['Pobeda'];  
  echo '</td><td>';  
 
  echo '<form action="delorder.php" method="post">';   
  echo '<input type="hidden" name="nomer" value="'.$row['nomer'].'">';   
  echo '<input type="submit" value="Удалить">';   
  echo '</form>';   
  echo '</td><td>';
  echo '<form action="orderformedit.php" method="post">';   
  echo '<input type="hidden" name="nomer" value="'.$row['nomer'].'">';   
  echo '<input type="submit" value="Изменить"></td>';   
  echo '</form>';     
  }  
  echo '</table>'
  ?>  
  <p><a href='orderformadd.php'>Добавить игру</a>  
  <p><a href='../index.php'>К содержанию</a>  
  </body> 
  </html>