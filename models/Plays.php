<?php 
    class Plays extends Product{
        use Discountable;

        public $type;
        public $ProductDimensions;
        
        public function __construct($name, $price, $description, Categoria $category, $imgProduct, $type,$ProductDimensions )
        {
            parent::__construct($name, $price, $description, $category, $imgProduct);

            $this->type = $type;
            $this->ProductDimensions = $ProductDimensions;
        }

    }
?>