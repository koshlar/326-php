<?php
$arr = [
  [
    "title" => "Морковь",
    "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-Pat9uE5KBxj6qrf49UJ7hOzL0Xs4PgUG1g&s",
    "price" => 100,
  ],
  [
    "title" => "Морковь",
    "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-Pat9uE5KBxj6qrf49UJ7hOzL0Xs4PgUG1g&s",
    "price" => 100,
  ],
  [
    "title" => "Морковь",
    "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-Pat9uE5KBxj6qrf49UJ7hOzL0Xs4PgUG1g&s",
    "price" => 100,
  ],
  [
    "title" => "Морковь",
    "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-Pat9uE5KBxj6qrf49UJ7hOzL0Xs4PgUG1g&s",
    "price" => 100,
  ],
  [
    "title" => "Морковь",
    "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-Pat9uE5KBxj6qrf49UJ7hOzL0Xs4PgUG1g&s",
    "price" => 100,
  ],
];

?>

<div class="container">
  <div class="wrapper">
    <?php foreach ($arr as $product): ?>
      <article class="product_card">
        <img src="<?= $product['image'] ?>" alt="" class="product_card__cover">
        <h1 class="product_card__title"><?= $product['title'] ?></h1>
        <p class="product_card__price"><?= $product['price'] ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</div>