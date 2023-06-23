<?php 

require __DIR__ . "/../traits/Discount.php";
    class Product{
        public $name;
        public $price = 0;
        public $description;
        public $category;
        public $imgProduct;

        public function __construct($name, $price, $description, Categoria $category,$imgProduct )
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            if($category instanceof Categoria){
                $this->category = $category;
            }else{
                die("La categoria non è valida");
            }
            $this->imgProduct = $imgProduct;
        }

        public function getPrice() {
            if(!is_numeric($this->price) || $this->price < 0){
                throw new Exception('Il dato non è numerico o è minore di 0');
            }
    
            return $this->price . " €";
        }

    }


?>