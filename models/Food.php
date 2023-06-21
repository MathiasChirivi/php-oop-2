<?php 
    class Food extends Product{
        public $ingredients;

        public function __construct($name, $price, $description, $category, $imgProduct, $ingredients)
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->category = $category;
            $this->imgProduct = $imgProduct;
            $this->ingredients = $ingredients;
        }

    }
?>