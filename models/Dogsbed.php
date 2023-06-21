<?php 
    class Dogsbed extends Product{
        public $BedDimension;
        public $MaterialProduct;
        
        public function __construct($name, $price, $description, $animale, $imgProduct, $BedDimension,$MaterialProduct )
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->animale = $animale;
            $this->imgProduct = $imgProduct;
            $this->BedDimension = $BedDimension;
            $this->MaterialProduct = $MaterialProduct;
        }

    }
?>