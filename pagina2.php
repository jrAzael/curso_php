
<html>

<head>
<title>problema</title>
</head>
<body>
<?php
if ($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "la suma es:"  .$suma;
}else {
    if ($_REQUEST['radio1'] == "resta") {
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es:" .$resta;
    }
}

?>
</body>
<body>
    <?php
    ?>
</body>
    </html>