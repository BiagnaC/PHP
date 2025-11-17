<?php
$correo = trim(strip_tags($_REQUEST['correo']));
$correo2 = trim(strip_tags($_REQUEST['correo2']));
$recibir = $_REQUEST['recibir'];

$correoOk  = false;
$correo2Ok  = false;
$escribeOk  = false;

if ($correo == ""){
    print "<p>No ha escrito su dirección de correo. </p>";
}elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
    print "<p>No ha escrito una dirección de correo correcta.</p>";
}else{
    $correoOk = true;

}if ($correo2 != $correo){
    print "<p>Las direcciones de correo no coinciden.</p>";
}else{
    $correo2Ok = true;

}if ($recibir == "-1"){
    print "<p>No ha indicado si desea recibir correo. </p>";
}else{
    $recibirOk = true;
}
if ($correoOk && $correo2Ok && $recibirOk){
    print "<p>Su dirección de correo es : <strong> $correo </strong>.</p>";
}

?>