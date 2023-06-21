<?php 
    class Plays extends Product{
        public $type;
        public $ProductDimensions;
        
        public function __construct($name, $price, $description, $animale, $imgProduct, $type,$ProductDimensions )
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->animale = $animale;
            $this->imgProduct = $imgProduct;
            $this->type = $type;
            $this->ProductDimensions = $ProductDimensions;
        }

    }
?>