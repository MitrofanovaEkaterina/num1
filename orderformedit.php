<?php
 include_once 'header.php' ;
 include_once 'function.php' ;
 echo '<h1>Баскетбольный турнир</h1>';  
 echo '<h2>Изменение информации</h2>  ';
 echo '<form action="processorderedit.php" method=post> ';
  echo '<table border=0>  <tr bgcolor=#cccccc>  '; 
 
  $nomer = (int)['nomer'];    
 echo '<input type="hidden" name="nomer" value="'.$nomer.'">'; 
  include_once 'dbconn.php';
  $query = "SELECT nomer, komanda, Protivnik, Schet, Data, Pobeda FROM Turnir WHERE nomer=$nomer";   
 
$result = $handle->query($query);  
  $row=$result->fetch_assoc; 
 echo '<tr><td>Команда<td align=left><input type="text" name="Komanda" size=12 maxlength=12 value='.$row['Komanda'].'>';  
 echo '<tr><td>Противник<td align=left><input type="text" name="Protivnik" size=12 maxlength=12 value='.$row['Protivnik'].'>';  
 echo '<tr><td>Счет<td align=left><input type="text" name="Schet" size=12 maxlength=12 value='.$row['Schet'].'>';  
 echo '<tr><td>Дата<td align=left><input type="text" name="Data" size=12 maxlength=12 value='.$row['Data'].'>';  
 echo '<tr><td>Победа<td align=left><input type="text" name="Pobeda" size=3 maxlength=3 value='.$row['Pobeda'].'>';  
   
 
 
 
 
  echo '<tr><td colspan=2 align=center>';
  echo '<input type=submit value="Изменить данные"></td></tr>  ';
  echo '</table>  ';
 echo ' </form>';  
 
include_once 'footer.php' ;
 ?> 
 
