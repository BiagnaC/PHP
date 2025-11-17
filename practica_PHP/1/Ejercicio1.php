<?php
$alto=$_REQUEST['alto'];
$ancho=$_REQUEST['ancho'];
 
for ($i=1;$i<=$alto;$i++){
    for($j=1;$j<=$ancho;$j++){
        print "*";
    }
    print "<br>";
}
print "<br>"; 
?>
 