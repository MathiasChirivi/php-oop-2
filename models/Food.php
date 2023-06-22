<?php 
    class Food extends Product{
        public $ingredients;

        public function __construct($name, $price, $description, Categoria $category, $imgProduct, $ingredients)
        {
            parent::__construct($name, $price, $description, $category, $imgProduct);

            $this->ingredients = $ingredients;
        }

    }
?>