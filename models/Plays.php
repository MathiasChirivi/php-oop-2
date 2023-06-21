<?php 
    class Plays extends Product{
        public $type;
        public $ProductDimensions;
        
        public function __construct($name, $price, $description, $category, $imgProduct, $type,$ProductDimensions )
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->category = $category;
            $this->imgProduct = $imgProduct;
            $this->type = $type;
            $this->ProductDimensions = $ProductDimensions;
        }

    }
?>