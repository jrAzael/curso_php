
<html>

<head>
<title>problema</title>
</head>
<body>
<?php
if ($_REQUEST['radio1'] == "calcular") {
    $estatura = $_REQUEST['valor2'] * $_REQUEST['valor2'];
   $resultado = $_REQUEST['valor1'] / $estatura;
    echo "el IMC es:"  .$resultado;
}else{
    echo "ingresar datos";
}
?>
</body>
<body>
    <?php
    ?>
</body>
    </html>