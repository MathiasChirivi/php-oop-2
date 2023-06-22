<?php 
    class Dogsbed extends Product{
        public $BedDimension;
        public $MaterialProduct;
        
        public function __construct($name, $price, $description, Categoria $category, $imgProduct, $BedDimension,$MaterialProduct )
        {
            parent::__construct($name, $price, $description, $category, $imgProduct);

            $this->BedDimension = $BedDimension;
            $this->MaterialProduct = $MaterialProduct;
        }

    }
?>