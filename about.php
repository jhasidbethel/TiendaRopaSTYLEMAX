<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="css/style.css">

   

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="imagenes/medium-shot-woman-with-shopping-bags-removebg-preview.png" alt="">
         <h3>¿porque elegirnos?</h3>
         <p>Stylemax es más que una tienda de ropa online, es un estilo de vida. Aquí encontrarás las últimas tendencias en moda para mujer y hombre, con diseños exclusivos y de calidad. Me encanta la variedad de prendas que ofrecen, desde jeans y polos hasta vestidos y accesorios. Además, el servicio al cliente es excelente, siempre están atentos a resolver cualquier duda o problema. Y lo mejor de todo, los envíos son rápidos y seguros. Sin duda, Stylemax es mi tienda de ropa favorita.</p>
         <a href="contact.php" class="btn">contactanos</a>
      </div>

      <div class="box">
         <img src="imagenes/close-up-hands-touching-clothes-removebg-preview.png" alt="">
         <h3>¿que ofrecemos?</h3>
         <p>En Stylemax ofrecemos una experiencia de compra única, donde podrás encontrar la ropa que mejor se adapta a tu personalidad y a tu presupuesto. Ofrecemos una amplia selección de prendas de diferentes estilos, desde casual y deportivo hasta elegante y formal. Todas nuestras prendas están hechas con materiales de alta calidad y con un cuidado diseño. Además, ofrecemos envíos gratuitos a partir de una cantidad mínima de compra, devoluciones fáciles y seguras, y un programa de fidelización con descuentos y beneficios exclusivos. En Stylemax, no solo vendemos ropa, vendemos moda.</p>
         <a href="shop.php" class="btn">nuestra tienda</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">opiniones de los clientes</h1>

   <div class="box-container">

      <div class="box">
         <img src="imagenes/images (7).jpg" alt="">
         <p>Stylemax es la mejor opción para comprar ropa online. La ropa es de excelente calidad y tiene un estilo elegante y casual. El envío es muy rápido y el servicio al cliente es muy atento y respetuoso. Estoy muy contento con mi compra y repetiré sin duda.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="imagenes/images.jpg" alt="">
         <p>Me encanta la ropa de stylemax, es de muy buena calidad y me queda de calidad. El envío fue rápido y el servicio al cliente muy amable. Recomiendo esta tienda online 100%.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jonatan martinez</h3>
      </div>

      <div class="box">
         <img src="imagenes/descarga (15).jpg" alt="">
         <p>No puedo estar más contenta con mi compra en stylemax. La ropa es preciosa y se ajusta a la descripción y las fotos. El envío fue muy rápido y el paquete llegó en perfectas condiciones. Además, el servicio al cliente es excelente y resuelve cualquier duda o problema.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Valentina navas</h3>
      </div>

      <div class="box">
         <img src="imagenes/descarga (1).jpg" alt="">
         <p>Stylemax es mi tienda favorita para comprar ropa online. Tienen una gran variedad de estilos y tallas, y la ropa es cómoda y duradera. El proceso de compra es fácil y seguro, y el envío es puntual y eficiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Elon musk</h3>
      </div>

      <div class="box">
         <img src="imagenes/images (2).jpg" alt="">
         <p>He comprado varias veces en stylemax y siempre quedo satisfecha. La ropa es de alta calidad y tiene un buen precio. El envío es muy rápido y el embalaje es cuidadoso. El servicio al cliente es muy eficiente y amable.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anna loaidas</h3>
      </div>

      <div class="box">
         <img src="imagenes/descarga.jpg" alt="">
         <p>Stylemax tiene la mejor ropa online que he probado. La calidad es increíble y los diseños son originales y modernos. El envío es muy rápido y el seguimiento es muy útil. Además, el servicio al cliente es muy atento y profesional.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Joaquín domínguez</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>