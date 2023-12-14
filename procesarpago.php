<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "staymagic";


$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// echo "Conexión exitosa";





$titular = $_POST['titular'];
$cuenta = $_POST['cuenta'];
$fechac = $_POST['fecha'];
$cvc = $_POST['cvc'];
$fecha_local = date('Y-m-d H:i:s');


// validar datos antes de mostrar el mensaje.
$lcvc = strlen($cvc);
if($lcvc == 3){
    $sql = "INSERT INTO compras (titular,cuenta,fecha_caducidad,cvc,fecha_compra) VALUES ('$titular','$cuenta','$fechac','$cvc','$fecha_local')";

    $stmt = mysqli_prepare($conn, $sql);

    if (mysqli_stmt_execute($stmt)) {
       
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayMagic</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/pagar.css">
</head>
<body>
    
<header>
    <nav>
        <a class="sm" href="./index.php">StayMagic</a>
        <ul>
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./pagar.php">Pagar</a></li>
            <li><a href="#">Ofertas</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Transacción Exitosa</h1>

</main>
</body>
</html>
<?php


}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayMagic</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/pagar.css">
</head>
<body>
    
<header>
    <nav>
        <a class="sm" href="./index.php">StayMagic</a>
        <ul>
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./pagar.php">Pagar</a></li>
            <li><a href="#">Ofertas</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Transacción Rechazada</h1>
</main>
</body>
</html>
<?php
}
?>


