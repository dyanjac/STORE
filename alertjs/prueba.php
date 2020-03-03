<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include '../resources/adminclave.php'?>
    
       <?php 
       
     $pass="15615615";
 
     $encriptado= encriptar_clave($pass);
       
    echo $VALORENCRIPT=$encriptado;
    
        ECHO "<BR>";
        
    echo $desencriptado=desencriptar_clave($pass)
    
       ?> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>

  <script>alert( <?PHP $VALORENCRIPT ?>); </script>
       
</head>

<body>

    
    <table align="center"  border="1">
        
        <tr>
            <th>Descripcion</th>
            <th>Operaciones</th>
            
        </tr>
        
    
        
        <tr> <th>Pruebas de inicio de Sesion, ALERTJ</th><th>    <button>Prueba nuevo logueo</button></th> </tr>
        
    </table>

    
    
    
    
</body>
</html>
