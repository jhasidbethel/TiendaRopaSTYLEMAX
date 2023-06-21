<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_wishlist'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);

   $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_wishlist_numbers->rowCount() > 0){
      $message[] = 'already added to wishlist!';
   }elseif($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{
      $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
      $insert_wishlist->execute([$user_id, $pid, $p_name, $p_price, $p_image]);
      $message[] = 'added to wishlist!';
   }

}

if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      $message[] = '!ya agregado al carrito!';
   }else{

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$p_name, $user_id]);

      if($check_wishlist_numbers->rowCount() > 0){
         $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
         $delete_wishlist->execute([$p_name, $user_id]);
      }

      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = '!añadido al carrito!';
   }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="../css/style.css"> 

   

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="portada">
   <a href="shop.php"><img src="../imagenes/portada.jpg" height= "500px" width= "1500px";></a>   
</div>


<section class="home-category">

   <h1 class="title">compra por categoria</h1>

   <div class="box-container">

      <div class="box">
         <img src="../imagenes/Nike.png" alt="">
         <h3>Sueteres</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=sueteres" class="btn">sueteres</a>
      </div>

      <div class="box">
         <img src="../imagenes/pngwing.com (12).png" alt="">
         <h3>Jeans</h3>
         <p>Prendas clásicas y modernas que se adaptan a tu figura. Diferentes modelos, tallas y lavados. Con rotos, desgastados, bordados o detalles.</p>
         <a href="category.php?category=jeans" class="btn">Jeans</a>
      </div>

      <div class="box">
         <img src="../imagenes/pngwing.com (4).png" alt="">
         <h3>Camisas</h3>
         <p>Prendas básicas y versátiles para combinar con diferentes estilos. Colores, estampados, tejidos y cortes variados.</p>
         <a href="category.php?category=camisas" class="btn">Camisas</a>
      </div>

      <div class="box">
         <img src="../imagenes/pngwing.com (3).png" alt="">
         <h3>Buzos</h3>
         <p>Prendas deportivas y urbanas para tu comodidad y practicidad. Algodón, poliéster, felpa y otros materiales suaves y transpirables.</p>
         <a href="category.php?category=buzos" class="btn">Buzos</a>
      </div>

      <div class="box">
         <img src="../imagenes/pngwing.com (26).png" alt="">
         <h3>Vestidos</h3>
         <p>Prendas femeninas y elegantes para cualquier ocasión. Diversos estilos, colores y estampados. Largos, cortos, midi, ajustados o sueltos.</p>
         <a href="category.php?category=vestidos" class="btn">Vestidos</a>
      </div>

      <div class="box">
         <img src="../imagenes/pngwing.com (22).png" alt="">
         <h3>Shorts</h3>
         <p>Prendas perfectas para los días calurosos o para un outfit casual y cómodo. Denim, tela, lino y otros materiales ligeros y frescos.</p>
         <a href="category.php?category=shorts" class="btn">Shorts</a>
      </div>

      <div class="box">
         <img src="../imagenes/pngwing.com (18).png" alt="">
         <h3>Chaquetas</h3>
         <p>Prendas imprescindibles para protegerte del frío y completar tu outfit. Cuero, denim, tela, lana y otros materiales resistentes y de calidad.</p>
         <a href="category.php?category=chaquetas" class="btn">Chaquetas</a>
      </div>

      <div class="box">
         <img src="../imagenes/pngwing.com (15).png" alt="">
         <h3>Jeans mujer</h3>
         <p>Prendas versátiles y modernas para combinar con todo. Diferentes modelos, tallas y lavados. Con rotos, desgastados, bordados o detalles.</p>
         <a href="category.php?category=jeans mujer" class="btn">Jeans mujer</a>
      </div>
   </div>

</section>

<section class="products">

   <h1 class="title">Ultimos productos</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" class="box" method="POST">
      <div class="price">$<span><?= $fetch_products['price']; ?></span>/-</div>
      <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <img src="../uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value=" lista de deseos" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="añadir al carrito" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">¡Aun no se han añadido productos!</p>';
   }
   ?>

   </div>

</section>







<?php include 'footer.php'; ?>

<script src="../js/script.js"></script>

</body>
</html>