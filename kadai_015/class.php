<!doctype html>
<html lang="ja">
  <head>
    <title>15章課題</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p>
      <?php
      class Food {
        private $name;
        private $price;

        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }

        public function show_price() {
          echo $this->price.'<br>';
        }
      }

      class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        public function show_height() {
          echo $this->height;
        }
      }

      $apple = new Food('apple', 150);
      $cat = new Animal('cat', 25, 5000);

      print_r($apple);
      echo '<br>';
      print_r($cat);
      echo '<br>';

      $apple->show_price();
      $cat->show_height();
      ?>
    </p>
  </body>
</html>
