<?php 

    trait Discountable {
        protected $discount = 0; // Sconto predefinito a 0%
        
        // Metodo per impostare lo sconto
        public function setDiscount($discount) {
            $this->discount = $discount;
        }
        
        // Metodo per ottenere il prezzo scontato
        public function getDiscountedPrice() {
            $discountAmount = ((float)$this->getPrice() * ((float)$this->discount / 100));
            $discountPrice = ((float)$this->getPrice() - (float)$discountAmount) ;
            return number_format($discountPrice, 2, '.', '') . " €";
        }
    }
?>