<?php
function deletest($id)
{

include_once 'dbconn.php';
 
 $query = "DELETE FROM Turnir WHERE nomer=$id"; 
   $result = $handle->query($query);  

return( $result);
}
function updatest($id)
{
	
include_once 'dbconn.php';
$query = "UPDATE Turnir SET Komanda='$Komanda',   Protivnik='$Protivnik',   Schet='$Schet',   Data='$Data',    Pobeda='$Pobeda'  WHERE nomer=$id "; 
$result = $handle->query($query); 
 return( $result);
}
?>