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
            <li><a href="#">Pagar</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Pagar</h1>
</main>

<section class="cards">
  <article>
    <div class="img">
        <img src="./img/visa.png" alt="imagen de tarjeta visa">
    </div>
    <div>
        <form action="./procesarpago.php" method="POST">
            <label><span>Titular:</span>
                <input type="text" name="titular" placeholder="Ej: Sara Martinez" required>
            </label>
            <label><span>Numero de cuenta:</span>
                <input type="text" name="cuenta" placeholder="Ej: 682-2452-21-45" required>
            </label>
            <label><span>Fecha de caducidad:</span>
                <input class="date" type="date" name="fecha" placeholder="" required>
            </label>
            <label><span>CvC:</span>
                <input type="password" name="cvc" placeholder="Ej: 999" required>
            </label>
            <input class="submit btn" type="submit" value="CONFIRMAR">
        </form>
    </div>
  </article>
  
  <article>
    <div class="img">
        <img src="./img/mastercard.png" alt="imagen de tarjeta mastercard">
    </div>
    <div>
        <form action="./procesarpago.php" method="POST">
            <label><span>Titular:</span>
                <input type="text" name="titular" placeholder="Ej: Sara Martinez" required>
            </label>
            <label><span>Numero de cuenta:</span>
                <input type="text" name="cuenta" placeholder="Ej: 682-2452-21-45" required>
            </label>
            <label><span>Fecha de caducidad:</span>
                <input class="date" type="date" name="fecha" placeholder="" required>
            </label>
            <label><span>CvC:</span>
                <input type="password" name="cvc" placeholder="Ej: 999" required>
            </label>
            <input class="submit btn" type="submit" value="CONFIRMAR">
        </form>
    </div>
  </article>
  
  <article>
    <div class="img">
        <img src="./img/daviplata.png" alt="imagen de tarjeta daviplata">
    </div>
    <div>
        <form action="./procesarpago.php" method="POST">
            <label><span>valor a pagar:</span>
                <input type="text" name="cuenta" placeholder="Número de celular" required>
            </label>
            <label><span>Cantidad de Pago:</span>
                <input type="text" name="cantidad" placeholder="Ingrese la cantidad a pagar" required>
            </label>
            <label><span>Escribir Banco:</span>
                <input type="text" name="banco" placeholder="Escriba el nombre del banco" required>
            </label>
            <label><span>Tipo de Cliente:</span>
                <select name="tipo_cliente" required>
                    <option value="natural">Persona Natural</option>
                    <option value="juridica">Persona Jurídica</option>
                </select>
            </label>
            <label><span>Fecha de Caducidad:</span>
                <input class="date" type="date" name="fecha" required>
            </label>
            <label><span>CvC:</span>
                <input type="password" name="cvc" placeholder="Ej: 999" required>
            </label>
            <input class="submit btn" type="submit" value="CONFIRMAR">
        </form>
    </div>
  </article>
  
  <article>
  <div class="img">
        <img src="./img/nequi.png" alt="imagen de tarjeta Nequi">
    </div>
    <div>
        <form action="./procesarpago.php" method="POST">
            <label><span>valor a pagar:</span>
                <input type="text" name="cuenta" placeholder="Número de celular" required>
            </label>
            <label><span>Cantidad de Pago:</span>
                <input type="text" name="cantidad" placeholder="Ingrese la cantidad a pagar" required>
            </label>
            <label><span>Escribir Banco:</span>
                <input type="text" name="banco" placeholder="Escriba el nombre del banco" required>
            </label>
            <label><span>Tipo de Cliente:</span>
                <select name="tipo_cliente" required>
                    <option value="natural">Persona Natural</option>
                    <option value="juridica">Persona Jurídica</option>
                </select>
            </label>
            <label><span>Fecha de Caducidad:</span>
                <input class="date" type="date" name="fecha" required>
            </label>
            <label><span>CvC:</span>
                <input type="password" name="cvc" placeholder="Ej: 999" required>
            </label>
            <input class="submit btn" type="submit" value="CONFIRMAR">
    </div>
  </article>
</section>

</body>
</html>
