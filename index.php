<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayMagic</title>
    <link rel="shortcut icon" href="./icono.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .s1,
        .ubi,
        .galeria {
            width: 80%;
            margin: 20px 0;
        }

        .galeria {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            justify-content: space-around;
        }

        article {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        article img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h2, h3 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 15px;
        }

        .btn {
            background-color: transparent;
            color: #4CAF50;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            transition: color 0.3s;
            cursor: pointer;
        }

        .btn:hover {
            color: white;
            background-color: #4CAF50;
        }

        .btn.bl {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<header>
    <nav>
        <a class="sm" href="./index.php">StayMagic</a>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="./pagar.php">Pagar</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Stay Magic</h1>
</main>

<link rel="shortcut icon" href="favicon.ico" type="image/icono.ico">

<section class="s1">
    <div class="s1-text">
        <h2>Stay Magic</h2>
        <p>Con StayMagic Descubre la Magia en Cada Estancia. Bienvenido a un mundo de experiencias excepcionales donde cada habitación cuenta una historia única. En StayMagic, creamos momentos inolvidables para ti y tus seres queridos. Explora nuestras exclusivas opciones de alojamiento, desde románticas suites hasta acogedoras habitaciones familiares. Con servicios de primera clase, ubicación privilegiada y atención personalizada, StayMagic es mucho más que un lugar para descansar; es un destino donde la magia cobra vida. Reserva tu próxima aventura con nosotros y deja que StayMagic transforme tu estancia en una experiencia mágica y inolvidable.</p>
    </div>
    <div class="s1-img">
        <img src="./img/img1.jpeg" alt="esta imagen contiene personas sacándose una foto">
    </div>
</section>

<div class="ubi">
    <img src="./img/ubicacion.png" alt="esta imagen es un icono de ubicación">
    <p>Girardot, Cundinamarca </p>
</div>

<section class="galeria">
    <article>
        <img src="./img/img-a1.png" alt="imagen de habitaciones">
        <h2>Habitaciones para dos personas</h2>
        <p>Plan en pareja.</p>
        <p>1 noche en cama matrimonial.</p>
        <p>Cena romántica para 2 incluida.</p>
        <p>Botella de vino y frutas en la habitación.</p>
        <p>Late check-out (2pm).</p>
        <p>10% de descuento.</p>
        <p>Wi-fi gratis.</p>
        <p>Precio: $240,000</p>
        <div class="btn">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>
    
    <article>
        <img src="./img/img-a2.png" alt="imagen de habitaciones">
        <h2>Habitaciones para tres personas</h2>
        <p>Plan de Amigos.</p>
        <p>2 noches en habitación con 3 camas individuales.</p>   
        <p>Desayuno continental incluido.</p>
        <p>Acceso a gimnasio y sauna.</p>
        <p>Late check-out (2pm).</p>
        <p>Tour a pie por la ciudad gratis.</p>
        <p>10% de descuento por reserva anticipada.</p>
        <p>Precio: $500,000</p>
        <div class="btn">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>

    <article>
        <img src="./img/img-a3.png" alt="imagen de habitaciones">
        <h2>Habitaciones para dos personas</h2>
        <p>2 noches en habitación con 2 camas individuales.</p>
        <p>Desayuno americano incluido.</p>
        <p>Acceso a piscina y gimnasio.</p>
        <p>Tour en bicicleta por la ciudad gratis.</p>
        <p>10% de descuento por reserva anticipada.</p>
        <p>descuento en parqueadero.</p>
        <p>✔</p>
        <p>Precio: $500,000</p>
        <div class="btn bl">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>

    <article>
        <img src="./img/Habitacion amplia.jpg" alt="imagen de habitaciones">
        <h2>Habitación Estándar</h2>
        <p>Plan Básico para una estancia cómoda.</p>
        <p>1 noche en habitación estándar.</p>
        <p>Desayuno continental incluido.</p>
        <p>Acceso gratuito al gimnasio.</p>
        <p>Wi-fi gratis.</p>
        <p>Precio: $200,000</p>
        <div class="btn">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>

    <article>
        <img src="./img/Habitacion Lujosa..jpg" alt="imagen de habitaciones">
        <h2>Suite de Lujo</h2>
        <p>Experiencia de lujo para una estancia especial.</p>
        <p>2 noches en suite de lujo.</p>
        <p>Desayuno gourmet incluido.</p>
        <p>Acceso a spa y piscina.</p>
        <p>Late check-out (2pm).</p>
        <p>descuento en parqueadero.</p>
        <p>descuento en bebidas.</p>
        <p>✔</p>
        <p>Precio: $400,000</p>
        <div class="btn">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>

    <article>
        <img src="./img/Habitacion Familiar.jpg" alt="imagen de habitaciones">
        <h2>Habitación Familiar</h2>
        <p>Plan perfecto para familias.</p>
        <p>3 noches en habitación familiar.</p>
        <p>Desayuno incluido para toda la familia.</p>
        <p>Actividades recreativas para niños.</p>
        <p>Acceso a la piscina.</p>
        <p>Precio: $450,000</p>
        <div class="btn bl">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>

    <article>
        <img src="./img/Habitacion ejecutiva.jpg" alt="imagen de habitaciones">
        <h2>Suite Ejecutiva</h2>
        <p>Estancia ideal para viajeros de negocios.</p>
        <p>2 noches en suite ejecutiva.</p>
        <p>Desayuno ejecutivo incluido.</p>
        <p>Acceso al centro de negocios.</p>
        <p>Precio: $350,000</p>
        <div class="btn">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>

    <article>
        <img src="./img/Habitacion romantica.jpg" alt="imagen de habitaciones">
        <h2>Habitación Romántica</h2>
        <p>Plan especial para parejas.</p>
        <p>1 noche en habitación romántica.</p>
        <p>Cena romántica para 2 incluida.</p>
        <p>Botella de vino y chocolates en la habitación.</p>
        <p>Precio: $300,000</p>
        <div class="btn">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>

    <article>
        <img src="./img/jacuzzi.jpg" alt="imagen de habitaciones">
        <h2>Habitación con Jacuzzi</h2>
        <p>Disfruta de un relajante baño en nuestro jacuzzi.</p>
        <p>3 noches en habitación con jacuzzi.</p>
        <p>Desayuno buffet incluido.</p>
        <p>Acceso a nuestros vinos.</p>
        <p>Precio: $500,000</p>
        <div class="btn">
            <a href="./pagar.php">Reservar o Pagar</a>
        </div>
    </article>
</section>

</body>
</html>