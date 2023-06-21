<?php 
    class Product{
        public $name;
        public $price = 0;
        public $description;
        public $animale;
        public $imgProduct;

        public function __construct($name, $price, $description, $animale,$imgProduct )
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->animale = $animale;
            $this->imgProduct = $imgProduct;
        }

        public function getPrice() {
            return $this->price . "€";
        }

    }


?>