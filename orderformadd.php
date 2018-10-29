 
 <?php
include_once 'header.php' ;
?>

<h1>Баскетбольный турнир</h1>   
<h2>Форма</h2> 
 
 


<form action="processorderadd.php" method=post>  
<table border=0>  
  <tr>
<td >Номер<td align=left><input type="text" name="nomer" size=12 maxlength=12>  <tr>
<tr >   
<td > Команда<td align=left><input type="text" name="Komanda" size=12 maxlength=12>  <tr>
<tr> 
<td >Противник <td align=left><input type="text" name="Protivnik" size=12 maxlength=12>  <tr> 
<tr> 
<td>Счет   <td align=left> <input type="text" name="Schet" size=12 maxlength=12>  <tr>   
<tr> 
<td>Дата  <td align=left> <input type="text" name="Data" size=12 maxlength=12><tr>     
<tr>   
<td>Победа   <td align=left><input type="text" name="Pobeda" size=3 maxlength=3> <tr>    
<tr>   
<td colspan=2 align=center>
<input type=submit value="Добавить игру"></td>  
</table>  
</form>   
<?php
 include_once 'footer.php' ;
?>