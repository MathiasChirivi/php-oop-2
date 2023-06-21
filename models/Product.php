<?php 
    class Product{
        public $name;
        public $price = 0;
        public $description;
        public $category;
        public $imgProduct;

        public function __construct($name, $price, $description, $category,$imgProduct )
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
            return $this->price . "€";
        }

    }


?>