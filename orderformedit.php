<html> 
<head>  
<title>"Web-программирование" (Мерионкова Е. В.) - Курсовая работа</title>  
<meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
</head> 
<body>  <h1>Баскетбольный турнир</h1>  
<h2>Изменение информации</h2>  
<form action="processorderedit.php" method=post> 
 <table border=0>  <tr bgcolor=#cccccc>   
 <?php 
echo "<body bgcolor=#ADFF2F>";  
$nomer = $_REQUEST['nomer'];    
 echo '<input type="hidden" name="nomer" value="'.$nomer.'">'; 
 $handle = new mysqli('Merionkova', 'mysql', 'mysql', 'kursrab');  
 $query = "SELECT nomer, komanda, Protivnik, Schet, Data, Pobeda FROM Turnir WHERE nomer=$nomer";   
 $result = $handle->query($query);   
 
  $row=$result->fetch_assoc;   
 echo '<tr><td>Номер<td align=left><input type="text" name="nomer" value='.$row['nomer'].'>';  
 
 echo '<tr><td>Команда<td align=left><input type="text" name="Komanda" size=12 maxlength=12 value='.$row['Komanda'].'>';  
 echo '<tr><td>Противник<td align=left><input type="text" name="Protivnik" size=12 maxlength=12 value='.$row['Protivnik'].'>';  
 echo '<tr><td>Счет<td align=left><input type="text" name="Schet" size=12 maxlength=12 value='.$row['Schet'].'>';  
 echo '<tr><td>Дата<td align=left><input type="text" name="Data" size=12 maxlength=12 value='.$row['Data'].'>';  
 echo '<tr><td>Победа<td align=left><input type="text" name="Pobeda" size=3 maxlength=3 value='.$row['Pobeda'].'>';  
   
 
 
 
  ?>  
 <tr><td colspan=2 align=center>
 <input type=submit value="Изменить данные"></td></tr>  
 </table>  
 </form>  
 </body> 
 </html> 