<?php 

    trait Discountable {
        protected $discount = 0; // Sconto predefinito a 0%
        
        // Metodo per impostare lo sconto
        public function setDiscount($discount) {
            $this->discount = $discount;
        }
        
        // Metodo per ottenere il prezzo scontato
        public function getDiscountedPrice() {
            $discountAmount = $this->getPrice() * ($this->discount / 100);
            return $this->getPrice() - $discountAmount;
        }
    }
?>